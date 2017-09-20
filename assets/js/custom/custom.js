/*
 *
 * This code is written by Joseph Nzioka
 * You may only use APIs inferred to in here with permission from TrioPoint Solutions,
 * otherwise the code is yours if you understand it -:)
 *
 * This code is meant for Ticko System.
 * When I created it this, only God and I understood it, now, only God. Please increment hours wasted for the
 * next lazy developer!
 * TIME WASTED: 12 HRS
 */


$(function () {

    //initialize form
    $("#clientLoginForm").submit(function (event) {

        // process the form
        var form = $("#clientLoginForm");
        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var formData = {
            'c_username1': $('input[name=c_username1]').val(),
            'c_password1': $('input[name=c_password1]').val()
        };


        console.log(formData);

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
                $('input[name=c_username1]').val("");
                $('input[name=c_password1]').val("");

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "Login Successful, redirecting", "");

                        $(location).attr('href', '/ticko/client/'+data.data.name+"/");


                    } else {


                        window.newToast("error", "Login Failed, Incorrect Username or Password", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Login not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#updateClientPasswordForm");

    // process the form
    form.submit(function (event) {


        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var password = $('input[name=c__password]').val();
        var confirm_password = $('input[name=c__password_confirm]').val();

        if (password === confirm_password) {

            var formData = {
                'c_password': password,
                'c_current_password': $('input[name=c__current_password]').val()
            };


            // console.log(formData);
            // console.log(confirm_password);

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

                            window.newToast("success", "Password changed successfully", "");

                        } else {

                            window.newToast("error", "The current password given was wrong", "Oops Failed");
                        }

                    });
                    // here we will handle errors and validation messages
                })
                .fail(function () {

                    // here we will handle errors and validation messages

                    window.newToast("warning", "Check your network connection!", "Are you're Connected? Network Failure!");

                });
        } else {
            window.newToast("info", "The passwords do not match", "Password Mismatch");
        }

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#updateOrganizerPasswordForm");

    // process the form
    form.submit(function (event) {


        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var password = $('input[name=o__password]').val();
        var confirm_password = $('input[name=o__password_confirm]').val();

        // console.log(password);
        // console.log(confirm_password);

        if (password === confirm_password) {

            var formData = {
                'o_password': password,
                'o_current_password': $('input[name=o__current_password]').val()
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


                            window.newToast("success", "Password changed successfully", "");


                        } else {


                            window.newToast("error", "Incorrect current password", "Oops Failed");
                        }

                    });
                    // here we will handle errors and validation messages
                })

                .fail(function () {

                    // here we will handle errors and validation messages

                    window.newToast("warning", "Check your network connection!", "Are you're Connected? Network Failure!");

                });
        } else {
            window.newToast("info", "The passwords do not match", "Password Mismatch");
        }

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    $("#organizerLoginForm").submit(function (event) {

        // process the form
        var form = $("#organizerLoginForm");
        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var formData = {
            'o_username1': $('input[name=o_username1]').val(),
            'o_password1': $('input[name=o_password1]').val()
        };


        console.log(formData);

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
                $('input[name=o_username1]').val("");
                $('input[name=o_password1]').val("");

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "Login Successful, redirecting", "");

                        $(location).attr('href', '/ticko/dashboard/'+data.data.name+"/");


                    } else {


                        window.newToast("error", "Login Failed, Incorrect Username or Password", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Login not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#clientRegistrationForm");

    // process the form
    form.submit(function (event) {


        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var password = $('input[name=c_password]').val();
        var confirm_password = $('input[name=c_password_confirm]').val();

        if (password === confirm_password) {

        var formData = {
            'username': $('input[name=c_username]').val(),
            'password': password,
            'c_f_name': $('input[name=c_f_name]').val(),
            'c_l_name': $('input[name=c_l_name]').val(),
            'c_phone': $('input[name=c_phone]').val()
        };


        console.log(formData);
        console.log(confirm_password);

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
                $('input[name=username]').val("");
                $('input[name=password]').val("");
                $('input[name=c_f_name]').val("");
                $('input[name=c_l_name]').val("");
                $('input[name=c_phone]').val("");

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "Registration Successful, Login to continue", "");
                        $('#clientRegistrationModal').modal('toggle');
                        $('#clientLoginModal').modal('toggle');


                    } else {


                        window.newToast("error", "Registration Failed, Try again later", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Registration not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

            });
        } else {
            window.newToast("info", "The passwords do not match", "Password Mismatch");
        }

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#updateClientProfileForm");

    // process the form
    form.submit(function (event) {

        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)

            var formData = {
                'c_f_name': $('input[name=c__f_name]').val(),
                'c_l_name': $('input[name=c__l_name]').val(),
                'c_phone': $('input[name=c__phone]').val()
            };

            // console.log(formData);
            // console.log(confirm_password);

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
                    $('input[name=c__f_name]').val("");
                    $('input[name=c__l_name]').val("");
                    $('input[name=c__phone]').val("");

                    // log data to the console so we can see
                    // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                    $(data.data).each(function (key, value) {

                        if (value.response === true) {
                            window.newToast("success", "Password changed successfully", "");
                            getClientDetails();
                        } else {
                            window.newToast("error", "Password change failed", "Oops Failed");
                        }

                    });
                    // here we will handle errors and validation messages
                })

                .fail(function () {
                    // here we will handle errors and validation messages
                    window.newToast("warning", "Registration not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

                });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#organizerRegistrationForm");

    // process the form
    form.submit(function (event) {


        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var password = $('input[name=o_password]').val();
        var confirm_password = $('input[name=o_password_confirm]').val();

        if (password === confirm_password) {

        var formData = new FormData($(this)[0]);

            formData.append = {
                'o_username': $('input[name=o_username]').val(),
                'o_password': password,
                'o_f_name': $('input[name=o_f_name]').val(),
                'o_l_name': $('input[name=o_l_name]').val(),
                'o_phone': $('input[name=o_phone]').val(),
                'company_name': $('input[name=company_name]').val(),
                'company_address': $('input[name=company_address]').val(),
                'company_description': $('textarea[name=company_description]').val()
            };



        console.log(formData);
        console.log(confirm_password);

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
                $('input[name=username]').val("");
                $('input[name=password]').val("");
                $('input[name=c_f_name]').val("");
                $('input[name=c_l_name]').val("");
                $('input[name=c_phone]').val("");

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "Registration Successful, Login to continue", "");

                        $('#organizerRegistrationModal').modal('toggle');
                        $('#organizerLoginModal').modal('toggle');


                    } else {


                        window.newToast("error", "Registration Failed, Try again later", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Registration not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

            });
        } else {
            window.newToast("info", "The passwords do not match", "Password Mismatch");
        }

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#updateOrganizerProfileForm");

    // process the form
    form.submit(function (event) {
        var url = form.attr("action");
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)

        var formData = {
                'o_f_name': $('input[name=o__f_name]').val(),
                'o_l_name': $('input[name=o__l_name]').val(),
                'o_phone': $('input[name=o__phone]').val(),
                'company_name': $('input[name=company__name]').val(),
                'company_address': $('input[name=company__address]').val()
            };

            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : url, // the url where we want to POST
                data        : formData, // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode      : true

            })
            // using the done promise callback

                .done(function (data) {
                    // log data to the console so we can see
                    $(data.data).each(function (key, value) {

                        if (value.response === true) {

                            window.newToast("success", "Account updated successfully", "");
                            getOrganizerDetails();

                        } else {
                            window.newToast("error", "Account updated failed", "Oops Failed");
                        }

                    });
                    // here we will handle errors and validation messages
                })

                .fail(function () {

                    // here we will handle errors and validation messages
                    window.newToast("warning", "Registration not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

                });
             // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#adminLoginForm");
    form.submit(function (event) {

        // process the form

        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var formData = {
            'ad_username': $('input[name=ad_username]').val(),
            'ad_password': $('input[name=ad_password]').val()
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
                $('input[name=username]').val("");
                $('input[name=password]').val("");

                // log data to the console so we can see
                // console.log(data.data);
//key ni ile value iko left na value ni vale iko right eg response:true
                $(data.data).each(function (key, value) {

                    if (value.response === true) {


                        window.newToast("success", "Login Successful, redirecting", "");
                        $(location).attr('href', '/ticko/admin/'+data.data.name+"/");


                    } else {


                        window.newToast("error", "Login Failed, Incorrect Username or Password", "Oops Failed");
                    }

                });
                // here we will handle errors and validation messages
            })

            .fail(function () {

                // here we will handle errors and validation messages

                window.newToast("warning", "Login not  successfully, check your network connection!", "Are you're Connected? Network Failure!");

            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});

$(function () {

    //initialize form
    var form = $("#updateAdminPasswordForm");

    // process the form
    form.submit(function (event) {


        var url = form.attr("action");

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var password = $('input[name=ad__password]').val();
        var confirm_password = $('input[name=ad__password_confirm]').val();
        console.log(password);
        console.log(confirm_password);


        if (password === confirm_password) {

            var formData = {
                'ad_password': password,
                'ad_current_password': $('input[name=c__current_password]').val()
            };


            // console.log(formData);
            // console.log(confirm_password);

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

                            window.newToast("success", "Password changed successfully", "");

                        } else {

                            window.newToast("error", "The current password given was wrong", "Oops Failed");
                        }

                    });
                    // here we will handle errors and validation messages
                })
                .fail(function () {

                    // here we will handle errors and validation messages

                    window.newToast("warning", "Check your network connection!", "Are you're Connected? Network Failure!");

                });
        } else {
            window.newToast("info", "The passwords do not match", "Password Mismatch");
        }

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});





