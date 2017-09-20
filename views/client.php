<?php
include "includes/dashboard-header-stylesheets.php";
include "includes/client-nav.php";
?>
<!--Main layout-->
<main class="">
    <div class="container-fluid">



        <!--Section: Products-->
        <section class="section section-intro">

            <h2 class="mb-1 text-center">Manage your Events</h2>

            <!--Second row-->
            <hr>
            <h2 class="text-red text-bold text-center" id="paid">PAID EVENTS</h2>
            <br>
            <div class="row" id="org-paid-events">


            </div>
            <hr>
            <!--/Second row-->

            <!--Second row-->
            <h2 class="text-red text-bold text-center" id="paid">FREE EVENTS</h2>
            <br>
            <div class="row" id="org-free-events">


            </div>

        </section>
        <!--/Section: Products-->




    </div>
</main>
<!--/Main layout-->



<?php
include 'includes/dashboard-scripts.php';
?>

<script type="text/javascript" src="/ticko/assets/js/custom/get-client-details.js"></script>


<script type="text/html" id="org-free-events_template">


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
            <div class="card-block ">
                <!--Category & Title-->
                <h4 class="card-title text-center"><strong><a href="#"><%= this.e_name %></a></strong><br>
                    <label class="text-muted"><%= this.booking_time %></label></h4>
<hr>

                <!--Rating-->

                <!--Description-->
                <div class="e-payment">
                    <p class="card-text e-payment"><i class="fa fa-money"></i> Ticket Fee: Ksh.<%= this.e_price %> </p> &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="card-text"><i class="fa fa-ticket text-left"></i> No of Tickets: <%= this.no_of_tickets %> </p><br>
                    <p class="card-text"><i class="fa fa-user-secret text-left"></i> Booking ID: <%= this.booking_id %> </p>
                </div>

                <!--Card footer-->
                <div class="card-footer">
                    <button type="button"  class="btn   btn-round btn-outline-danger wow fadeInLeft text-bold" data-wow-delay="0.2s" >FREE</button>
                    <a  class="btn btn-round btn-danger wow fadeInRight" data-wow-delay="0.2s" href="/ticko/ticket/TICKO900-9090"><i class="fa fa-fw fa-download"></i>Ticket</a>
                </div>

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </div>


    ]]>
</script>

<script type="text/html" id="org-paid-events_template">


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
            <div class="card-block ">
                <!--Category & Title-->
                <h4 class="card-title text-center"><strong><a href="#"><%= this.e_name %></a></strong><br>
                    <label class="text-muted"><%= this.timestamp %></label></h4>
                <hr>

                <!--Rating-->

                <!--Description-->
                <div class="e-payment">
                    <p class="card-text e-payment"><i class="fa fa-money"></i> Ticket Fee: Ksh.<%= this.e_price %> </p> &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="card-text"><i class="fa fa-ticket text-left"></i> No of Tickets: <%= this.no_of_tickets %> </p>
                </div>

                <!--Card footer-->
                <div class="card-footer">
                    <input type="<%= this.pay_button_type %>" value="PAY" class="btn btn-round btn-outline-danger wow fadeInLeft text-bold" data-wow-delay="0.2s" onclick="getLipaNaMpesaDetails('<%= this.booking_id %>')">
                    <input type="<%= this.paid_button_type %>" value="PAID" class="btn btn-round btn-outline-success wow fadeInLeft text-bold" data-wow-delay="0.2s" onclick="getMpesaInfo('<%= this.confirmation_code %>');getbookingAfterPay('<%= this.booking_id %>')">
                    <button  class="btn btn-round btn-danger wow fadeInRight" onclick="$(location).attr('href', '/ticko/ticket/TICKO900-9090')" data-wow-delay="0.2s" <%= this.dl_btn_status %>><i class="fa fa-fw fa-download"></i> Ticket</button>
                </div>

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </div>


    ]]>
</script>
<?php include 'includes/modals.php'; ?>
<script type="text/javascript" src="/ticko/assets/js/custom/populate-client-home.js"></script>

</body>
</html>

