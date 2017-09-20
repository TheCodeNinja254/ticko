/**
 * Created by Fredrick on 6/19/2017.
 */

$(document).ready(function () {

    var url = "/ticko/Controllers/getOrganizerEvents/";

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

                    $('#org-events').jqoteapp('#org-events_template', data.data);

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

});

function changeEventDisplay(id, status) {

    var statusDiv = $('#status'+id);
    statusDiv.empty();
    statusDiv.html(status);
}


function viewBookings(event_id){
    $('#listBookingsTable').hide();

    if ( $.fn.dataTable.isDataTable( '#listBookingsTable' ) ) {
        table = $('#listBookingsTable').DataTable();

        table.destroy();
    }

    var first_url = "/ticko/Controllers/getSingleEvent/"+event_id;

    $.ajax({
        type        :   'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         :   first_url, // the url where we want to POST // our data object
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

                    $('#view-booking-e-name').html("   Event: "+data.data.e_name);

                    $('#viewBookingsModal').modal('toggle');

                }else{


                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });



    var url = "/ticko/Controllers/getPerEventBooking/"+event_id;

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                    $('#listBookingsTable').show();

                    $('#listBookingsTable').DataTable({
                        "data" :data.data,
                        "processing" : true,

                        columns : [ {
                            data : "booking_id"
                        }, {
                            data : "c_f_name"
                        }, {
                            data : "no_of_tickets"
                        }, {
                            data : "serial_no"
                        }, {
                            data : "amount"
                        }, {
                            data : "confirmation_code"
                        }]
                    });



                }else{

                    window.newToast("info", "No bookings made yet", "No Records");

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {
            window.newToast("warning", "An error occurred", "System Error");

        });
}

function updateEventStatus(event_id,status) {
    var url = "/ticko/Controllers/updateEventStatus/"+event_id+"/"+status;

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

                    changeEventDisplay(event_id, status);
                    window.newToast("success", "Done!");

                }else{


                    window.newToast("error", "Oops, failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });

}
