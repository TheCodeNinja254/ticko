<?php
/**
 * Created by PhpStorm.
 * User: Greats
 * Date: 3/29/2017
 * Time: 2:28 PM
 */
?>
<!-- Modals-->
<div id="modals">
    <div class="modal fade login" id="clientLoginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content white btn-round btn-outline-danger">
                <div class="modal-header">
                    <h6 class="modal-title text-center text-bold">Client Login</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="error"></div>
                            <div class="form loginBox">
                                <form method="post" action="/ticko/Controllers/clientLogin/" id="clientLoginForm" accept-charset="UTF-8">
                                    <input placeholder="Email" type="email"  class="form-control" name="c_username1" required>
                                    <input type="password" name="c_password1" class="form-control" placeholder="Password" required>
                                    <center><button class="btn btn-danger btn-round"  type="submit" id="customerlogin">LOGIN</button></center>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                            <span>Looking to
                                 <a onclick="$('#clientRegistrationModal').modal('toggle');$('#clientLoginModal').modal('toggle');">Register?</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade login" id="clientRegistrationModal">
        <div class="modal-dialog login animated">
            <div class="modal-content white btn-round btn-outline-danger">
                <div class="modal-header">
                    <h6 class="modal-title text-center text-bold">Client Registration</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content registerBox">
                            <div class="form">
                                <form method="post" action="/ticko/Controllers/clientRegistration/" id="clientRegistrationForm" accept-charset="UTF-8">
                                    <input id="" class="form-control" type="text" placeholder="First Name" name="c_f_name" required>
                                    <input id="" class="form-control" type="text" placeholder="Last Name" name="c_l_name" required>
                                    <input id="" class="form-control" type="text" placeholder="Phone Number" name="c_phone" required>
                                    <input class="form-control" type="email" placeholder="Email" id="email" name="c_username" required>
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="c_password" required>
                                    <input type="password" name="c_password_confirm" id="password_confirm" class="form-control" placeholder="Confirm Password" required>
                                    <br>
                                    <center><button class="btn btn-danger btn-round"  type="submit" id="registerUser">REGISTER</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                            <span>Looking to
                                 <a onclick="$('#clientRegistrationModal').modal('toggle');$('#clientLoginModal').modal('toggle');">Login?</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Organizer login-->
    <div class="modal fade login" id="organizerLoginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content white btn-round btn-outline-danger">
                <div class="modal-header">
                    <h6 class="modal-title text-center text-bold">Organizer Login</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="form loginBoxEmployees">
                                <form method="post" action="/ticko/Controllers/organizerLogin/" id="organizerLoginForm" accept-charset="UTF-8">
                                    <input placeholder="Email" type="email" id="form5" class="form-control" name="o_username1" required>
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="o_password1" required>
                                    <center><button class="btn btn-danger btn-round"  type="submit" >Login</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot register-footer">
                        <span>Looking to
                                <a onclick="$('#organizerRegistrationModal').modal('toggle');$('#organizerLoginModal').modal('toggle');">Register?</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Organizer login-->

    <!--    Organizer Registration-->
    <div class="modal fade bd-example-modal-lg organizer-registration" id="organizerRegistrationModal">
        <div class="modal-dialog login animated">
            <div class="modal-content white btn-round btn-outline-danger">
                <div class="modal-header">
                    <center><h6 class="modal-title text-center text-bold">Organizer Registration</h6></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="form loginBoxEmployees">
                                <form method="post" action="/ticko/Controllers/organizerRegistration/" id="organizerRegistrationForm" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input id="" class="form-control" type="text" placeholder="First Name" name="o_f_name" REQUIRED>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input id="" class="form-control" type="text" placeholder="Last Name" name="o_l_name" REQUIRED>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Phone Number" name="o_phone" REQUIRED>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input class="form-control" type="email" placeholder="Email" id="email" name="o_username" REQUIRED>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Company Name" id="company_name" name="company_name" REQUIRED>

                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Company Address" id="company_name" name="company_address" REQUIRED>
                                        </div>
                                    </div>

                                    <div class="md-form">
                                        <textarea type="text" id="form8" name="company_description" class="md-textarea" required placeholder="Brief Company Description" rows="6" maxlength="65000"></textarea>
                                    </div>
                                    <span>Upload a Logo/Profile photo</span>
                                    <input type="file" name="post_image" class="form-control" accept="image/*" required>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input id="password" class="form-control" type="password" placeholder="Password" name="o_password" required>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xs-6 col-md-6">
                                            <input type="password" name="o_password_confirm" id="password_confirm" class="form-control" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                    <br>
                                    <center>
                                        <button class="btn btn-blue-grey btn-round"  type="reset" id="registerUser">CLEAR</button>
                                        <button class="btn btn-danger btn-round"  type="submit" id="registerUser">REGISTER</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot register-footer">
                        <span>Looking to
                                 <a onclick="$('#organizerRegistrationModal').modal('toggle');$('#organizerLoginModal').modal('toggle');">Login?</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    ./Organizer Registration-->

    <!--    admin login modal-->
    <div class="modal fade login" id="adminLoginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content white btn-round btn-outline-danger">
                <div class="modal-header">
                    <h6 class="modal-title text-center text-bold">Admin Login</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="form loginBoxEmployees">
                                <form method="post" action="/ticko/Controllers/adminLogin/" id="adminLoginForm" accept-charset="UTF-8">
                                    <input placeholder="Email" type="text" id="form5" class="form-control" name="ad_username" required>
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="ad_password" required>
                                    <center><button class="btn btn-danger btn-round"  type="submit" >Login</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                        <p>Use your username and password to Login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    ./admin login modal-->

    <!-- More Details-->
    <div class="modal fade bd-example-modal-lg details" id="details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-bold text-red" id="se_name"></h4>
            </div>
            <!--Body-->
            <div class="modal-body">
               <div class="row">
                   <div class="col-md-5">
                       <div class="view overlay hm-white-slight" style="height: 264.433px!important;">
                           <img src="" id="se_image" class="img-fluid" alt="">
                           <a href="#">
                               <div class="mask waves-effect waves-light"></div>
                           </a>
                       </div>
                   </div>
                   <div class="col-md-7">
                       <p class="card-text "><a class="email-ic "><i class="fa fa-money text-red"></i></a><strong> Price:</strong> <span id="se_price"></span></p>
                       <p class="card-text "><a class="email-ic"><i class="fa fa-calendar-plus-o text-red"></i></a><strong> Date:</strong> <span id="se_st_date"></span></p><br>
                       <p class="card-text "><a class="email-ic"><i class="fa fa-map-marker text-red"></i></a><strong> Venue:</strong> <span id="se_venue"></span> </p>
                       <p class="card-text "><a class="email-ic"><i class="fa fa-group text-red"></i></a><strong> Slots:</strong> <span id="se_fixed_participants"></span> </p><br>
                       <p class="card-text "><a class="email-ic"><i class="fa fa-group text-red"></i></a><strong> Remaining slots:</strong> <span id="se_participants"></span> </p><br>
                       <p class="card-text "><a class="email-ic"><i class="fa fa-clock-o text-red"></i></a><strong> Time:</strong> <span id="se_st_time"></span> - <span id="se_ed_time"></span> </p>
                       <hr>
                       <p class="card-text" id="se_description"> </p>
                   </div>
               </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-round" data-dismiss="modal">Back</button>
<!--                <button type="button" class="btn btn-outline-primary btn-round" data-addToWishlist="">Add to Wishlist</button>-->
<!--                <button type="button" class="btn btn-danger btn-round" data-eventId="">BUY</button>-->
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
    <!-- ./More Details-->

    <!-- Book Event-->
    <div class="modal fade" id="bookEventModal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <!-- Content -->
            <div class="modal-content white btn-round btn-outline-danger">

                <!-- Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center" >Event Booking</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Body -->
                <form method="post" action="/ticko/Controllers/addBooking/" id="makeBookingForm">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="modal-text text-center" id="se_book_name"></h5>
                            <div class="card z-depth-0">
                                <img src="" class="card-img" id="se_book_image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="card-text "><a class="email-ic "><i class="fa fa-money text-red"></i></a><strong> Name:</strong> <span class="text-black" id="bf_client_fullname"></span></p>
                            <p class="card-text "><a class="email-ic "><i class="fa fa-money text-red"></i></a><strong> Email:</strong> <span class="text-black" id="bf_client_email"></span></p>


                            <center>
                                    <input type="hidden" name="b_no_of_tickets" value="1">
                                    <input type="hidden" id="bf_event_id" name="bf_event_id" value="">
                                <small class="text-black">(Max number of bookings per person: 1)</small>
                            </center>
                        </div>
                    </div>
                </div>

                <center>
                    <button class="btn btn-outline-brown btn-round" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-outline-danger btn-round" type="submit">Make Booking</button>
                </center>
                </form>
            </div>

            <!-- Footer -->


        </div>
        <!-- /.Content -->

    </div>
<!-- ./Book-Now-->

    <!-- Buy Ticket-->
    <div class="modal fade" id="buyTicketModal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <!-- Content -->
            <div class="modal-content white btn-round btn-outline-danger">

                <!-- Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center" >Ticket Purchase</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Body -->
                <form method="post" action="/ticko/Controllers/addBooking/" id="makePurchaseForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="modal-text text-center" id="se_buy_name"></h5>
                                <div class="card z-depth-0">
                                    <img src="" class="card-img" id="se_buy_image">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="card-text "><a class="email-ic "><i class="fa fa-money text-red"></i></a><strong> Name:</strong> <span class="text-black" id="bt_client_fullname"></span></p>
                                <p class="card-text "><a class="email-ic "><i class="fa fa-money text-red"></i></a><strong> Email:</strong> <span class="text-black" id="bt_client_email"></span></p>


                                <center>
                                    <input type="number" class="form-control" name="p_no_of_tickets" min="1" id="bt_max_tickets_1" max="" value="" placeholder="Number of Tickets" required>
                                    <input type="hidden" id="bt_event_id" name="bt_event_id" value="">
                                    <small class="text-black">(Max number of tickets: <span id="bt_max_tickets_2"></span>)</small>
                                </center>
                            </div>
                        </div>
                    </div>

                    <center>
                        <button class="btn btn-outline-brown btn-round" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-outline-danger btn-round" type="submit">BUY TICKETS</button>
                    </center>
                </form>
            </div>

            <!-- Footer -->


        </div>
        <!-- /.Content -->

    </div>
    <!-- ./Buy-Now-->

    <!-- Lipa na mpesa-->
    <div class="modal fade bd-example-modal-lg mpesa " id="mpesa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <!--Content-->
            <div class="modal-content btn-round">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class=" text-bold text-red" >Ticket Payment </h4>
                    <img class="text-left" src="/ticko/assets/img/Lipa-na-Mpesa-charges.jpg">
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h5 class="text-center text-bold text-success">Instructions</h5><hr>
                            <p><i class="fa fa-check text-success"></i> Go to <strong>M-PESA</strong> on your phone</p>
                            <p><i class="fa fa-check text-success"></i>Select <strong>send money</strong> option</p>
                            <p><i class="fa fa-check text-success"></i> Enter Phone No. <strong id="mpesa-o-phone"></strong></p>
                            <p><i class="fa fa-check text-success"></i> Enter the Amount Ksh. <strong id="mpesa-total-pay"></strong></p>
                            <p><i class="fa fa-check text-success"></i> Enter your <strong>M-PESA PIN</strong> and Send</p>
                            <p> <i class="fa fa-check text-success"></i> You will receive a confirmation SMS from M-PESA with a <strong>Confirmation Code</strong></p>
                            <p><i class="fa fa-check text-success"></i> After you receive the confirmation SMS, enter the <strong>Confirmation Code</strong></p>
                            <p> <i class="fa fa-check text-success"></i> Click on Confirm
                        </div>
                        <div class="col-md-5">
                            <h5 class="text-center text-bold text-success">Your Cart</h5><hr>

                            <p class="card-text"><i class="fa fa-group"></i> Event Name: <strong id="mpesa-e-name"> </strong></p>
                            <p class="card-text"><i class="fa fa-money"></i> Ticket Fee: <strong id="mpesa-e-price"> </strong></p>
                            <p class="card-text"><i class="fa fa-ticket "></i> No of Tickets: <strong id="mpesa-no-of-tickets"> </strong></p>
                            <p class="card-text"><i class="fa fa-money "></i> Total Cost: <strong id="mpesa-total-pay2"> </strong></p>
                            <p class="card-text"><i class="fa fa-shopping-cart "></i> Mode of Payment: <strong class="text-success">Mpesa </strong></p>
                            <hr>
                            <form method="post" action="/ticko/Controllers/validateMpesaCode/" id="validateMpesaCodeForm">
                            <input placeholder="Enter Your Mpesa confirmation code" type="text" id="form5" class="form-control mpesa" minlength=5 maxlength="15" name="confirmation_code" required>
                            <input type="hidden" name="mpesa_booking_id" id="mpesa-booking-id" value="">

                            <button type="reset"   class="btn   btn-round btn-blue-grey wow fadeInLeft text-bold" data-wow-delay="0.2s" >clear</button>
                            <button type="submit"  class="btn btn-round btn-success wow fadeInRight text-bold" data-wow-delay="0.2s" >confirm</button>

                            </form>
                        </div>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">

                    <button type="button" class="btn btn-outline-danger btn-round btn-sm" data-dismiss="modal">cancel</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- ./Lipa na mpesa-->

    <!-- After Lipa na mpesa-->
    <div class="modal fade bd-example-modal-lg mpesa " id="after-mpesa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <!--Content-->
            <div class="modal-content btn-round">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class=" text-bold text-red" >Payment Successful </h4>
                    <img class="text-left" src="/ticko/assets/img/Lipa-na-Mpesa-charges.jpg">
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="row">
                           <div class="col-md-6">
                               <h5 class="text-center text-bold text-success">Payment Details</h5>
                               <p class="card-text"><i class="fa fa-lock"></i> Confirmation Code: <strong id="success-confirmation-code"> </strong></p>
                               <p class="card-text"><i class="fa fa-money"></i> Payment amount: <strong id="success-payment-amount"> </strong></p>
                               <p class="card-text"><i class="fa fa-user"></i> Organizer Name: <strong id="success-o-name"> </strong></p>
                               <p class="card-text"><i class="fa fa-calendar"></i> Payment time: <strong id="success-payment-time"> </strong></p>
                               <p class="card-text"><i class="fa fa-ticket"></i> Ticket Number: <strong id="success-ticket-number"> </strong></p>

                               <hr>
                               <h5 class="text-center text-bold text-success">Mpesa Message</h5>
                               <p class="card-text" id="success-mpesa-message"></p>
                           </div>

                            <div class="col-md-6">
                                <h5 class="text-center text-bold text-success">Event Details</h5>
                                <p class="card-text"><i class="fa fa-play-circle-o"></i> Event name: <strong id="success-event-name"></strong></p>
                                <p class="card-text"><i class="fa fa-map-marker"></i> Event Venue: <strong id="success-event-venue"></strong></p>
                                <p class="card-text"><i class="fa fa-calendar"></i> Event Date: <strong id="success-st-date"></strong></p>
                                <p class="card-text"><i class="fa fa-clock-o"></i> Event Start time: <strong id="success-st-time"></strong></p>
                                <p class="card-text"><i class="fa fa-clock-o"></i> Event End time: <strong id="success-ed-time"></strong></p>
                                <button type="submit"  class="btn btn-round btn-success wow fadeInRight" data-wow-delay="0.2s" >DOWNLOAD TICKET</button>

                                <hr>
                                <h5 class="text-center text-bold text-success">Thank you for shopping with us!</h5>
                            </div>
                </div>
                </div>

                <!--Footer-->
                <div class="modal-footer">

                    <button type="button" class="btn btn-outline-danger btn-round btn-sm" data-dismiss="modal">cancel</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- ./After Lipa na mpesa-->

    <!-- After Lipa na mpesa-->
    <div class="modal fade bd-example-modal-lg col-md-12 mpesa " id="viewBookingsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <!--Content-->
            <div class="modal-content btn-round">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class=" text-bold text-red" >Bookings and Ticket Purchases </h4>
                    <h5 class="text-danger text-bold" id="view-booking-e-name"> </h5>

                </div>
                <!--Body-->
                <div class="modal-body">

                    <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <table class="table table-responsive table-striped dataTables_info dataTables_paginate dataTable table-hover " id="listBookingsTable">
                        <thead class="thead-primary sorting" >
                        <tr>
                            <th>Booking ID</th>
                            <th>Client&nbsp;name</th>
                            <th>No&nbsp;of&nbsp;Tickets</th>
                            <th>Ticket&nbsp;Number</th>
                            <th>Amount&nbsp;Paid</th>
                            <th>Mpesa&nbsp;Code</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer">

                    <button type="button" class="btn btn-outline-danger btn-round btn-sm" data-dismiss="modal">cancel</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- ./After Lipa na mpesa-->

    <div class="modal fade modal-ext" id="getUserInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="text-black">PROFILE</h3>
                </div>

                <!--Body-->
                <div class="modal-body" id="modal-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6 col-sm-6">
                            <div class='col-md-3 wow fadeInRight' data-wow-delay='0.6s'>
                                <!--Card-->
                                <div >

                                    <!--Card image-->
                                    <div class=' overlay hm-white-slight'>
                                        <img src="" id="chat_profile_avatar_get" alt=''>
                                        <a href='#'>
                                            <div class='mask'></div>
                                        </a>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6 col-sm-6">
                            <div class='card-block'>
                                <!--Title-->
                                <h5 class='card-title' id="chat_profile_name_get"></h5>
                                <!--Text-->
                                <p class='card-text' style='font-size: small' id="chat_department_get"></p>
                                <p class='card-text' style='font-size: small' id="chat_phone_get"></p>
                                <p class='card-text hidden-sm-down' style='font-size: small' id="chat_staff_email_get"></p>

                            </div>

                        </div>
                        <p class='card-text hidden-lg-up' style='font-size: small' id="chat_staff_email_get_two"></p>
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>


