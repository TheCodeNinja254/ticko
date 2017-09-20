<?php
include "includes/dashboard-header-stylesheets.php";
include "includes/organizer-nav.php";
?>
<!--Main layout-->
<main class="">
    <div class="container-fluid">

        <!--Section: Products-->
        <section class="section section-intro">

            <h2 class="mb-1 text-center">Manage your Events</h2>

            <!--Second row-->
            <div class="row" id="org-events">

                <!--First column-->
                <div class=" card col-md-12 mb-r">

                    <div class="card-block text-center">

                    <form method="post" action="/ticko/Controllers/addEvent/" id="addEventForm" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input id="" class="form-control" type="text" placeholder="Event Name" name="e_name" REQUIRED>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input id="" class="form-control" type="text" placeholder="Venue" name="venue" REQUIRED>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input class="form-control" type="number" min="3" max="1000000" placeholder="Expected Participants" name="fixed_participants" REQUIRED>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <select class="mdb-select colorful-select dropdown-primary" id="category" onchange="SanityChecker()" name="e_category">
                                    <option value="" selected>Select a category</option>
                                    <option value="Free">Free</option>
                                    <option value="Paid">Paid</option>
                                </select>
                                <label for="category"></label>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input class="form-control timepicker" type="text" placeholder="Start Time" id="company_name" name="st_time" REQUIRED>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input class="form-control timepicker" type="text" placeholder="End Time" id="company_name" name="ed_time" REQUIRED>
                            </div>
                        </div>

                        <div class="md-form col-sm-12 col-lg-12 col-xs-12 col-md-12">
                            <textarea type="text" id="form8" name="e_description" class="md-textarea" required placeholder="Brief Event Description" rows="6" maxlength="65000"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input type="file" name="post_image" class="form-control" accept="image/*" placeholder="Upload Event Image" required>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input id="text" class="form-control datepicker" type="text" placeholder="Start Date" name="st_date" required>
                            </div>

                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                                <input type="text" name="ed_date" id="" class="form-control datepicker" placeholder="End Date" required>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6" id="e_price">
                                <input type="number" min="0" max="1000000" name="e_price"  class="form-control" placeholder="Event Price">
                            </div>
                            </div>
                        <br>

                        <center>
                            <button class="btn btn-blue-grey btn-round"  type="reset" id="registerUser">CLEAR</button>
                            <button class="btn btn-danger btn-round"  type="submit" id="registerUser">ADD EVENT</button>
                        </center>
                    </form>

                    </div>
                </div>
                <!--/First column-->


            </div>
            <!--/Second row-->

        </section>
        <!--/Section: Products-->

    </div>
</main>
<!--/Main layout-->
<?php include 'includes/floating-button.php';?>



<?php
include 'includes/dashboard-scripts.php';
?>
<script type="text/javascript" src="/ticko/assets/js/custom/get-organizer-details.js"></script>
<script type="text/javascript" src="/ticko/assets/js/custom/manageEvents.js"></script>
</body>
</html>