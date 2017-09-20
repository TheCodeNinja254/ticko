<?php
include 'Controllers/Core.php';
include 'Controllers/Main.php';

error_reporting(0);

$ticko = new EventPoint();
$path = @$_GET['path'];


if (!isset($path)) {
    include 'views/home.php';
} else {

    $pathTrimmed = trim($path, '/');
    $pathTokens = explode('/', $pathTrimmed);

    if ($pathTokens[0] === 'home') {
//     echo $path;
        include 'views/home.php';

    } else if ($pathTokens[0] === 'Controllers') {

        include 'Controllers/' . $path;

    } else if ($pathTokens[0] === 'admin') {

        if(!$ticko->adminSessionChecker()){
            header('location:/ticko/home/');
            die();
        }

        if(isset($pathTokens[1]) && !empty($pathTokens[1])){

            if ($pathTokens[1] === 'events') {

                include 'views/admin-manage-events-view.php';

            } else if ($pathTokens[1] === 'all-events') {

                include 'views/admin-manage-events-view.php';

            }  else if ($pathTokens[1] === 'profile') {

                include 'views/admin-profile-view.php';

            }else {

                include 'views/admin.php';

            }
        } else {
            include 'views/admin.php';
        }

    } else if ($pathTokens[0] === 'dashboard') {

        if(!$ticko->organizerSessionChecker()){
            header('location:/ticko/home/');
            die();
        }

        if(isset($pathTokens[1]) && !empty($pathTokens[1])){

            if ($pathTokens[1] === 'event') {

                include 'views/organizer-add-event.php';

            } else if ($pathTokens[1] === 'profile') {

                include 'views/organizer-profile-view.php';

            }  else if ($pathTokens[1] === 'chatroom') {

                include 'views/chatroom.organizer.view.php';

            }else {

                include 'views/organizer-home.view.php';

            }
        } else {
            include 'views/organizer-home.view.php';
        }

    } else if ($pathTokens[0] === 'client') {

        if(!$ticko->clientSessionChecker()){
            header('location:/ticko/home/');
            die();
        }else{
            if(isset($pathTokens[1]) && !empty($pathTokens[1])){

                if($pathTokens[1] === 'my-events'){

                    include 'views/client.php';

                }else if($pathTokens[1] === 'chatroom'){

                    include 'views/chatroom.client.view.php';
                }else if($pathTokens[1] === 'profile'){

                    include 'views/client-profile.view.php';
                }else{

                    include 'views/client.php';
                }
            }else{
                include 'views/client.php';
            }
        }



    } else if ($pathTokens[0] === 'forbidden') {

        include 'views/403.view.php';

    } else if ($pathTokens[0] === 'ticket') {
        $booking_id = $pathTokens[1];
        include 'Controllers/mpdf/download.php';

    }else {
//   echo $path;
        include 'views/404.view.php';
    }
}

