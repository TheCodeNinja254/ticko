/**
 * Created by Fredrick on 1/26/2017.
 */

/*
 *  Version 0.9
 *
 * This code is written by TrioPoint Solutions
 * You may only use APIs inferred to in here with permission from TrioPoint Solutions,
 * otherwise the code is yours if you understand it -:)
 *
 * This code is responsible for adding and getting messages from the server.
 * The code is heavy and leads to huge traffic between the server and the browser, it is browser intensive
  * for this reason it is classified by TrioPoint as Dirty-Code
  * further improvements will be made to this code to lighten it.
 *
 */


$(function(){

    //initialize form
    var form = $("#chatAddMessageForm");

    // process the form
    form.submit(function(event) {


        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var message    =     $('textarea[name=chatNewMessage]').val();

        if(message === ''){
            // alert("Message Field cannot be empty");

            toastr["error"]("Message field cannot be empty");

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "2000",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

        }else{
            var formData = {
                'message'          :       message
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

                .done(function(data) {
                    $('textarea[name=chatNewMessage]').val("");


                    chatGetMessagesAfterSend();
                    // log data to the console so we can see
                    // console.log(data.data);

                    $(data.data).each(function(key,value){

                        if(value.response === true){


                            // toastr["success"]("Message sent!");

                            // toastr.options = {
                            //     "closeButton": true,
                            //     "debug": false,
                            //     "newestOnTop": true,
                            //     "progressBar": true,
                            //     "positionClass": "toast-top-right",
                            //     "preventDuplicates": false,
                            //     "onclick": null,
                            //     "showDuration": "2000",
                            //     "hideDuration": "1000",
                            //     "timeOut": "5000",
                            //     "extendedTimeOut": "1000",
                            //     "showEasing": "swing",
                            //     "hideEasing": "linear",
                            //     "showMethod": "fadeIn",
                            //     "hideMethod": "fadeOut"
                            // };


                        }else{


                            toastr["error"]("Message not sent!");

                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": true,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "1500",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }

                        }

                    });
                    // here we will handle errors and validation messages
                })

                .fail(function() {

                    // here we will handle errors and validation messages

                    toastr["warning"]("Error sending message");

                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "2000",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                });
        }



        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});




