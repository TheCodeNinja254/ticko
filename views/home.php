<?php include 'includes/head-stylesheets.php';?>
<body>
    <!--Navbar-->
  <?php include 'includes/nav.php';?>
    <!--/.Navbar-->
    
    <!--Mask-->
    <div class="view hm-black-strong intro">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s">Welcome to <strong class="text-red">TICKO</strong></h1></li>
                <li>
                    <div class="type-wrap">
                        <div id="typed-strings">
                            <span>Hey there Visitor .</span>
                            <p>How are you?</p>
                            <p>Welcome to Ticko Events System.</p>
                            <p>It's easy, fast and convinient.</p>
                            <p class="wow fadeInDown">Buy, Book or post your event here </p>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>
                    </div>
                </li>
                <li>
                    <a class="btn   btn-round btn-outline-danger wow fadeInLeft" data-wow-delay="0.2s" onclick="$('#clientRegistrationModal').modal('toggle');">CREATE ACCOUNT</a>
                    <a class="btn btn-round btn-outline-danger wow fadeInRight" data-wow-delay="0.2s" onclick="$('#organizerRegistrationModal').modal('toggle');">POST AN EVENT</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container">
        <h2 class="text-red text-bold text-center" id="paid">PAID EVENTS</h2>
        <br>
        <section id="about" class="text-center wow bounceIn" data-wow-delay="0.2s">
    <div class="row" id="paid_events">


    </div>
        </section>
        <!--Section: About-->

        <hr><br>
        <h2 class="text-red text-bold text-center" id="free">FREE EVENTS</h2>
        <br>
        <section id="about" class="text-center wow bounceIn" data-wow-delay="0.2s">
            <div class="row" id="free_events">

            </div>
        </section>
        <!--Section: About-->


    </div>



   <?php include 'includes/footer.php'?>
   <?php include 'includes/modals.php'?>
   <?php include 'includes/scripts.php'?>

    <script type="text/html" id="paid_events_template">


        <![CDATA[

        <div class="col-md-4">
            <!--Card-->
            <div class="card btn-round ">
                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="/ticko/Controllers/uploads/<%= this.e_image %>" class="img-fluid" style="height: 280px !important;" alt="">
                    <a onclick="getSingleEvent('<%= this.event_id %>')">
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block">
                    <!--Title-->
                    <h4 class="card-title text-bold text-red"><%= this.e_name %></h4>        <hr>
                    <!--Text-->
                    <p class="card-text text-left"><a class="email-ic text-left"><i class="fa fa-money text-red"></i></a><strong> Price:</strong> Ksh <%= this.e_price %></p>&nbsp;&nbsp;
                    <p class="card-text text-right"><a class="email-ic"><i class="fa fa-map-marker text-red"></i></a><strong> Venue:</strong> <%= this.venue %> </p><br>
                    <p class="card-text text-left"><a class="email-ic text-left"><i class="fa fa-calendar-plus-o text-red"></i></a><strong> Date:</strong> <%= this.st_date %></p>&nbsp;&nbsp;
                    <p class="card-text text-right"><a class="email-ic"><i class="fa fa-group text-red"></i></a><strong> Slots:</strong> <%= this.fixed_participants %> </p>
                    <button type="button"  class="btn   btn-round btn-outline-danger wow fadeInLeft text-bold" data-wow-delay="0.2s" onclick="getSingleEvent('<%= this.event_id %>')">Details</button>
                    <a  class="btn btn-round btn-danger wow fadeInRight" data-wow-delay="0.2s" onclick="checkClientSession('<%= this.event_id %>', 'purchase')">BUY</a>
                </div>
                <!--/.Card content-->

            </div>
            <div><br></div>
            <!--/.Card-->
        </div>


        ]]>
    </script>

    <script type="text/html" id="free_events_template">


        <![CDATA[

        <div class="col-md-4">
            <!--Card-->
            <div class="card btn-round ">
                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="/ticko/Controllers/uploads/<%= this.e_image %>"  style="height: 280px !important;"  alt="">
                    <a onclick="getSingleEvent('<%= this.event_id %>')">
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
                <!--/.Card image-->




                <!--Card content-->
                <div class="card-block">
                    <!--Title-->
                    <h4 class="card-title text-bold text-red"><%= this.e_name %></h4>        <hr>
                    <!--Text-->
                    <p class="card-text text-left"><a class="email-ic text-left"><i class="fa fa-money text-red"></i></a><strong> Price:</strong> FREE </p>&nbsp;&nbsp;
                    <p class="card-text text-right"><a class="email-ic"><i class="fa fa-map-marker text-red"></i></a><strong> Venue:</strong> <%= this.venue %> </p><br>
                    <p class="card-text text-left"><a class="email-ic text-left"><i class="fa fa-calendar-plus-o text-red"></i></a><strong> Date:</strong> <%= this.st_date %></p>&nbsp;&nbsp;
                    <p class="card-text text-right"><a class="email-ic"><i class="fa fa-group text-red"></i></a><strong> Slots:</strong> <%= this.fixed_participants %> </p>
                    <button type="button"  class="btn   btn-round btn-outline-danger wow fadeInLeft text-bold" data-wow-delay="0.2s" onclick="getSingleEvent('<%= this.event_id %>')">Details</button>
                    <a  class="btn btn-round btn-danger wow fadeInRight" data-wow-delay="0.2s" onclick="checkClientSession('<%= this.event_id %>', 'booking')">BOOK</a>
                </div>
                <!--/.Card content-->

            </div>
            <div><br></div>
            <!--/.Card-->
        </div>


        ]]>
    </script>

    <script type="text/javascript" src="/ticko/assets/js/custom/populate-home.js"></script>

</body>

</html>
    