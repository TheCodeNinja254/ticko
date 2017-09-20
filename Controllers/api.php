<?php
/**
 * Created by PhpStorm.
 * User: FMMBUGUA
 * Date: 6/7/2017
 * Time: 1:56 PM
 */

require_once "Core.php";
require_once "env.php";
require_once "Main.php";

error_reporting(0);

/** @var Time Initialization $date */
date_default_timezone_set('Africa/Nairobi');
$date = date("j  F Y  g.i a", time());

//To allow cross domain RESTApi requests
header("Access-Control-Allow-Origin: *");


$ticko = new EventPoint();
global $method;
global $pathTokens;

//methodInit
$path =  array_key_exists("path", $_REQUEST) ? $_REQUEST["path"] : null;
$pathTrimmed = trim($path, '/');
$pathTokens = explode('/', $pathTrimmed);


$method = $pathTokens[0];


//Getting Client Browser
$browserArray = $ticko->getBrowser();
$clientBrowser = $browserArray['name']."::".$browserArray['version']."::".$browserArray['platform'].":: UA - ".$browserArray['userAgent'];

if($method === 'getNothing'){

   echo "Damn! This works man. MVC done!";
}

if($method === 'clientLogin'){

    $username =  array_key_exists("c_username1", $_REQUEST) ? $_REQUEST["c_username1"] : null;
    $password =  array_key_exists("c_password1", $_REQUEST) ? $_REQUEST["c_password1"] : null;

    $username = $ticko-> securityScrutiny($MySQLiconn, $username);
    $password = $ticko-> securityScrutiny($MySQLiconn, $password);

    $password = $ticko->hash_password($password);
    $ticko -> clientLogin($MySQLiconn, $username, $password);
}

if($method === 'organizerLogin'){

    $username =  array_key_exists("o_username1", $_REQUEST) ? $_REQUEST["o_username1"] : null;
    $password =  array_key_exists("o_password1", $_REQUEST) ? $_REQUEST["o_password1"] : null;

    $username = $ticko-> securityScrutiny($MySQLiconn, $username);
    $password = $ticko-> securityScrutiny($MySQLiconn, $password);

    $password = $ticko->hash_password($password);
    $ticko -> organizerLogin($MySQLiconn, $username, $password);
}

if($method === 'adminLogin'){

    $username =  array_key_exists("ad_username", $_REQUEST) ? $_REQUEST["ad_username"] : null;
    $password =  array_key_exists("ad_password", $_REQUEST) ? $_REQUEST["ad_password"] : null;

    $username = $ticko-> securityScrutiny($MySQLiconn, $username);
    $password = $ticko-> securityScrutiny($MySQLiconn, $password);

    $password = $ticko->hash_password($password);
    $ticko -> adminLogin($MySQLiconn, $username, $password);
}

if($method === 'hashPass'){


    $password = $pathTokens[1];
    echo $ticko->hash_password($password);

}

if($method === 'clientRegistration'){

    $c_username =  array_key_exists("username", $_REQUEST) ? $_REQUEST["username"] : null;
    $c_password =  array_key_exists("password", $_REQUEST) ? $_REQUEST["password"] : null;
    $c_f_name =  array_key_exists("c_f_name", $_REQUEST) ? $_REQUEST["c_f_name"] : null;
    $c_l_name =  array_key_exists("c_l_name", $_REQUEST) ? $_REQUEST["c_l_name"] : null;
    $c_phone =  array_key_exists("c_phone", $_REQUEST) ? $_REQUEST["c_phone"] : null;

    $c_username = $ticko-> securityScrutiny($MySQLiconn, $c_username);
    $c_password = $ticko-> securityScrutiny($MySQLiconn, $c_password);
    $c_f_name = $ticko-> securityScrutiny($MySQLiconn, $c_f_name);
    $c_l_name = $ticko-> securityScrutiny($MySQLiconn, $c_l_name);
    $c_phone = $ticko-> securityScrutiny($MySQLiconn, $c_phone);

    $c_password = $ticko->hash_password($c_password);
    $ticko -> clientRegistration($MySQLiconn, $c_f_name, $c_l_name, $c_username, $c_phone, $c_password);
}

if($method === 'organizerRegistration'){

    $o_username =  array_key_exists("o_username", $_REQUEST) ? $_REQUEST["o_username"] : null;
    $o_password =  array_key_exists("o_password", $_REQUEST) ? $_REQUEST["o_password"] : null;
    $o_f_name =  array_key_exists("o_f_name", $_REQUEST) ? $_REQUEST["o_f_name"] : null;
    $o_l_name =  array_key_exists("o_l_name", $_REQUEST) ? $_REQUEST["o_l_name"] : null;
    $o_phone =  array_key_exists("o_phone", $_REQUEST) ? $_REQUEST["o_phone"] : null;
    $company_name =  array_key_exists("company_name", $_REQUEST) ? $_REQUEST["company_name"] : null;
    $company_address =  array_key_exists("company_address", $_REQUEST) ? $_REQUEST["company_address"] : null;
    $company_description =  array_key_exists("company_description", $_REQUEST) ? $_REQUEST["company_description"] : null;

    $photo = basename($_FILES["post_image"]["name"]);
    $temp = explode(".", $_FILES["post_image"]["name"]);
    $newphotoname = $o_f_name."-".round(microtime(true)) . '.' . end($temp);

    $o_username = $ticko-> securityScrutiny($MySQLiconn, $o_username);
    $o_password = $ticko-> securityScrutiny($MySQLiconn, $o_password);
    $o_f_name = $ticko-> securityScrutiny($MySQLiconn, $o_f_name);
    $o_l_name = $ticko-> securityScrutiny($MySQLiconn, $o_l_name);
    $o_phone = $ticko-> securityScrutiny($MySQLiconn, $o_phone);
    $company_name = $ticko-> securityScrutiny($MySQLiconn, $company_name);
    $company_address = $ticko-> securityScrutiny($MySQLiconn, $company_address);
    $company_description = $ticko-> securityScrutiny($MySQLiconn, $company_description);

    $o_password = $ticko->hash_password($o_password);

    $ticko ->uploadImage($newphotoname);
    $ticko -> organizerRegistration($MySQLiconn, $o_f_name, $o_l_name, $company_name, $company_address, $company_description, $o_username, $o_phone, $newphotoname, $o_password);
}

if($method === 'logout'){
    $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

// Finally, destroy the session.
    session_unset();
    session_destroy();

    header('location:/ticko/home/logout/');
}


if($method === 'getAdminDetails'){
    $ticko ->getAdminDetails($MySQLiconn);

}

if($method === 'getClientDetails'){
    $ticko ->getClientDetails($MySQLiconn);

}

if($method === 'getOrganizerDetails'){
    $ticko ->getOrganizerDetails($MySQLiconn);

}

if($method === 'addEvent'){

    $o_username = $_SESSION['o_username'];
    $e_name =  array_key_exists("e_name", $_REQUEST) ? $_REQUEST["e_name"] : null;
    $venue =  array_key_exists("venue", $_REQUEST) ? $_REQUEST["venue"] : null;
    $fixed_participants =  array_key_exists("fixed_participants", $_REQUEST) ? $_REQUEST["fixed_participants"] : null;
    $e_category =  array_key_exists("e_category", $_REQUEST) ? $_REQUEST["e_category"] : null;
    $st_time =  array_key_exists("st_time", $_REQUEST) ? $_REQUEST["st_time"] : null;
    $ed_time =  array_key_exists("ed_time", $_REQUEST) ? $_REQUEST["ed_time"] : null;
    $st_date =  array_key_exists("st_date", $_REQUEST) ? $_REQUEST["st_date"] : null;
    $ed_date =  array_key_exists("ed_date", $_REQUEST) ? $_REQUEST["ed_date"] : null;
    $e_description =  array_key_exists("e_description", $_REQUEST) ? $_REQUEST["e_description"] : null;
    $e_price =  array_key_exists("e_price", $_REQUEST) ? $_REQUEST["e_price"] : null;

    $photo = basename($_FILES["post_image"]["name"]);
    $temp = explode(".", $_FILES["post_image"]["name"]);
    $newphotoname = $e_name."-".round(microtime(true)) . '.' . end($temp);

    $e_name = $ticko-> securityScrutiny($MySQLiconn, $e_name);
    $venue = $ticko-> securityScrutiny($MySQLiconn, $venue);
    $fixed_participants = $ticko-> securityScrutiny($MySQLiconn, $fixed_participants);
    $e_category = $ticko-> securityScrutiny($MySQLiconn, $e_category);
    $st_time = $ticko-> securityScrutiny($MySQLiconn, $st_time);
    $ed_time = $ticko-> securityScrutiny($MySQLiconn, $ed_time);
    $st_date = $ticko-> securityScrutiny($MySQLiconn, $st_date);
    $ed_date = $ticko-> securityScrutiny($MySQLiconn, $ed_date);
    $e_description = $ticko-> securityScrutiny($MySQLiconn, $e_description);

    $ticko ->uploadImage($newphotoname);
    $ticko ->addEvent($MySQLiconn, $e_name, $venue, $fixed_participants, $e_category, $st_time, $ed_time, $date, $st_date, $ed_date, $e_description, $newphotoname, $o_username, $e_price);
}

if($method === 'getOrganizerEvents'){
    $ticko ->getOrganizerEvents($MySQLiconn);

}

if($method === 'getFreeClientEvents'){
    $ticko ->getFreeClientEvents($MySQLiconn);

}

if($method === 'getPaidClientEvents'){
    $ticko ->getPaidClientEvents($MySQLiconn);

}

if($method === 'getPaidEvents'){
    $ticko ->getPaidEvents($MySQLiconn);

}

if($method === 'getFreeEvents'){
    $ticko ->getFreeEvents($MySQLiconn);

}

if($method === 'getSingleEvent'){
    $id = $pathTokens[1];
    $ticko ->getSingleEvent($MySQLiconn, $id);

}

if($method === 'checkClientLogin'){
    $jsonData = array();

   if($ticko->clientSessionChecker()){
       $ticko->getClientDetails($MySQLiconn);

   }else{
       $jsonData["data"] = array("response" => false);
   }

}

if($method === 'addBooking'){

    $event_id =  array_key_exists("event_id", $_REQUEST) ? $_REQUEST["event_id"] : null;
    $no_of_tickets =  array_key_exists("no_of_tickets", $_REQUEST) ? $_REQUEST["no_of_tickets"] : null;

    $event_id = $ticko-> securityScrutiny($MySQLiconn, $event_id);
    $no_of_tickets = $ticko-> securityScrutiny($MySQLiconn, $no_of_tickets);

    $ticko -> addBooking($MySQLiconn, $event_id, $no_of_tickets, $date);
}


if($method === 'getPerEventBooking'){
    $event_id = $pathTokens[1];
    $ticko ->getPerEventBooking($MySQLiconn, $event_id);

}

if($method === 'getSingleBooking'){
    $booking_id = $pathTokens[1];
    $ticko ->getSingleBooking($MySQLiconn, $booking_id);

}

if($method === 'validateMpesaCode'){
    $confirmation_code =  array_key_exists("confirmation_code", $_REQUEST) ? $_REQUEST["confirmation_code"] : null;
    $booking_id =  array_key_exists("mpesa_booking_id", $_REQUEST) ? $_REQUEST["mpesa_booking_id"] : null;

    $confirmation_code = $ticko-> securityScrutiny($MySQLiconn, $confirmation_code);

//    echo $confirmation_code;
    $ticko ->validateMpesaCode($MySQLiconn, $confirmation_code, $booking_id);

}

if($method === 'getMpesaInfo'){
    $confirmation_code =  $pathTokens[1];

    $confirmation_code = $ticko-> securityScrutiny($MySQLiconn, $confirmation_code);

    $ticko ->getMpesaInfo($MySQLiconn, $confirmation_code);

}


//The TrioPoint Chat App
//---------------------------------------------------------------------------------------
if($method === 'chatGetMessages'){

    $ticko -> chatGetMessages($MySQLiconn);
}

if($method === 'asyncChatMessageChecker'){

    $ticko -> asyncChatMessageChecker($MySQLiconn);
}

if($method === 'chatSendMessage'){

    $message =  array_key_exists("message", $_REQUEST) ? $_REQUEST["message"] : null;
    $message = $ticko -> securityScrutiny($MySQLiconn, $message);

    if($ticko->clientSessionChecker()){
        $session_username = $_SESSION['c_username'];
        $ticko -> chatAddMessage($MySQLiconn, $message, $session_username);
    }else if($ticko->organizerSessionChecker()){
        $session_username = $_SESSION['o_username'];
        $ticko -> chatAddMessage($MySQLiconn, $message, $session_username);
    }else{
       $ticko->returnError();
    }
}

//---------------------------------------------------------------------------------------

if($method === 'getOrganizers'){
    $ticko ->getOrganizers($MySQLiconn);

}

if($method === 'removeOrganizer'){
    $o_username = $pathTokens[1];
    $ticko ->removeOrganizer($MySQLiconn, $o_username);

}

if($method === 'removeEvent'){
    $event_id = $pathTokens[1];
    $ticko ->removeEvent($MySQLiconn, $event_id);

}


if($method === 'getEvents'){
    $ticko ->getEvents($MySQLiconn);

}

if($method === 'updateEventStatus'){
    $event_id = $pathTokens[1];
    $status = $pathTokens[2];
    $ticko ->updateEventStatus($MySQLiconn, $event_id, $status);

}

if($method === 'updateOrgProfile'){

    $o_f_name =  array_key_exists("o_f_name", $_REQUEST) ? $_REQUEST["o_f_name"] : null;
    $o_l_name =  array_key_exists("o_l_name", $_REQUEST) ? $_REQUEST["o_l_name"] : null;
    $o_phone =  array_key_exists("o_phone", $_REQUEST) ? $_REQUEST["o_phone"] : null;
    $company_name =  array_key_exists("company_name", $_REQUEST) ? $_REQUEST["company_name"] : null;
    $company_address =  array_key_exists("company_address", $_REQUEST) ? $_REQUEST["company_address"] : null;

//    $photo = basename($_FILES["post_image"]["name"]);
//    $temp = explode(".", $_FILES["post_image"]["name"]);
//    $newphotoname = $o_f_name."-".round(microtime(true)) . '.' . end($temp);


    $o_f_name = $ticko-> securityScrutiny($MySQLiconn, $o_f_name);
    $o_l_name = $ticko-> securityScrutiny($MySQLiconn, $o_l_name);
    $o_phone = $ticko-> securityScrutiny($MySQLiconn, $o_phone);
    $company_name = $ticko-> securityScrutiny($MySQLiconn, $company_name);
    $company_address = $ticko-> securityScrutiny($MySQLiconn, $company_address);

//    $ticko ->uploadImage($newphotoname);
    $ticko -> updateOrgProfile($MySQLiconn, $o_f_name, $o_l_name, $o_phone, $company_name, $company_address);
}

if($method === 'updateClientProfile'){

    $c_f_name =  array_key_exists("c_f_name", $_REQUEST) ? $_REQUEST["c_f_name"] : null;
    $c_l_name =  array_key_exists("c_l_name", $_REQUEST) ? $_REQUEST["c_l_name"] : null;
    $c_phone =  array_key_exists("c_phone", $_REQUEST) ? $_REQUEST["c_phone"] : null;

    $c_f_name = $ticko-> securityScrutiny($MySQLiconn, $c_f_name);
    $c_l_name = $ticko-> securityScrutiny($MySQLiconn, $c_l_name);
    $c_phone = $ticko-> securityScrutiny($MySQLiconn, $c_phone);

    $ticko -> updateClientProfile($MySQLiconn, $c_f_name, $c_l_name, $c_phone);
}

if($method === 'updateOrgPassword'){

    $o_password =  array_key_exists("o_password", $_REQUEST) ? $_REQUEST["o_password"] : null;
    $o_current_password =  array_key_exists("o_current_password", $_REQUEST) ? $_REQUEST["o_current_password"] : null;

    $o_password = $ticko-> securityScrutiny($MySQLiconn, $o_password);
    $o_current_password = $ticko-> securityScrutiny($MySQLiconn, $o_current_password);

    $o_password = $ticko->hash_password($o_password);
    $o_current_password = $ticko->hash_password($o_current_password);

    $ticko -> updateOrgPassword($MySQLiconn, $o_password, $o_current_password);
}

if($method === 'updateClientPassword'){

    $c_password =  array_key_exists("c_password", $_REQUEST) ? $_REQUEST["c_password"] : null;
    $c_current_password =  array_key_exists("c_current_password", $_REQUEST) ? $_REQUEST["c_current_password"] : null;

    $c_password = $ticko-> securityScrutiny($MySQLiconn, $c_password);
    $c_current_password = $ticko-> securityScrutiny($MySQLiconn, $c_current_password);

    $c_password = $ticko->hash_password($c_password);
    $c_current_password = $ticko->hash_password($c_current_password);

    $ticko -> updateClientPassword($MySQLiconn, $c_password, $c_current_password);
}

if($method === 'updateAdminPassword'){

    $ad_password =  array_key_exists("ad_password", $_REQUEST) ? $_REQUEST["ad_password"] : null;
    $ad_current_password =  array_key_exists("ad_current_password", $_REQUEST) ? $_REQUEST["ad_current_password"] : null;

    $ad_password = $ticko-> securityScrutiny($MySQLiconn, $ad_password);
    $ad_current_password = $ticko-> securityScrutiny($MySQLiconn, $ad_current_password);

    $ad_password = $ticko->hash_password($ad_password);
    $ad_current_password = $ticko->hash_password($ad_current_password);

//    echo $ad_password;
//    echo "<br>";
//    echo $ad_current_password;


    $ticko -> updateAdminPassword($MySQLiconn, $ad_current_password, $ad_password);
}

if($method === 'sendMail'){

    $ticko -> sendMail();
}