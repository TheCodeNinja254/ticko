<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 14:58:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../../../maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <!-- Customizer -->
    <link rel="stylesheet" href="../../css/customizer.min.css">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fixed-sn white-skin">

    <!-- Customizer -->
    <div id="customizer" class="z-depth-1">
        <a href="#" id="toggle" data-toggle="tooltip" data-placement="left" title="Customize your template!"><i class="fa fa-cog" aria-hidden="true"></i></a>
        <div class="inner">
            <p class="text-center customizer-heading">Pick a skin color</p>
            <ul class="skins-list">
                <li><a href="#" data-skin-color="deep-purple-skin"><span class="color skin-deep-purple"></span></a></li>
                <li><a href="#" data-skin-color="navy-blue-skin"><span class="color skin-navy-blue"></span></a></li>
                <li><a href="#" data-skin-color="cyan-skin"><span class="color skin-cyan"></span></a></li>
                <li><a href="#" data-skin-color="pink-skin"><span class="color skin-pink"></span></a></li>
                <li><a href="#" data-skin-color="indigo-skin"><span class="color skin-indigo"></span></a></li>
                <li><a href="#" data-skin-color="light-blue-skin"><span class="color skin-light-blue"></span></a></li>
                <li><a href="#" data-skin-color="grey-skin"><span class="color skin-grey"></span></a></li>
                <li><a href="#" data-skin-color="white-skin"><span class="color skin-white"></span></a></li>
                <li><a href="#" data-skin-color="black-skin"><span class="color skin-black"></span></a></li>
                <li><a href="#" data-skin-color="mdb-skin"><span class="color skin-mdb"></span></a></li>
            </ul>
            <p class="text-center customizer-heading">SideNav Background Type</p>
            <form class="form-inline">
                <fieldset class="form-group">
                    <input name="group1" type="radio" id="radio11" value="flat">
                    <label for="radio11">Flat</label>
                </fieldset>

                <fieldset class="form-group">
                    <input name="group1" type="radio" id="radio21" value="gradient">
                    <label for="radio21">Gradient</label>
                </fieldset>

                <fieldset class="form-group">
                    <input name="group1" type="radio" id="radio31" value="background" checked="checked">
                    <label for="radio31">Image</label>
                </fieldset>
            </form>

            <div id="bg-option">
                <p class="text-center customizer-heading">Background Image</p>

                <div class="bg-img-preview">
                    <label for="radio12"><img class="img-fluid" src="../../../../img/Others/sidenav1-min.jpg" alt="Option 1"></label>
                    <label for="radio22"><img class="img-fluid" src="../../../../img/Others/sidenav2-min.jpg" alt="Option 2"></label>
                    <label for="radio32"><img class="img-fluid" src="../../../../img/Others/sidenav3-min.jpg" alt="Option 3"></label>
                    <label for="radio42"><img class="img-fluid" src="../../../../img/Others/sidenav4-min.jpg" alt="Option 4"></label>
                </div>

                <form class="form-inline bg-img-options">
                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio12" value="1" checked="checked">
                        <label for="radio12"></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio22" value="2">
                        <label for="radio22"></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio32" value="3">
                        <label for="radio32"></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group2" type="radio" id="radio42" value="4">
                        <label for="radio42"></label>
                    </fieldset>
                </form>

                <p class="text-center customizer-heading">Mask opacity</p>

                <form class="form-inline">
                    <fieldset class="form-group">
                        <input name="group3" type="radio" id="radio13" value="strong" checked="checked">
                        <label for="radio13">Strong</label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group3" type="radio" id="radio23" value="light">
                        <label for="radio23">Light</label>
                    </fieldset>

                    <fieldset class="form-group">
                        <input name="group3" type="radio" id="radio33" value="slight">
                        <label for="radio33">Slight</label>
                    </fieldset>
                </form>
            </div>

            <div>
                <p class="text-center customizer-heading d-inline">Fixed sidenav</p>
                <div class="switch d-inline-block float-right">
                    <label>
                        Off
                        <input type="checkbox" checked="checked">
                        <span class="lever"></span> On
                    </label>
                </div>
            </div>

            <a href="https://mdbootstrap.com/product/admin-theme/" type="button" class="btn light-blue darken-2 btn-block">Buy now</a>
        </div>
    </div>
    <!-- /.Customizer -->

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="user-box">
                    <img src="../../../../img/Photos/Avatars/avatar-5.jpg" class="img-fluid rounded-circle">
                    <p class="user text-center black-text">Jane Doe</p>
                </div>
            </li>
            <!--/. Logo -->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Dashboards<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="organizer-home.view.php" class="waves-effect">Dahboard v1</a>
                                </li>
                                <li><a href="home%20v2.html" class="waves-effect">Dahboard v2</a>
                                </li>
                                <li><a href="home%20v3.html" class="waves-effect">Dahboard v3</a>
                                </li>
                            </ul>
                        </div></li>
                    <li><a href="analytics.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i> Analytics</a>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Creators<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="modals.php" class="waves-effect">Modals</a>
                                </li>
                                <li><a href="page-create.php" class="waves-effect">Create Page</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-lock"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="signup.php" class="waves-effect">Sign up</a>
                                </li>
                                <li><a href="signup%20v2.html" class="waves-effect">Sign up v2</a>
                                </li>
                                <li><a href="login.php" class="waves-effect">Login</a>
                                </li>
                                <li><a href="editaccount.php" class="waves-effect">Edit Account</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart"></i> SEO<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="seo-overview.php" class="waves-effect">Overview</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="clients.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Clients</a>
                    <li><a href="invoice.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-money"></i> Invoice</a>
                    <li><a href="support.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-support"></i> Support</a>
                    <li><a href="faq.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>
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
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
            
            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <li class="nav-item">
                    <a class="nav-link">
                        <span class="badge red">9 </span> <i class="fa fa-upload"></i>
                        <span class="hidden-sm-down">Publish changes</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge red">99</span> <i class="fa fa-bell"></i>
                        <span class="hidden-sm-down">Notifications</span>
                    </a>
                    <div class="dropdown-menu header-notifications animated dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <ul>
                            <li class="active-notification"><i class="fa fa-user" aria-hidden="true"></i> New order received <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span></li>
                            <li class="active-notification"><i class="fa fa-user" aria-hidden="true"></i> New order received <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 51 min</span></li>
                            <li class="active-notification"><i class="fa fa-bullhorn" aria-hidden="true"></i> Your campaign is about to end <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 hours</span></li>
                            <li class="active-notification"><i class="fa fa-line-chart" aria-hidden="true"></i> Raport is ready to be downloaded <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 day</span></li>
                            <li class="active-notification"><i class="fa fa-life-saver" aria-hidden="true"></i> Something else <span class="float-right grey-text"><i class="fa fa-clock-o" aria-hidden="true"></i> 1 day</span></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span>
                    </a>
                    <div class="dropdown-menu dropdown-ins dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Log Out</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>
            </ul>
            <!--/Navbar links-->
            
        </nav>
        <!-- /.Navbar -->
        
    </header>
    <!--/.Double navigation-->
    <!--Main layout-->
    <main class="">
        <div class="container-fluid">
            
            <!-- FAQ Section -->
            <section class="section">

                <!-- Section Heading -->
                <h2 class="section-heading">Frequently Asked Questions</h2>

                <!-- First row -->
                <div class="row">
                    
                    <div class="col-lg-8 mx-auto float-none">
                        
                         <!--Accordion wrapper-->
                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h5 class="mb-0">
                                        Question #1 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="mb-0">
                                        Question #2 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5 class="mb-0">
                                        Question #3 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFour">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h5 class="mb-0">
                                        Question #4 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFive">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <h5 class="mb-0">
                                        Question #5 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingSix">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <h5 class="mb-0">
                                        Question #6 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingSeven">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <h5 class="mb-0">
                                        Question #7 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingEight">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <h5 class="mb-0">
                                        Question #8 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingNine">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <h5 class="mb-0">
                                        Question #9 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTen">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <h5 class="mb-0">
                                        Question #10 <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                    </a>
                                </div>
                                <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Accordion wrapper-->

                    </div>

                </div>
                <!-- /.First row -->

            </section>
            <!-- /.FAQ Section -->

        </div>
    </main>
    <!--/Main layout-->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red">
            <i class="fa fa-pencil"></i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="fa fa-star"></i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="fa fa-user"></i></a></li>
            <li><a class="btn-floating green"><i class="fa fa-envelope"></i></a></li>
            <li><a class="btn-floating blue"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
    </div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
    $("#navigation").load("components/navigation.html");
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <!-- Customizer -->
    <script type="text/javascript" src="../../js/customizer.min.js"></script>
    <script>
    // Data Picker Initialization
    $('.datepicker').pickadate();


    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
    });

    // Sidenav Initialization
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
        $('#toggle').tooltip('show')
    })
    </script>
</body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Admin/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 14:58:54 GMT -->
</html>
