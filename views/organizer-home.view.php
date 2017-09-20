<?php
include "includes/dashboard-header-stylesheets.php";
include "includes/organizer-nav.php";
?>
<!--Main layout-->
    <main class="">
        <div class="container-fluid">


            <!--Classic admin cards-->
            <section class="section section-intro">

                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-3 mb-1">
                        <!--Card Primary-->
                        <div class="card classic-admin-card primary-color-dark">
                            <div class="card-block">
                                <div class="pull-right">
                                    <i class="fa fa-money"></i>
                                </div>
                                <p>TICKET SALES</p>
                                <h4>2000 (ksh)</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-block">
                                <p>Expected Sales: 10,000</p>
                            </div>
                        </div>
                        <!--/.Card Primary-->
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-3 mb-1">
                        <!--Card Primary-->
                        <div class="card classic-admin-card success-color-dark darken-4">
                            <div class="card-block">
                                <div class="pull-right">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <p>Bookings</p>
                                <h4>200 </h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-block">
                                <p>Slots Remaining: 800</p>
                            </div>
                        </div>
                        <!--/.Card Primary-->
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-3 mb-1">
                        <!--Card Primary-->
                        <div class="card classic-admin-card amber darken-4">
                            <div class="card-block">
                                <div class="pull-right">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <p>ChatRoom Messages</p>
                                <h4>20000</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-block">
                                <p>Keep the conversation going</p>
                            </div>
                        </div>
                        <!--/.Card Primary-->
                    </div>
                    <!--/Third column-->

                    <!--Fourth column-->
                    <div class="col-md-3 mb-1">
                        <!--Card Primary-->
                        <div class="card classic-admin-card danger-color-dark">
                            <div class="card-block">
                                <div class="pull-right">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <p>Your Events</p>
                                <h4>1</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 2%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-block">
                                <p>You have unlimited events space</p>
                            </div>
                        </div>
                        <!--/.Card Primary-->
                    </div>
                    <!--/Fourth column-->

                </div>
                <!--/First row-->

            </section>
            <!--/Classic admin cards-->

            <!--Section: Products-->
            <section class="section section-intro">

                <h2 class="mb-1 text-center">Manage your Events</h2>

                <!--Second row-->
                <div class="row" id="org-events">


                </div>
                <!--/Second row-->

            </section>
            <!--/Section: Products-->




        </div>
    </main>
    <!--/Main layout-->

  <?php include 'includes/floating-button.php';?>
  <?php include 'includes/modals.php';?>


<?php
include 'includes/dashboard-scripts.php';
?>
<script type="text/javascript" src="/ticko/assets/js/custom/get-organizer-details.js"></script>

<script type="text/html" id="org-events_template">


    <![CDATA[

    <div class="col-md-4 mb-r">

        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src='/ticko/Controllers/uploads/<%= this.e_image %>' class="img-fluid" alt="">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Category & Title-->

                <div class="text-center">
                    <h4 class="card-title"><strong><a ><%= this.e_name %></a></strong></h4>
                    <a  class="text-muted"><h5><%= this.timestamp %></h5></a>
                </div>

                <div class="left">
                    <a class="text-muted"><i class="fa fa-fw fa-map-marker"></i>Venue: <%= this.venue %></a><br>
                    <a class="text-muted"><i class="fa fa-fw fa-group"></i>Bookings: <%= this.bookings %></a><br>
                    <a class="text-muted"><i class="fa fa-fw fa-lock"></i>Status: <span id="status<%= this.event_id %>"><%= this.status %></span></a>
                </div>
                <!--Rating-->

                <!--Description-->
<!--                <p class="card-text"><%= this.e_description %>-->
<!--                </p>-->

                <!--Card footer-->
                <div class="card-footer">
                    <span class="left">
                        <a class="text-muted"><i class="fa fa-fw fa-money"></i>Ksh. <%= this.e_price %></a>
                    </span>
                    <span class="right">
                        <a data-toggle="tooltip" data-placement="top" title="View Bookings" onclick="viewBookings('<%= this.event_id %>')"><i class="fa fa-eye"></i></a>
                        <a data-toggle="tooltip" data-placement="top" title="Open Event" onclick="updateEventStatus('<%= this.event_id %>', 'Open')"><i class="fa fa-unlock"></i></a>
                        <a data-toggle="tooltip" data-placement="top" title="Close Event" onclick="updateEventStatus('<%= this.event_id %>', 'Closed')"><i class="fa fa-lock"></i></a>
<!--                        <a data-toggle="tooltip" data-placement="top" title="Delete Event"><i class="fa fa-trash"></i></a>-->
                    </span>
                </div>

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </div>


    ]]>
</script>
<script type="text/javascript" src="/ticko/assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/ticko/assets/js/custom/populate-organizer-home.js"></script>


</body>
</html>