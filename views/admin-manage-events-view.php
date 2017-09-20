<?php
include "includes/dashboard-header-stylesheets.php";
include "includes/admin-nav.php";
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
                    <div class="card classic-admin-card card-primary">
                        <div class="card-block">
                            <div class="pull-right">
                                <i class="fa fa-money"></i>
                            </div>
                            <p>ORGANIZERS</p>
                            <h4>2000</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card-block">
                            <p>Better than last week (25%)</p>
                        </div>
                    </div>
                    <!--/.Card Primary-->
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-3 mb-1">
                    <!--Card Primary-->
                    <div class="card classic-admin-card deep-purple darken-4">
                        <div class="card-block">
                            <div class="pull-right">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <p>CLIENTS</p>
                            <h4>200</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card-block">
                            <p>Worse than last week (25%)</p>
                        </div>
                    </div>
                    <!--/.Card Primary-->
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-3 mb-1">
                    <!--Card Primary-->
                    <div class="card classic-admin-card indigo">
                        <div class="card-block">
                            <div class="pull-right">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <p>EVENTS</p>
                            <h4>20000</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card-block">
                            <p>Better than last week (75%)</p>
                        </div>
                    </div>
                    <!--/.Card Primary-->
                </div>
                <!--/Third column-->

                <!--Fourth column-->
                <div class="col-md-3 mb-1">
                    <!--Card Primary-->
                    <div class="card classic-admin-card purple">
                        <div class="card-block">
                            <div class="pull-right">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <p>SYSTEM TRAFFIC</p>
                            <h4>2000</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card-block">
                            <p>Better than last week (25%)</p>
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

            <h2 class="mb-1 text-center">Posted Events</h2>

            <!--Second row-->
            <div class="row" id="admin-display-events">


            </div>
            <!--/Second row-->

        </section>
        <!--/Section: Products-->




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


<?php
include 'includes/dashboard-scripts.php';
?>

<script type="text/javascript" src="/ticko/assets/js/custom/get-admin-details.js"></script>

<script type="text/html" id="admin-display-events-template">
    <![CDATA[

    <div class="col-md-4 mb-1" id="<%= this.event_id %>">
        <div class="card contact-card with-padding">
            <div class="card-body">
                <div class="mt-1 mb-1">
                    <img src="/ticko/Controllers/uploads/<%= this.e_image %>" alt="" class="img-fluid rounded-circle contact-avatar mx-auto">
                </div>
                <h3 class="h3-responsive text-center" id="user_fullname"></h3>
                <p class="text-center grey-text"><%= this.e_name %></p>
                <ul class="striped">
                    <li><strong><i class="fa fa-fw fa-user"></i>Posted by: </strong> <span id="user_username"><%= this.o_f_name %> <%= this.o_l_name %></span></li>
                    <li><strong><i class="fa fa-fw fa-building-o"></i>Company:</strong> <span><%= this.company_name %></span></li>
                    <li><strong><i class="fa fa-fw fa-play-circle-o"></i>Posted at:</strong> <span><%= this.timestamp %></span></li>
                    <li></li>
                </ul>
                <a onclick="removeEvent('<%= this.event_id %>')" class="text-right text-danger" title="Remove Event"><i class="fa fa-fw fa-trash-o"></i><span class="text-muted"></span>REMOVE</a>
            </div>
        </div>
    </div>

    ]]>
</script>
<script type="text/javascript" src="/ticko/assets/js/custom/populate-admin-events.js"></script>
</body>
</html>