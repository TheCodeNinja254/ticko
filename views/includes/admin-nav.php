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
                <img src="/ticko/assets/img/svg/001-user.svg" class="img-fluid rounded-circle">
                <p class="user text-center black-text" id="admin-fullname"></p>
            </div>
        </li>
        <!--/. Logo -->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a href="/ticko/" class="waves-effect"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/ticko/admin/" class="waves-effect"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i> Manage<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/ticko/admin/events/manage" class="waves-effect">Events</a>
                            </li>
                            <li><a href="/ticko/admin/organizers/manage" class="waves-effect">Organizers</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-lock"></i> Account<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="/ticko/admin/profile/password/change" class="waves-effect">Change Password</a>
                            </li>
                            <li><a href="/ticko/Controllers/logout/" class="waves-effect">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="/ticko/admin/logs/manage" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> System Logs</a>
<!--                <li><a href="invoice.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-money"></i> Invoice</a>-->
<!--                <li><a href="support.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-support"></i> Support</a>-->
<!--                <li><a href="faq.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>-->
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
            <li class="breadcrumb-item active">Hey <strong class="text-danger" id="admin-name"></strong>, Welcome to <strong class="text-danger">Ticko Admin Page</strong></li>
        </ol>

        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-sm-down"><i class="fa fa-bell"></i> Notifications<sup> <span class="badge red">5</span></sup></span>
                </a>
                <div class="dropdown-menu header-notifications animated dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <ul>
                        <li class="active-notification"><i class="fa fa-money" aria-hidden="true"></i> Your order has been dispatched <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span></li>
                        <li class="active-notification"><i class="fa fa-money" aria-hidden="true"></i> Your order has been received <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 51 min</span></li>
                        <li class="active-notification"><i class="fa fa-envelope" aria-hidden="true"></i> New Message <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 hours</span></li>
                        <li class="active-notification"><i class="fa fa-list" aria-hidden="true"></i> New Catalogue available <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 day</span></li>
                        <li class="active-notification"><i class="fa fa-envelope" aria-hidden="true"></i> Hi John... <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 day</span></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ticko/admin/logs/manage"><i class="fa fa-list-ul"></i> <span class="hidden-sm-down">Logs</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span>
                </a>
                <div class="dropdown-menu dropdown-ins dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/ticko/Controllers/logout/">Log Out</a>
                    <a class="dropdown-item" href="/ticko/admin/profile/account/edit">My account</a>
                </div>
            </li>
        </ul>
        <!--/Navbar links-->

    </nav>
    <!-- /.Navbar -->

</header>
<!--/.Double navigation-->
