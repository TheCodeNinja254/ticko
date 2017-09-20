<?php
include "includes/chatroom-header-stylesheets.php";
include "includes/organizer-nav.php";
?>
<!--Main layout-->
<main>
    <div class="main-wrapper" >
        <div class="container-fluid">


            <div class="row">



                <div class="col-md-12 col-xs-12 col-sm-12 col-xl-8 col-lg-8" style="position:relative;">

                    <!--                        Using JQOTE2, this is the parent template-->
                    <ol class="chat" id="message-body">

                    </ol>
                </div>
                <!--                        This is the message sending form-->
                <div class="card col-lg-12 col-xl-12 col-sm-12 col-xs-12" style="position:relative;bottom:0; top: auto z-index:1">


                    <form id="chatAddMessageForm" method="post" action="/ticko/Controllers/chatSendMessage">

                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-xl-9">
                                <div class="md-form">
                                    <textarea type="text" id="chatNewMessageArea" name="chatNewMessage" class="md-textarea" placeholder="Type your Message here..." maxlength="1000" rows="auto"  required style="border-top-left-radius: 0px;box-shadow: 1px 2px 0px #D4D4D4; background-color: #fff"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3">
                                <br>
                                <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-paper-plane"></i><span class="hidden-sm-down">SEND</span></button>
                            </div>
                        </div>

                    </form>

                </div>



            </div>
        </div>

    </div>


</main>
<!--/Main layout-->

<?php include 'includes/modals.php';?>


<?php
include 'includes/dashboard-scripts.php';
?>
<script type="text/javascript" src="/ticko/assets/js/custom/get-organizer-details.js"></script>

<script type="text/html" id="message_template">
    <![CDATA[

    <li class="<%= this.class %>">
        <div class="avatar"><a ><img src="/ticko/Controllers/uploads/male.png" draggable="false"/></div>
        <div class="msg">
            <p class="msg-user"><i class="fa fa-fw fa-user"></i><%= this.name %></a></p>
            <p><%= this.message %></p>
            <time><i class="fa fa-fw fa-check"></i><%= this.message_date %>, <%= this.time %></time>
        </div>
    </li>

    ]]>
</script>
<script type="text/javascript" src="/ticko/assets/js/custom/sound.js"></script>
<script type="text/javascript" src="/ticko/assets/js/custom/chat-message-get.js"></script>
<script type="text/javascript" src="/ticko/assets/js/custom/chat-message-add.js"></script>

</body>
</html>