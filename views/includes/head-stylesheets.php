<?php
/**
 * Created by PhpStorm.
 * User: Fredrick
 * Date: 6/17/2017
 * Time: 3:04 PM
 */
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="theme-color" content="#000000">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" sizes="192x192" href="/ticko/assets/img/favicon.ico">

    <!-- reuse same icon for Safari -->
    <link rel="apple-touch-icon" href="/ticko/assets/img/favicon.ico">

    <!-- multiple icons for IE -->
    <meta name="msapplication-square310x310logo" content="img/Logo.png">

    <link rel="apple-touch-icon" href="/ticko/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="/ticko/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="/ticko/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="/ticko/assets/img/favicon.ico">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>TICKO</title>

    <!-- Font Awesome -->
    <link href="/ticko/assets/css/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton|Niconne" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/ticko/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/ticko/assets/css/mdb.css" rel="stylesheet">
    <link href="/ticko/assets/css/toastr.min.css" rel="stylesheet">

    <!-- Main styles -->
    <link href="/ticko/assets/css/update.css" type="text/css" rel="stylesheet">
    <link href="/ticko/assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="/ticko/assets/css/mediaqueries.css" type="text/css" rel="stylesheet">
    <style>
        .view {
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 60%;
        }
        .intro{
            background: url("/ticko/assets/img/landing.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        h4{
            margin-top: 2px;
            margin-bottom: 2px;
        }
        .card p{
            display: inline !important;
        }
        .card-block{
            padding: 0 !important;
        }
        .details p{
            display: inline !important;
        }
    </style>
    <style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
    </style>
    <script type="text/javascript" src="/ticko/assets/js/jquery-3.1.1.min.js"></script>
    <script src="/ticko/assets/js/typed.js" type="text/javascript"></script>
    <script>
        $(function(){

            $("#typed").typed({
                // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
                stringsElement: $('#typed-strings'),
                typeSpeed: 40,
                backDelay: 800,
                loop: false,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });

            $(".reset").click(function(){
                $("#typed").typed('reset');
            });

        });

        function newTyped(){ /* A new typed object */ }

        function foo(){ console.log("Callback"); }

    </script>
</head>

