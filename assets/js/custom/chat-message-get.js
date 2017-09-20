/**
 * Created by Fredrick on 1/26/2017.
 */

/*
 *  Version 1.0
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

$(document).ready(function () {

    $("#chatNewMessageArea").focus();
    $('html, body').animate({scrollTop:10000000000});

    chatGetMessages();

});

function refresh() {
    setTimeout(function(){
        asyncChatMessageChecker();
        refresh();
    }, 3000);
}

$(document).ready(function () {

    setTimeout(function(){
        asyncChatMessageChecker();
        refresh();
    }, 3000);

});


function chatGetMessages() {


    var url = "/ticko/Controllers/chatGetMessages/";

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {


            // $('html, body').animate({scrollTop:10000000000});

            // var message_body = $('#message-body')
            // message_body.scrollTop(message_body[0].scrollHeight);


            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){
                var message_body = $('#message-body');

                if(value.response === true){



                    message_body.empty();
                    message_body.jqoteapp('#message_template', data.data);

                }else{


                    message_body.empty();
                    message_body.append("<li class='list-group-item'><span>No messages.<br><br>Start a conversation</span></li>")

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            var message_body = $('#message-body');
            message_body.empty();
            message_body.append("<li class='list-group-item'><span>Messages Could not be retrieved</span><span style='font-size: small'><br>Oops! Network Failure!</span></li>")

        });
}

function notifyMe() {
    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
        // alert("This browser does not support desktop notification");
    }

    // Let's check whether notification permissions have already been granted
    else if (Notification.permission === "granted") {
        // If it's okay let's create a notification
        var notification = new Notification("New Message", { icon: "/ticko/assets/img/favicon.ico"});
    }

    // Otherwise, we need to ask the user for permission
    else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {
            // If the user accepts, let's create a notification
            if (permission === "granted") {
                var notification = new Notification("New Message", { icon: "/ticko/assets/img/favicon.ico"});
            }
        });
    }

    // At last, if the user has denied notifications, and you
    // want to be respectful there is no need to bother them any more.
}

function asyncChatMessageChecker() {


    // This code constantly checks if there are
    // new messages, incase of new messages, the app gets the messages

    var url = "/ticko/Controllers/asyncChatMessageChecker";

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(d) {


            // $('html, body').animate({scrollTop:10000000000});

            // var message_body = $('#message-body')
            // message_body.scrollTop(message_body[0].scrollHeight);


            // log data to the console so we can see
            // console.log(data.data);

            $(d.d).each(function(key,value){

                if(value.n === true){

                    chatGetMessages();
                    $.playSound('/ticko/assets/js/custom/notification/gets-in-the-way');
                    notifyMe();

                }else{

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            // var message_body = $('#message-body');
            // message_body.empty();
            // message_body.append("<li class='list-group-item'><span>Messages Could not be retrieved</span><span style='font-size: small'><br>Oops! Network Failure!</span></li>")

        });
}

function chatGetMessagesAfterSend() {


    var url = "/ticko/Controllers/chatGetMessages";

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {


            // $('html, body').animate({scrollTop:10000000000});


            // log data to the console so we can see
            // console.log(data.data);

            $(data).each(function(key,value){

                if(value.response === true){

                    var message_body = $('#message-body');

                    $("#chatNewMessageArea").focus();
                    message_body.empty();
                    message_body.jqoteapp('#message_template', data.data);

                }else{

                    $("#chatNewMessageArea").focus();
                    $('#message-body').append("<li class='list-group-item'><span>No messages.<br><br>Start a conversation</span></li>")

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            // here we will handle errors and validation messages

            $("#chatNewMessageArea").focus();
            $('#message-body').append("<li class='list-group-item'><span>Messages Could not be retrieved</span><span style='font-size: small'><br>Oops! Network Failure!</span></li>")

        });
}

function getUser(staff_email) {
    $('#getUserInfoModal').modal('toggle');
    $('#chat_staff_email_get').empty();
    $('#chat_staff_email_get_two').empty();
    $('#chat_profile_avatar_get').attr("src","");
    $('#chat_phone_get').empty();
    $('#chat_department_get').empty();

    var name = $('#chat_profile_name_get');
    name.empty();
    name.html("Loading...");


    var url = "/joytown/assets/res/joytown_api?method=getPassedStaffDetails&staff_email="+staff_email;

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data);

            $(data.data).each(function(key,value){

                if(value.success === true){

                    $('#chat_staff_email_get').html(staff_email);
                    $('#chat_staff_email_get_two').html(staff_email);
                    $('#chat_profile_avatar_get').attr("src","../assets/res/uploads/"+data.data.prof_pic);
                    $('#chat_profile_name_get').html(data.data.salutation+ " " +data.data.name);
                    $('#chat_department_get').html(data.data.department);
                    $('#chat_phone_get').html(data.data.phone);




                }else{

                    $('#chat_profile_name_get').html("Failed to retrieve user info");

                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

            $('#chat_profile_name_get').html("Failed to retrieve user info <br><span style='font-size: small'>Oops! Network Failure!</span>");

        });
}

$(document).keypress(function(e) {
    if(e.which == 13) {

        var message    =     $('textarea[name=chatNewMessage]').val();
        if(message === '' || message.length == 0 || !message){

            $("#chatNewMessageArea").focus();
        }else{
            $("#chatAddMessageForm").submit();
        }

    }
});


