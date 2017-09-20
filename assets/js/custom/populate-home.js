/**
 * Created by Fredrick on 6/19/2017.
 */

$(document).ready(function () {

    $('#logged_person').hide();
    getPaidEvents();
    getFreeEvents();
    initClientSessionChecker();
    initOrganizerSessionChecker();

});

function getPaidEvents() {
    var url = "/ticko/Controllers/getPaidEvents/";

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

                    $('#paid_events').jqoteapp('#paid_events_template', data.data);

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

function getFreeEvents() {
    var url = "/ticko/Controllers/getFreeEvents/";

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

                    $('#free_events').jqoteapp('#free_events_template', data.data);

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

function getSingleEvent(id){
    var url = "/ticko/Controllers/getSingleEvent/"+id;

    var name = $('#se_name');
    name.empty();
    $('#se_description').empty();
    $('#se_ed_time').empty();
    $('#se_fixed_participants').empty();
    $('#se_image').attr("src","");
    $('#se_participants').empty();
    $('#se_price').empty();
    $('#se_st_date').empty();
    $('#se_st_time').empty();
    $('#se_venue').empty();

    $('#details').modal('toggle');
    name.html("Loading...");

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

                    var name = $('#se_name');
                    name.empty();
                    name.html(data.data.e_name);
                    $('#se_description').html(data.data.e_description);
                    $('#se_ed_time').html(data.data.ed_time);
                    $('#se_fixed_participants').html(data.data.fixed_participants);
                    $('#se_image').attr("src","/ticko/Controllers/uploads/"+data.data.e_image);
                    $('#se_participants').html(data.data.participants);
                    $('#se_price').html(data.data.e_price);
                    $('#se_st_date').html(data.data.st_date);
                    $('#se_st_time').html(data.data.st_time);
                    $('#se_venue').html(data.data.venue);

                }else{


                    window.newToast("error", "We could not retrieve the event details, try again later", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages
            window.newToast("warning", "An error occurred", "System Error");

        });
}

function bookEvent(id) {


    var url = "/ticko/Controllers/getSingleEvent/"+id;

    var bf_event_id = $('#bf_event_id');
    bf_event_id.attr('value', '');


    $('#bookEventModal').modal('toggle');
    $('#se_book_name').html('Loading...');

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

                    var bf_event_id = $('#bf_event_id');
                    bf_event_id.attr('value',data.data.event_id);

                    var se_book_name = $('#se_book_name');
                    se_book_name.html(data.data.e_name);

                    $('#se_book_image').attr('src','/ticko/Controllers/uploads/'+data.data.e_image);

                }else{


                    window.newToast("error", "We could not retrieve the event details, try again later", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages
            window.newToast("warning", "An error occurred", "System Error");

        });

}

function buyTicket(id) {


    var url = "/ticko/Controllers/getSingleEvent/"+id;

    var bf_event_id = $('#bf_event_id');
    bf_event_id.attr('value', '');

    var bt_max_tickets_1 = $('#bt_max_tickets_1');
    var bt_max_tickets_2 =$('#bt_max_tickets_2');

    bt_max_tickets_1.attr('value', '');
    bt_max_tickets_2.empty();


    $('#buyTicketModal').modal('toggle');
    $('#se_buy_name').html('Loading...');

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

                    var bt_event_id = $('#bt_event_id');
                    bt_event_id.attr('value',data.data.event_id);

                    var se_buy_name = $('#se_buy_name');
                    se_buy_name.empty();
                    se_buy_name.html(data.data.e_name);

                    var bt_max_tickets_1 = $('#bt_max_tickets_1');
                    var bt_max_tickets_2 =$('#bt_max_tickets_2');

                    bt_max_tickets_1.attr('max', data.data.participants);
                    bt_max_tickets_2.html(data.data.participants);

                    $('#se_buy_image').attr('src','/ticko/Controllers/uploads/'+data.data.e_image);

                }else{


                    window.newToast("error", "We could not retrieve the event details, try again later", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages
            window.newToast("warning", "An error occurred", "System Error");

        });
}

function checkClientSession(id, source) {


    var url = "/ticko/Controllers/getClientDetails/";

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

            $(data.data).each(function(key,value){

                if(value.response === true){
                    if(source === 'booking'){

                        $('#bf_client_fullname').html(data.data.c_f_name+" "+data.data.c_l_name);
                        $('#bf_client_email').html(data.data.c_username);

                        bookEvent(id);

                    }else if(source === 'purchase'){

                        $('#bt_client_fullname').html(data.data.c_f_name+" "+data.data.c_l_name);
                        $('#bt_client_email').html(data.data.c_username);

                        buyTicket(id);

                    }else{

                    }

                }else{

                    $('#clientLoginModal').modal('toggle');

                    window.newToast("info", "Login to proceed");

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages
            window.newToast("warning", "An error occurred, Could not verify the Login Session", "System Error");

        });
}

function initClientSessionChecker() {


    var url = "/ticko/Controllers/getClientDetails/";

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

            $(data.data).each(function(key,value){

                if(value.response === true){

                    $('#logged_person_name').html('<i class="fa fa-fw fa-user red-text"></i>'+data.data.c_f_name);
                    $('#logged_person_dashboard').attr('href','/ticko/client/');
                    $('#logged_person').show();
                    $('#account_menu').hide();

                }else{

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages
            window.newToast("warning", "An error occurred, Could not verify the Login Session", "System Error");

        });
}

function initOrganizerSessionChecker() {


    var url = "/ticko/Controllers/getOrganizerDetails/";

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

            $(data.data).each(function(key,value){

                if(value.response === true){

                    $('#logged_person_name').html('<i class="fa fa-fw fa-user red-text"></i>'+data.data.o_f_name);
                    $('#logged_person_dashboard').attr('href','/ticko/dashboard/');
                    $('#logged_person').show();
                    $('#account_menu').hide()

                }else{

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages
            window.newToast("warning", "An error occurred, Could not verify the Login Session", "System Error");

        });
}

$(function () {

    //initialize form
    var form = $("#makeBookingForm");
    form.submit(function (event) {

        // process the form

        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var formData = {
            'no_of_tickets': $('input[name=b_no_of_tickets]').val(),
            'event_id': $('input[name=bf_event_id]').val()
        };


        // console.log(formData);

        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: url, // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true

        })
        // using the done promise callback

            .done(function (data) {

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "You have successfully booked for the event, your booking id: "+data.data.booking_id, "Booking Successful");
                        // $(location).attr('href', '/ticko/admin/'+data.data.name+"/");


                    } else {


                        window.newToast("error", "Seems like you have already booked for the event", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Check your network connection!", "Are you're Connected? Network Failure!");

            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#makePurchaseForm");
    form.submit(function (event) {

        // process the form

        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var formData = {
            'no_of_tickets': $('input[name=p_no_of_tickets]').val(),
            'event_id': $('input[name=bt_event_id]').val()
        };


        // console.log(formData);

        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: url, // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true

        })
        // using the done promise callback

            .done(function (data) {

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "Your booking has been sent successfully, proceed to the dashboard to pay", "Ticket sent");
                        // $(location).attr('href', '/ticko/admin/'+data.data.name+"/");


                    } else {


                        window.newToast("error", "Booking Failed, try again soon", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Check your network connection!", "Are you're Connected? Network Failure!");

            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});