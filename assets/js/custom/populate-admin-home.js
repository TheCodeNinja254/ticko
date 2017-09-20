/**
 * Created by FMMBUGUA on 6/22/2017.
 */

$(document).ready(function () {

    var url = "/ticko/Controllers/getOrganizers/";

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

                    $('#admin-display-org').jqoteapp('#admin-display-org-template', data.data);

                }else{


                    window.newToast("error", "No Organizers registered yet", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });

});

function removeOrganizer(o_username, fname) {
    var url = "/ticko/Controllers/removeOrganizer/"+o_username;

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

                    $('#'+fname).fadeOut( "slow");
                    window.newToast("success", "Organizer removed", "Success");

                }else{


                    window.newToast("error", "Organizer not removed", "Failed");
                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            window.newToast("warning", "An error occurred", "System Error");


        });

}
