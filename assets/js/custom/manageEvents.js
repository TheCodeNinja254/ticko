/**
 * Created by FMMBUGUA on 6/19/2017.
 */
$(document).ready( function() {
    SanityChecker();
});

 function SanityChecker(){
     if($('select[name=e_category').val() == 'Free'){
         $('#e_price').hide();
     }else{
         $('#e_price').show();
     }
 }

$(function () {

    //initialize form
    var form = $("#addEventForm");

    // process the form
    form.submit(function (event) {
        event.preventDefault();

        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)

            var formData = new FormData($(this)[0]);

            formData.append = {
                'e_name': $('input[name=e_name]').val(),
                'venue': $('input[name=venue]').val(),
                'fixed_participants': $('input[name=fixed_participants]').val(),
                'e_category': $('select[name=e_category]').val(),
                'st_time': $('input[name=st_time]').val(),
                'ed_time': $('input[name=ed_time]').val(),
                'st_date': $('input[name=st_date]').val(),
                'ed_date': $('input[name=ed_date]').val(),
                'e_price': $('input[name=e_price]').val(),
                'e_description': $('textarea[name=e_description]').val()
            };



            console.log(formData);


            // process the form
            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : url, // the url where we want to POST
                data        : formData, // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode      : true,
                async       : false,
                cache       : false,
                contentType : false,
                enctype     : 'multipart/form-data',
                processData : false

            })
            // using the done promise callback

                .done(function (data) {
                    $('input[name=e_name]').val("");
                    $('input[name=venue]').val("");
                    $('input[name=fixed_participants]').val("");
                    $('input[name=e_category]').val("");
                    $('input[name=st_time]').val("");
                    $('input[name=ed_time]').val("");
                    $('input[name=st_date]').val("");
                    $('input[name=ed_date]').val("");
                    $('textarea[name=e_description]').val("");
                    $('input[name=e_price]').val("");

                    // log data to the console so we can see
                    // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                    $(data.data).each(function (key, value) {

                        if (value.response === true) {


                            window.newToast("success", "Event added successfully.", "");


                        } else {


                            window.newToast("error", "Event not added, try again later", "Oops Failed");
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
