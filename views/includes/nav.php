<?php
/**
 * Created by PhpStorm.
 * User: Greats
 * Date: 3/29/2017
 * Time: 2:28 PM
 */
?>

<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-black" href="#">
            <strong class="text-red">TICKO </strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/ticko/home/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ticko/home/#free">Free&nbsp;Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ticko/home/#paid">Paid&nbsp;Events</a>
                </li>
<!--                <li class="nav-item mobi-navs">-->
<!--                    <a class="text-black" style="color: #000 !important;" href="#" data-toggle="modal" data-target="#cart-modal-ex"><i class="fa fa-shopping-bag red-text"></i> Cart</a>-->
<!--                </li>-->

                <!--<li class="nav-item">-->
                <!--<a class="nav-link waves-effect waves-light"><i class="fa fa-gear"></i> Settings</a>-->
                <!--</li>-->
            </ul>
            <div class="collapse navbar-collapse" id="navbarNav3">
                <ul class="navbar-nav ml-auto">
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link waves-effect waves-light text-black" href="#" data-toggle="modal" data-target="#cart-modal-ex"><i class="fa fa-shopping-bag red-text"></i> Cart</a>-->
<!--                    </li>-->
                    <!--<li class="nav-item">-->
                    <!--<a class="nav-link waves-effect waves-light"><i class="fa fa-gear"></i> Settings</a>-->
                    <!--</li>-->
                    <li class="nav-item dropdown" id="account_menu">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user red-text"></i> Account</a>
                        <div class="dropdown-menu dropdown-default dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item waves-effect waves-light" data-toggle="modal" data-target="#clientLoginModal">Client Login</a>
                            <a class="dropdown-item waves-effect waves-light" data-toggle="modal" data-target="#clientRegistrationModal">Client Registration</a>
                            <a class="dropdown-item waves-effect waves-light" data-toggle="modal" data-target="#organizerLoginModal">Organizer Login</a>
                            <a class="dropdown-item waves-effect waves-light" data-toggle="modal" data-target="#organizerRegistrationModal">Organizer Registration</a>
                            <a class="dropdown-item waves-effect waves-light" data-toggle="modal" data-target="#adminLoginModal">Admin Login</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown" id="logged_person">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="logged_person_name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user red-text"></i></a>
                        <div class="dropdown-menu dropdown-default dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item waves-effect waves-light" id="logged_person_dashboard" href="">Dashboard</a>
                            <a class="dropdown-item waves-effect waves-light" href="/ticko/Controllers/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--/.Navbar-->


