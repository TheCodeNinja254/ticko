/**
 * Created by FMMBUGUA on 6/22/2017.
 */


$(document).ready(function () {

    var url = "/ticko/Controllers/getEvents/";

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

                    $('#admin-display-events').jqoteapp('#admin-display-events-template', data.data);

                }else{


                    window.newToast("error", "No events added yet", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });

});

function removeEvent(event_id) {
    var url = "/ticko/Controllers/removeEvent/"+event_id;

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

                    $('#'+event_id).fadeOut( "slow");
                    window.newToast("success", "Event removed", "Success");

                }else{


                    window.newToast("error", "Event not removed", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });

}
