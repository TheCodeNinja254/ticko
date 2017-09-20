<?php
include "includes/dashboard-header-stylesheets.php";
include "includes/admin-nav.php";
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
                            <h3 class="h3-responsive text-center" id="client_prof_fullname">System Admin</h3>
                            <!--                            <p class="text-center grey-text">Firstname Secondname</p>-->
                            <ul class="striped">
                                <li><strong>E-mail: </strong> <span id="">Joseph Nzioka</span></li>
                                <li><strong>Phone number: </strong> <span id="">0705593659</span></li>
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
                                <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 2-->
                        <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                            <div class="table-responsive">
                                <form method="post" action="/ticko/Controllers/updateAdminPassword/" id="updateAdminPasswordForm">
                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="password" placeholder="Current Password" name="c__current_password" REQUIRED>
                                    </div>

                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="password" placeholder="New Password" name="ad__password" REQUIRED>
                                    </div>
                                    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                        <input id="" class="form-control" type="password" placeholder="Confirm New Password" name="ad__password_confirm" REQUIRED>
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
?>

</body>
</html>