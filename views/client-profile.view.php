<?php
include "includes/dashboard-header-stylesheets.php";
include "includes/client-nav.php";
?>
<!--Main layout-->
<main class="">
    <div class="container-fluid">



        <!--Section: Products-->
        <section class="section section-intro">


            <div class="row">

                <div class="col-md-4 mb-1">
                    <div class="card contact-card with-padding">
                        <div class="card-body">
                            <div class="mt-1 mb-1">
                                <img src="/ticko/Controllers/uploads/male.png" alt="" class="img-fluid rounded-circle contact-avatar mx-auto">
                            </div>
                            <h3 class="h3-responsive text-center" id="client_prof_fullname"></h3>
<!--                            <p class="text-center grey-text">Firstname Secondname</p>-->
                            <ul class="striped">
                                <li><strong>E-mail: </strong> <span id="client_prof_username"></span></li>
                                <li><strong>Phone number: </strong> <span id="client_prof_phone_number"></span></li>
<!--                                <li><strong>My events: </strong> <span id="client_events_number"></span></li>-->

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-8 mb-1">
                    <!-- Tabs -->
                    <!-- Nav tabs -->
                    <div class="tabs-wrapper">
                        <ul class="nav classic-tabs tabs-primary primary-color" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-light" data-toggle="tab" href="#panel84" role="tab">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 1-->
                        <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                            <div class="table-responsive">
                                <form method="post" action="/ticko/Controllers/updateClientProfile/" id="updateClientProfileForm">
                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="text" placeholder="First Name" name="c__f_name" REQUIRED>
                                    </div>

                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="text" placeholder="Last Name" name="c__l_name" REQUIRED>
                                    </div>

                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="text" placeholder="Phone Number" name="c__phone" REQUIRED>
                                    </div>
                                    <center>
                                        <button class="btn btn-blue-grey btn-round"  type="reset" id="registerUser">CLEAR</button>
                                        <button class="btn btn-danger btn-round"  type="submit" id="registerUser">UPDATE PROFILE</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel84" role="tabpanel">
                            <div class="table-responsive">
                                <form method="post" action="/ticko/Controllers/updateClientPassword/" id="updateClientPasswordForm">
                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="password" placeholder="Current Password" name="c__current_password" REQUIRED>
                                    </div>

                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="password" placeholder="New Password" name="c__password" REQUIRED>
                                    </div>
                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="password" placeholder="Confirm New Password" name="c__password_confirm" REQUIRED>
                                    </div>
                                    <center>
                                        <button class="btn btn-blue-grey btn-round"  type="reset" id="registerUser">CLEAR</button>
                                        <button class="btn btn-danger btn-round"  type="submit" id="registerUser">CHANGE PASSWORD</button>
                                    </center>

                                </form>
                            </div>
                        </div>
                        <!--/.Panel 2-->
                    </div>
                    <!-- /.Tabs -->
                </div>

            </div>
            <!-- /.Second column -->


        </section>
        <!--/Section: Products-->




    </div>
</main>
<!--/Main layout-->



<?php
include 'includes/dashboard-scripts.php';
include 'includes/modals.php';
?>

<script type="text/javascript" src="/ticko/assets/js/custom/get-client-details.js"></script>


</body>
</html>