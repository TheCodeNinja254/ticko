<?php
/**
 * Created by PhpStorm.
 * User: FMMBUGUA
 * Date: 6/19/2017
 * Time: 10:29 AM
 */
?>
<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="user-box">
                <img src="/ticko/assets/img/svg/001-user.svg" id="client-profile-pic" class="img-fluid rounded-circle">
                <p class="user text-center black-text" id="client-full-name"></p>
            </div>
        </li>
        <!--/. Logo -->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a href="/ticko/" class="waves-effect"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/ticko/client/" class="waves-effect"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="/ticko/client/my-events/" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i> My Events</a>
                <li><a href="/ticko/client/my-wishlist/" class="collapsible-header waves-effect arrow-r"><i class="fa fa-heart"></i> My Wishlist</a>
                <li><a class="collapsible-header waves-effect arrow-r" href="/ticko/client/chatroom"><i class="fa fa-comments"></i> <span class="hidden-sm-down">ChatRoom</span></a></li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-lock"></i> Account<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/ticko/client/profile" class="waves-effect">My profile</a>
                            </li>
                            <li><a href="/ticko/client/profile/password/change" class="waves-effect">Change Password</a>
                            </li>
                            <li><a href="/ticko/client/profile/account/edit" class="waves-effect">Edit Account</a>
                            </li>
                            <li><a href="/ticko/Controllers/logout/" class="waves-effect">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>
    </ul>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>

        </div>

        <!-- Breadcrumb-->
        <ol class="breadcrumb hidden-lg-down">
            <li class="breadcrumb-item active">Hey <strong class="text-danger" id="client-first-name"></strong>, Welcome to <strong class="text-danger">Ticko</strong></li>
        </ol>

        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/ticko/client/chatroom"><i class="fa fa-comments"></i> <span class="hidden-sm-down">ChatRoom</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ticko/client/my-events/"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">My Events</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span>
                </a>
                <div class="dropdown-menu dropdown-ins dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/ticko/Controllers/logout/">Log Out</a>
                    <a class="dropdown-item" href="/ticko/client/profile">My account</a>
                </div>
            </li>
        </ul>
        <!--/Navbar links-->

    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->
