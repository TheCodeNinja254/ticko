$(document).ready(function () {

    getClientFreeEvents();
    getClientPaidEvents();

});

function getClientFreeEvents() {
    var url = "/ticko/Controllers/getFreeClientEvents/";

    $.ajax({
        type        :   'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         :   url, // the url where we want to POST // our data object
        dataType    :   'json', // what type of data do we expect back from the server
        encode      :   true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                    $('#org-free-events').jqoteapp('#org-free-events_template', data.data);

                }else{


                    window.newToast("error", "No Events added yet", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });
}

function getClientPaidEvents() {
    $('#org-paid-events').empty();
    var url = "/ticko/Controllers/getPaidClientEvents/";

    $.ajax({
        type        :   'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         :   url, // the url where we want to POST // our data object
        dataType    :   'json', // what type of data do we expect back from the server
        encode      :   true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                   if(data.data.status === "Paid"){
                       data.data.append = {
                           "button" : "PAID"
                       }
                   }else{
                       data.data.append = {
                           "button" : "PAY"
                       }
                   }

                    $('#org-paid-events').jqoteapp('#org-paid-events_template', data.data);

                }else{


                    window.newToast("error", "No Events added yet", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });
}

function getLipaNaMpesaDetails(booking_id) {
    var url = "/ticko/Controllers/getSingleBooking/"+booking_id;

    $.ajax({
        type        :   'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         :   url, // the url where we want to POST // our data object
        dataType    :   'json', // what type of data do we expect back from the server
        encode      :   true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                    var total_payable = data.data.e_price * data.data.no_of_tickets;
                    var bi = data.data.booking_id;

                    $('#mpesa-e-name').html(data.data.e_name);
                    $('#mpesa-e-price').html("Ksh. "+data.data.e_price);
                    $('#mpesa-no-of-tickets').html(data.data.no_of_tickets);
                    $('#mpesa-o-phone').html(data.data.o_phone);
                    $('#mpesa-total-pay').html("Ksh. "+total_payable);
                    $('#mpesa-total-pay2').html("Ksh. "+total_payable);
                    $('#mpesa-booking-id').val(bi);

                    $('#mpesa').modal('toggle');

                }else{


                    window.newToast("error", "Could not retrieve payment details, try again later", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });
}

$(function () {

    //initialize form
    var form = $("#validateMpesaCodeForm");

    // process the form
    form.submit(function (event) {
        event.preventDefault();

        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)

        var formData = {
            'confirmation_code': $('input[name=confirmation_code]').val(),
            'mpesa_booking_id': $('input[name=mpesa_booking_id]').val()
        };



        // console.log(formData);


        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : url, // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true

        })
        // using the done promise callback

            .done(function (data) {
                $('input[name=confirmation_code]').val("");

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data).each(function (key, value) {

                    if (value.response === true) {



                        window.newToast("success", "Valid MPESA confirmation code", data.data.receipt);

                        $('#mpesa').modal('toggle');

                        getMpesaInfo(data.data.receipt);
                        getbookingAfterPay(data.booking_id);
                        getClientPaidEvents();


                    } else {

                        window.newToast("error", "Invalid MPESA confirmation code", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Check your network connection!", "Are you're Connected? Network Failure!");

            });

        // stop the form from submitting the normal way and refreshing the page

    });
});

function getMpesaInfo(confirmation_code) {
    var url = "/ticko/Controllers/getMpesaInfo/"+confirmation_code;

    $.ajax({
        type        :   'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         :   url, // the url where we want to POST // our data object
        dataType    :   'json', // what type of data do we expect back from the server
        encode      :   true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                    $('#success-confirmation-code').html(data.data.receipt);
                    $('#success-mpesa-message').html(data.data.note);
                    $('#success-payment-amount').html(data.data.amount / 100);
                    $('#success-payment-time').html(data.data.time);



                    $('#after-mpesa').modal('toggle');

                }else{


                    window.newToast("error", "Could not retrieve payment details, try again later", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });
}

function getbookingAfterPay(booking_id) {
    var url = "/ticko/Controllers/getSingleBooking/"+booking_id;

    $.ajax({
        type        :   'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         :   url, // the url where we want to POST // our data object
        dataType    :   'json', // what type of data do we expect back from the server
        encode      :   true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                    $('#success-ed-time').html(data.data.ed_time);
                    $('#success-st-time').html(data.data.st_time);
                    $('#success-st-date').html(data.data.st_date);
                    $('#success-event-venue').html(data.data.venue);
                    $('#success-event-name').html(data.data.e_name);
                    $('#success-o-name').html(data.data.o_f_name+" "+data.data.o_l_name);
                    $('#success-ticket-number').html(data.data.serial_no);


                }else{


                    window.newToast("error", "Could not retrieve payment details, try again later", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });
}
