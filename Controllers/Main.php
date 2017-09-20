<?php
/**
 * Created by PhpStorm.
 * User: FMMBUGUA
 * Date: 6/7/2017
 * Time: 1:57 PM
 */
class EventPoint{


    /**
     * JoytownCRUD constructor.
     */
    public function __construct()
    {

    }


    /**
     * @param $MySQLiconn
     * @param $content
     * @return string
     */
    public function securityScrutiny($MySQLiconn, $content){

        $content = trim($content);
        $content = strip_tags($content);
        $content = stripcslashes($content);
        $content = mysqli_real_escape_string($MySQLiconn, $content);

        return $content;

    }

    /**
     * @return array
     */
    public function getBrowser()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version= "";

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        }
        elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        }
        elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
        {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        }
        elseif(preg_match('/Firefox/i',$u_agent))
        {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        }
        elseif(preg_match('/Chrome/i',$u_agent))
        {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        }
        elseif(preg_match('/Safari/i',$u_agent))
        {
            $bname = 'Apple Safari';
            $ub = "Safari";
        }
        elseif(preg_match('/Opera/i',$u_agent))
        {
            $bname = 'Opera';
            $ub = "Opera";
        }
        elseif(preg_match('/Netscape/i',$u_agent))
        {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
            ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                $version= $matches['version'][0];
            }
            else {
                $version= $matches['version'][1];
            }
        }
        else {
            $version= $matches['version'][0];
        }

        // check if we have a number
        if ($version==null || $version=="") {$version="?";}

        return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'    => $pattern
        );
    }

    /**
     * @param $pass
     * @return string
     */
    public function hash_password($pass) {
        $salt = "@^3cu4333$%&^z£a8)*&()5";
        return sha1($pass . $salt);
    }


    /**
     * @param $newphotoname
     * @return bool
     */
    public function uploadImage($newphotoname){

        //File Upload Library

        //variables
        $target_dir = "uploads/"; //uploads refers to the preferred folder
        $target_file = $target_dir . $newphotoname;
        $target_file_name = basename($_FILES["post_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {

            $check = getimagesize($_FILES["post_image"]["tmp_name"]);

            if($check !== false) {

//                    echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                return false;

            } else {

//                    echo "File is not an image.";
                $uploadOk = 0;
                return false;

            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {

//                    echo "Sorry, file already exists.";
            $uploadOk = 0;

            return false;

        }
        // Check file size

        if ($_FILES["post_image"]["size"] > 30000000 ) {

//                    echo "Sorry, your file is too large.";
            $uploadOk = 0;

            return false;

        }

        // Allow certain file formats
        if($imageFileType != "jpg"
            && $imageFileType != "png"
            && $imageFileType != "jpeg"
            && $imageFileType != "gif"
            && $imageFileType != "JPG"
            && $imageFileType != "GIF"
            && $imageFileType != "JPEG" ) {

//                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;

            return false;

        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
//                    echo "Sorry, your file was not uploaded.";

            return false;


            // if everything is ok, try to upload file

        } else {

            if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)) {

//                        echo "The file $target_file  has been uploaded.";
                return true;

            } else {
//                        echo "Sorry, there was an error uploading your file. Error => ".$_FILES["post_image"]["error"];
//                        ini_set('display_errors',1);
//                        error_reporting(E_ALL);

                return true;
            }

        }
    }

    public function clientLogin($MySQLiconn, $username, $password ){

        $jsonData = array();

        $sql = "SELECT * FROM `clients` WHERE c_username = '$username' AND c_password = '$password'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_object()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $_SESSION['c_username'] = $username;

                        $name = $data->c_f_name;
                        $name = strtolower($name);

                        $row["count"] = $count;
                        $row["response"] = true;
                        $row["name"] = $name;
                        $jsonData["data"] = $row;



                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function organizerLogin($MySQLiconn, $username, $password ){

        $jsonData = array();

        $sql = "SELECT * FROM `organizers` WHERE o_username = '$username' AND o_password = '$password'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_object()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $_SESSION['o_username'] = $username;

                        $name = $data->o_f_name;
                        $name = strtolower($name);

                        $row["count"] = $count;
                        $row["response"] = true;
                        $row["name"] = $name;
                        $jsonData["data"] = $row;



                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function adminLogin($MySQLiconn, $username, $password ){

        $jsonData = array();

        $sql = "SELECT * FROM `admin` WHERE ad_username = '$username' AND ad_password = '$password'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){


            while ($data = $result->fetch_object()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $_SESSION['ad_username'] = $username;

                        $name = $data->admin_name;
                        $name = strtolower($name);

                        $row["count"] = $count;
                        $row["response"] = true;
                        $row["name"] = $name;
                        $jsonData["data"] = $row;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function clientRegistration($MySQLiconn, $c_f_name, $c_l_name, $c_username, $c_phone, $c_password){

        $jsonData = array();

        $SQL = "INSERT INTO `clients` (c_f_name, c_l_name, c_username, c_phone, c_password)
                VALUES ('$c_f_name', '$c_l_name', '$c_username', '$c_phone', '$c_password')";

        $result = $MySQLiconn -> query($SQL);

        if($result === true){

            $row["response"] = true;
            $jsonData["data"] = $row;

        }else{

            $error = mysqli_error($MySQLiconn);
            $row["error"] = $error;
            $row["response"] = false;
            $jsonData["data"] = $row;

        }

        echo json_encode($jsonData);
    }

    public function organizerRegistration($MySQLiconn, $o_f_name, $o_l_name, $company_name, $company_address, $company_description, $o_username, $o_phone, $post_image, $o_password){

        $jsonData = array();

        $SQL = "INSERT INTO `organizers` (o_f_name, o_l_name, company_name, company_address, company_description, o_username, o_phone, post_image, o_password)
                VALUES ('$o_f_name', '$o_l_name', '$company_name', '$company_address', '$company_description', '$o_username', '$o_phone', '$post_image', '$o_password')";

        $result = $MySQLiconn -> query($SQL);

        if($result === true){

            $row["response"] = true;
            $jsonData["data"] = $row;

        }else{

            $error = mysqli_error($MySQLiconn);
            $row["error"] = $error;
            $row["response"] = false;
            $jsonData["data"] = $row;

        }

        echo json_encode($jsonData);
    }

    public function clientSessionChecker(){
        if(isset($_SESSION['c_username']) && (!empty($_SESSION['c_username']))){
            return true;
        }else{
            return false;
        }
    }

    public function organizerSessionChecker(){
        if(isset($_SESSION['o_username']) && (!empty($_SESSION['o_username']))){
            return true;
        }else{
            return false;
        }
    }

    public function adminSessionChecker(){
        if(isset($_SESSION['ad_username']) && (!empty($_SESSION['ad_username']))){
            return true;
        }else{
            return false;
        }
    }

    public function getAdminDetails($MySQLiconn ){

        $jsonData = array();

        $username = $_SESSION['ad_username'];
        $sql = "SELECT ad_username, admin_name FROM `admin` WHERE ad_username = '$username'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_assoc()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $data["count"] = $count;
                        $data["response"] = true;
                        $jsonData["data"] = $data;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function getClientDetails($MySQLiconn ){

        $jsonData = array();

        $username = $_SESSION['c_username'];
        $sql = "SELECT c_f_name, c_l_name, c_username, c_phone FROM `clients` WHERE c_username = '$username'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_assoc()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $data["count"] = $count;
                        $data["response"] = true;
                        $jsonData["data"] = $data;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function getOrganizerDetails($MySQLiconn ){

        $jsonData = array();

        $username = $_SESSION['o_username'];
        $sql = "SELECT o_f_name, o_l_name, company_name, company_address, company_description, o_username, o_phone, post_image FROM `organizers` WHERE o_username = '$username'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_assoc()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $data["count"] = $count;
                        $data["response"] = true;
                        $jsonData["data"] = $data;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function addEvent($MySQLiconn, $e_name, $venue, $fixed_participants, $e_category, $st_time, $ed_time, $date, $st_date, $ed_date, $e_description, $e_image, $o_username, $e_price){

        $jsonData = array();

        $SQL = "INSERT INTO `events` (e_name, venue, fixed_participants, participants, e_category, st_time, ed_time, timestamp, st_date, ed_date, e_description, e_image, o_username, e_price)
                VALUES ('$e_name', '$venue', '$fixed_participants', '$fixed_participants', '$e_category', '$st_time', '$ed_time', '$date', '$st_date', '$ed_date', '$e_description', '$e_image', '$o_username', '$e_price')";

        $result = $MySQLiconn -> query($SQL);

        if($result === true){

            $row["response"] = true;
            $jsonData["data"] = $row;

        }else{

            $error = mysqli_error($MySQLiconn);
            $row["error"] = $error;
            $row["response"] = false;
            $jsonData["data"] = $row;

        }

        echo json_encode($jsonData);
    }

    public function getOrganizerEvents($MySQLiconn){
        $jsonData = array();


        $username = $_SESSION['o_username'];

        $SQL = "SELECT * FROM `events` WHERE o_username = '$username' ORDER BY  event_id DESC";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {

                    $event_id = $row['event_id'];
                    $bookings = $this->getPerEventBookingsNo($MySQLiconn, $event_id);

                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $row["bookings"] = $bookings;
                    $jsonData["data"][] = $row;


                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            } else {

                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }
        echo json_encode($jsonData);
    }

    public function getEvents($MySQLiconn){
        $jsonData = array();



        $SQL = "SELECT * FROM `events`,`organizers` WHERE events.o_username = organizers.o_username ORDER BY  events.event_id DESC";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {

                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $jsonData["data"][] = $row;


                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            } else {

                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }
        echo json_encode($jsonData);
    }

    public function getPaidEvents($MySQLiconn){
        $jsonData = array();


        $SQL = "SELECT * FROM `events` WHERE e_category = 'Paid' AND status = 'Open' ORDER BY  event_id DESC";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {


                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $jsonData["data"][] = $row;


                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            } else {

                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }
        echo json_encode($jsonData);
    }

    public function getFreeEvents($MySQLiconn){
        $jsonData = array();


        $SQL = "SELECT * FROM `events` WHERE e_category = 'Free' AND status = 'Open' ORDER BY  event_id DESC";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {


                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $jsonData["data"][] = $row;

                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            } else {

                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }
        echo json_encode($jsonData);
    }

    public function getSingleEvent($MySQLiconn, $id){

        $jsonData = array();

        $SQL = "SELECT * FROM `events` WHERE event_id = '$id'";

        $result = $MySQLiconn-> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_assoc()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $jsonData["count"] = $count;
                        $jsonData["response"] = true;
                        $jsonData["data"] = $data;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function addBooking($MySQLiconn, $event_id, $no_of_tickets, $date){

        if((bool)$this-> isFreeEvent($MySQLiconn, $event_id)){
          if((bool)$this->isPreviouslyBooked($MySQLiconn, $event_id)){
              $this->returnError();
          }else{
              $this->commitBooking($MySQLiconn, $event_id, $no_of_tickets, $date);
          }
//$this->returnError();
        }else{
            $this->commitBooking($MySQLiconn, $event_id, $no_of_tickets, $date);
        }
    }

    public function commitBooking($MySQLiconn, $event_id, $no_of_tickets, $date){
        $jsonData = array();

        $booking_id = "TICKO".rand(17878777,97878779);
        $c_username = $_SESSION['c_username'];

        $SQL = "INSERT INTO `bookings` (booking_id, event_id, c_username, no_of_tickets, timestamp) 
                VALUES ('$booking_id', '$event_id', '$c_username','$no_of_tickets', '$date')";

        $result = $MySQLiconn -> query($SQL);
        $this->adjustSlots($MySQLiconn, $event_id, $no_of_tickets);

        if($result === true){


            $row["response"] = true;
            $row["booking_id"] = $booking_id;
            $jsonData["data"] = $row;

        }else{

            $error = mysqli_error($MySQLiconn);
            $row["error"] = $error;
            $row["response"] = false;
            $jsonData["data"] = $row;

        }

        echo json_encode($jsonData);
    }

    public function isPreviouslyBooked($MySQLiconn, $event_id){
        $c_username = $_SESSION['c_username'];
        $SQL = "SELECT * FROM `bookings` WHERE event_id = '$event_id' AND c_username = '$c_username'";

        $result = $MySQLiconn-> query($SQL);
        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {

                    return true;

                } else {

                    return false;
                }
            } else {

                return false;
            }
        }
    }

    public function adjustSlots($MySQLiconn, $event_id, $no_of_tickets){
        $SQL = "UPDATE `events` SET participants = participants - '$no_of_tickets' WHERE event_id = '$event_id'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            return true;
        }else{
            return false;
        }
    }

    public function isFreeEvent($MySQLiconn, $event_id){

        $SQL = "SELECT * FROM `events` WHERE event_id = '$event_id' AND e_category = 'Free'";

        $result = $MySQLiconn-> query($SQL);
        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {

                    return true;

                } else {

                    return false;
                }
            } else {

                return false;
            }
        }

    }

    public function returnError(){

        $jsonData = array();

        $row["response"] = false;
        $jsonData["data"] = $row;

        echo json_encode($jsonData);
    }

    public function getFreeClientEvents($MySQLiconn){
        $jsonData = array();


        $username = $_SESSION['c_username'];

        $SQL = "SELECT *, bookings.timestamp AS booking_time FROM `events`,`bookings` WHERE bookings.c_username  = '$username' AND bookings.event_id = events.event_id AND events.e_category = 'Free' ORDER BY  bookings.event_id DESC";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {

                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $jsonData["data"][] = $row;


                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            } else {

                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }
        echo json_encode($jsonData);
    }

    public function getOrganizers($MySQLiconn){
        $jsonData = array();


        $SQL = "SELECT o_username,o_f_name, o_l_name, o_phone,company_name, post_image FROM `organizers`";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        while ($row = $result->fetch_assoc()) {
            if ((bool) $row) {

                if ($count >= 1) {

                    $user = $row['o_username'];
                    $number = $this->getOrgEventsNo($MySQLiconn, $user);

                    $jsonData["count"] = $count;
                    $row["events"] = $number;
                    $jsonData["response"] = true;
                    $jsonData["data"][] = $row;


                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            } else {

                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }
        echo json_encode($jsonData);
    }

    public function getPaidClientEvents($MySQLiconn){
        $jsonData = array();


        $username = $_SESSION['c_username'];

        $SQL = "SELECT *, bookings.timestamp AS booking_time FROM `events`,`bookings` WHERE bookings.c_username  = '$username' AND bookings.event_id = events.event_id AND events.e_category = 'Paid' ORDER BY  bookings.event_id DESC";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if((bool)$result === true && $count > 0){
            while ($row = $result->fetch_assoc()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        if(is_null($row['confirmation_code']) || !isset($row['confirmation_code']) || $row['confirmation_code'] === ''){

                            $status = "Unpaid";
                            $pay_button_type = "button";
                            $paid_button_type = "hidden";
                            $dl_btn_status = "disabled";
                        }else{
                            $status = "Paid";
                            $pay_button_type = "hidden";
                            $paid_button_type = "button";
                            $dl_btn_status = " ";

                        }


                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $row["status"] = $status;
                    $row["pay_button_type"] = $pay_button_type;
                    $row["paid_button_type"] = $paid_button_type;
                    $row["dl_btn_status"] = $dl_btn_status;
                    $jsonData["data"][] = $row;


                    } else {

                        $jsonData["data"] = array("result" => "No data", "response" => false);
                    }
                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            }
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }
        echo json_encode($jsonData);
    }

    public function getSingleBooking($MySQLiconn, $booking_id){

        $jsonData = array();

        $SQL = "SELECT bookings.event_id,
                        events.e_name,
                        events.venue,
                        events.participants,
                        events.fixed_participants,
                        events.e_category,
                        events.e_price,
                        events.st_date,
                        events.st_time,
                        events.ed_date,
                        events.ed_time,
                        events.status,
                        organizers.o_phone,
                        organizers.o_f_name,
                        organizers.o_l_name,
                        bookings.serial_no,
                        bookings.booking_id,
                        bookings.confirmation_code,
                        bookings.no_of_tickets,
                         bookings.timestamp AS booking_time FROM `events`,`bookings`,`organizers` WHERE bookings.booking_id  = '$booking_id' AND bookings.event_id = events.event_id AND events.o_username = organizers.o_username";

        $result = $MySQLiconn-> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $count = mysqli_num_rows($result);

            while ($data = $result->fetch_assoc()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        $jsonData["count"] = $count;
                        $jsonData["response"] = true;
                        $jsonData["data"] = $data;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    /**
     * @param $MySQLiconn
     * @param $confirmation_code
     *
     * For Commit
     */
    public function validateMpesaCode($MySQLiconn, $confirmation_code, $booking_id){
        $jsonData = array();

        $SQL = "SELECT * FROM pesapi_payment WHERE  receipt = '$confirmation_code'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            while ($row = $result->fetch_object()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        if((bool)$this->codeIsUsed($MySQLiconn, $confirmation_code)){

                            $jsonData["data"] = array("result" => "Code_used", "response" => false);

                        }else {
                            if ((bool)$this->updateBookingPayment($MySQLiconn, $confirmation_code, $booking_id)) {

                                $jsonData["count"] = $count;
                                $jsonData["response"] = true;
                                $jsonData["booking_id"] = $booking_id;
                                $jsonData["data"] = $row;


                            } else {

                                $jsonData["data"] = array("result" => "No data", "response" => false);
                            }
                        }

                    } else if($count = 0) {

                        $jsonData["data"] = array("result" => "No data", "response" => false);
                    }else{
                        $jsonData["data"] = array("result" => "No data", "response" => false);
                    }
                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            }
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }
        echo json_encode($jsonData);
    }

    public function codeIsUsed($MySQLiconn, $confirmation_code){

        $SQL = "SELECT confirmation_code FROM bookings WHERE  confirmation_code = '$confirmation_code'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count >= 1){
           return true;
        }else{
            return false;
        }

    }

    /**
     * @param $MySQLiconn
     * @param $confirmation_code
     * @param $booking_id
     * @return bool
     */
    public function updateBookingPayment($MySQLiconn, $confirmation_code, $booking_id){

        $serial_number = "TICKO-".rand(17878777,97878779)."-P";

        $SQL = "UPDATE `bookings` SET confirmation_code = '$confirmation_code', serial_no = '$serial_number' WHERE booking_id = '$booking_id'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $MySQLiconn
     * @param $confirmation_code
     *
     * For Info
     */
    public function getMpesaInfo($MySQLiconn, $confirmation_code){
        $jsonData = array();

        $SQL = "SELECT * FROM pesapi_payment WHERE  receipt = '$confirmation_code'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            while ($row = $result->fetch_object()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        $jsonData["count"] = $count;
                        $jsonData["response"] = true;
                        $jsonData["data"] = $row;


                    } else if($count = 0) {

                        $jsonData["data"] = array("result" => "No data", "response" => false);
                    }else{
                        $jsonData["data"] = array("result" => "No data", "response" => false);
                    }
                } else {

                    $jsonData["data"] = array("result" => "No data", "response" => false);
                }
            }
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }
        echo json_encode($jsonData);
    }

    public function getAmount($MySQLiconn, $confirmation_code){
        $amount = 0;

        $SQL = "SELECT amount FROM pesapi_payment WHERE  receipt = '$confirmation_code'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            while ($row = $result->fetch_object()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        $amount = $row->amount;
                       return $amount;

                    } else if($count = 0) {

                        $amount = 0;
                        return $amount;

                    }else{
                        $amount = 0;
                        return $amount;
                    }
                } else {

                    $amount = 0;
                    return $amount;
                }
            }
        }else{
            $amount = 0;
            return $amount;
        }
        return $amount;
    }

    public function getOrgEventsNo($MySQLiconn, $o_username){
        $amount = 0;

        $SQL = "SELECT COUNT(event_id) AS count FROM events WHERE  o_username = '$o_username'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            while ($row = $result->fetch_object()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        $amount = $row->count;
                        return $amount;

                    } else if($count = 0) {

                        $amount = 0;
                        return $amount;

                    }else{
                        $amount = 0;
                        return $amount;
                    }
                } else {

                    $amount = 0;
                    return $amount;
                }
            }
        }else{
            $amount = 0;
            return $amount;
        }
        return $amount;
    }

    public function getPerEventBookingsNo($MySQLiconn, $event_id){
        $amount = 0;

        $SQL = "SELECT COUNT(event_id) AS count FROM bookings WHERE  event_id = '$event_id'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            while ($row = $result->fetch_object()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        $amount = $row->count;
                        return $amount;

                    } else if($count = 0) {

                        $amount = 0;
                        return $amount;

                    }else{
                        $amount = 0;
                        return $amount;
                    }
                } else {

                    $amount = 0;
                    return $amount;
                }
            }
        }else{
            $amount = 0;
            return $amount;
        }
        return $amount;
    }

    public function getPerEventBooking($MySQLiconn, $event_id){

        $jsonData = array();

        $SQL = "SELECT bookings.c_username, c_f_name, c_l_name, c_phone, confirmation_code, booking_id, no_of_tickets, serial_no, bookings.timestamp FROM `clients`,`bookings` 
                         WHERE bookings.event_id  = '$event_id' AND bookings.c_username = clients.c_username";

        $result = $MySQLiconn-> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            while ($data = $result->fetch_assoc()) {

                if ((bool) $data) {

                    if ($count >= 1) {

                        if(!is_null($data['confirmation_code']) || ($data['confirmation_code'] != '')){
                            $amount = $this->getAmount($MySQLiconn, $data['confirmation_code']);

                            $amount = $amount / 100;

                            $data['amount'] = $amount;
                        }else{
                            $amount = 0;
                            $data['amount'] = $amount;
                        }

                        $jsonData["count"] = $count;
                        $jsonData["response"] = true;
                        $jsonData["data"][] = $data;

                    } else {

                        $jsonData["data"] = array("response" => false);
                    }
                } else {

                    $jsonData["data"] = array("response" => false);
                }
            }

        }else{

            $jsonData["data"] = array("response" => false);
        }

        echo json_encode($jsonData);
    }

    public function chatGetMessages($MySQLiconn){

        $jsonData = array();

        date_default_timezone_set('Africa/Nairobi');
        $date_today = date("Y-m-d");
        $current_time =  date("H:i");

        if($this->clientSessionChecker()){
            $session_username = $_SESSION['c_username'];
            $table = 'clients';
            $name = 'c_f_name';
            $username = 'c_username';
        }else if($this->organizerSessionChecker()){
            $session_username = $_SESSION['o_username'];
            $table = 'organizers';
            $name = 'o_f_name';
            $username = 'o_username';
        }else{
            $jsonData["data"] = array("error" => "Not Logged in", "response" => false);
        }

        $var_one = $table.".".$name;
        $var_two = $table.".".$username;

        $SQL = "SELECT id, message, chat_messages.username AS username, date, time, ".$var_one." AS name FROM `chat_messages`,`".$table."` WHERE chat_messages.username = ".$var_two."  ORDER BY id ASC LIMIT 0,1000";

        $result = $MySQLiconn -> query($SQL);

            $count = mysqli_num_rows($result);

            $_SESSION['count'] = $count;

            if($count > 0){

                while ($row = $result->fetch_assoc()) {


                    if($row["username"] === $session_username){

                        $row['class'] = 'self';

                    }else{
                        $row['class'] = 'other';
                    }

                    if($row["date"] === $date_today){

                        $row['message_date'] = 'Today';

                    }else{
                        $row['message_date'] = $row['date'] ;
                    }

                    $jsonData["count"] = $count;
                    $jsonData["response"] = true;
                    $jsonData["data"][] = $row;
                }
            }else{
                $jsonData["data"] = array("error" => "catastrophe", "response" => false);
            }

        echo json_encode($jsonData);
    }

    public function asyncChatMessageChecker($MySQLiconn){

        $jsonData = array();

        date_default_timezone_set('Africa/Nairobi');
        $date_today = date("Y-m-d");
        $current_time =  date("H:i");

        if($this->clientSessionChecker()){
            $session_username = $_SESSION['c_username'];
            $table = 'clients';
            $name = 'c_f_name';
            $username = 'c_username';
        }else if($this->organizerSessionChecker()){
            $session_username = $_SESSION['o_username'];
            $table = 'organizers';
            $name = 'o_f_name';
            $username = 'o_username';
        }else{
            $jsonData["d"] = array("n" => false);
            echo json_encode($jsonData);
            die();
        }

        $var_one = $table.".".$name;
        $var_two = $table.".".$username;

        $SQL = "SELECT id, message, chat_messages.username AS username, date, time, ".$var_one." AS name FROM `chat_messages`,`".$table."` WHERE chat_messages.username = ".$var_two."  ORDER BY id ASC LIMIT 0,1000";

        $result = $MySQLiconn -> query($SQL);

            $count = mysqli_num_rows($result);

            $prev_count = $_SESSION['count'];

            if($count != $prev_count){

                $jsonData["d"] = array("n" => true);

            }else{
                $jsonData["d"] = array("n" => false);
            }

        echo json_encode($jsonData);
    }

    public function chatAddMessage($MySQLiconn, $message, $username){

        $jsonData = array();
        date_default_timezone_set('Africa/Nairobi');
        $date = date("Y-m-d");
        $time =  date("H:i");

        if($this ->clientSessionChecker() || $this-> organizerSessionChecker()) {

            if ($message === '' || trim($message) === 0 || strlen($message) == 0 || !isset($message)) {

            } else {

                $SQL = "INSERT  INTO `chat_messages` (message, username, date, time) VALUES ('$message', '$username', '$date', '$time')";

                $result = $MySQLiconn->query($SQL);

                if ($result === true) {

                    $row["response"] = true;
                    $jsonData["data"][] = $row;

                } else {

                    $row["response"] = false;
                    $jsonData["data"][] = $row;

                }
            }
        }else{
            $row["response"] = false;
            $row["error"] = "NOT_LOGGED_IN";
            $jsonData["data"][] = $row;
        }

        echo json_encode($jsonData);


    }

    public function removeOrganizer($MySQLiconn, $o_username){
        $jsonData = array();

        $SQL = "DELETE FROM organizers WHERE o_username = '$o_username'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            $jsonData["data"] = array("response" => true);
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }

        echo json_encode($jsonData);
    }

    public function removeEvent($MySQLiconn, $event_id){
        $jsonData = array();

        $SQL = "DELETE FROM events WHERE event_id = '$event_id'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            $jsonData["data"] = array("response" => true);
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }

        echo json_encode($jsonData);
    }

    public function updateEventStatus($MySQLiconn, $event_id, $status){
        $jsonData = array();

        $SQL = "UPDATE `events` SET status = '$status' WHERE event_id = '$event_id'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            $jsonData["data"] = array("response" => true);
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }

        echo json_encode($jsonData);
    }

    public function updateClientProfile($MySQLiconn, $c_f_name, $c_l_name, $c_phone){
        $jsonData = array();

        $c_username = $_SESSION['c_username'];
        $SQL = "UPDATE `clients` SET c_f_name = '$c_f_name', c_l_name = '$c_l_name',c_phone = '$c_phone'  WHERE c_username = '$c_username'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            $jsonData["data"] = array("response" => true);
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }

        echo json_encode($jsonData);
    }

    public function updateOrgProfile($MySQLiconn, $o_f_name, $o_l_name, $o_phone, $company_name, $company_address){
        $jsonData = array();

        $o_username = $_SESSION['o_username'];
        $SQL = "UPDATE `organizers` SET o_f_name = '$o_f_name', o_l_name = '$o_l_name',o_phone = '$o_phone', company_name = '$company_name', company_address = '$company_address'  WHERE o_username = '$o_username'";

        $result = $MySQLiconn-> query($SQL);

        if($result === true){
            $jsonData["data"] = array("response" => true);
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }

        echo json_encode($jsonData);
    }

    public function updateClientPassword($MySQLiconn, $c_password, $c_current_password){
        $jsonData = array();

        $c_username = $_SESSION['c_username'];
        $sql = "SELECT * FROM `clients` WHERE c_username = '$c_username' AND c_password = '$c_current_password'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){

            $SQL = "UPDATE `clients` SET c_password = '$c_password'  WHERE c_username = '$c_username'";

            $result = $MySQLiconn-> query($SQL);

            if($result === true){
                $jsonData["data"] = array("response" => true);
            }else{
                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }


        echo json_encode($jsonData);
    }

    public function updateOrgPassword($MySQLiconn, $o_password, $o_current_password){
        $jsonData = array();

        $o_username = $_SESSION['o_username'];

        $sql = "SELECT * FROM `organizers` WHERE o_username = '$o_username' AND o_password = '$o_current_password'";
        $result = $MySQLiconn-> query($sql);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            $SQL = "UPDATE `organizers` SET o_password = '$o_password' WHERE o_username = '$o_username'";

            $result = $MySQLiconn-> query($SQL);

            if($result === true){
                $jsonData["data"] = array("response" => true);
            }else{
                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }


        echo json_encode($jsonData);
    }

    public function updateAdminPassword($MySQLiconn, $ad_current_password, $ad_password){
        $jsonData = array();

        $username = $_SESSION['ad_username'];

        $sql = "SELECT * FROM `admin` WHERE ad_username = '$username' AND ad_password = '$ad_current_password'";
        $result = $MySQLiconn->query($sql);

        $count = mysqli_num_rows($result);

        if ($result && $count > 0) {
            $SQL = "UPDATE `admin` SET ad_password = '$ad_password' WHERE ad_username = '$username'";

            $result = $MySQLiconn-> query($SQL);

            if($result === true){
                $jsonData["data"] = array("response" => true);
            }else{
                $jsonData["data"] = array("result" => "No data", "response" => false);
            }
        }else{
            $jsonData["data"] = array("result" => "No data", "response" => false);
        }


        echo json_encode($jsonData);
    }

    public function chatUserIdentity($MySQLiconn, $username){
        $name = 0;

        $SQL = "SELECT o_f_name, o_l_name FROM organizers WHERE o_username = '$username'";
        $result = $MySQLiconn -> query($SQL);

        $count = mysqli_num_rows($result);

        if($result && $count > 0){
            while ($row = $result->fetch_object()) {
                if ((bool) $row) {

                    if ($count >= 1) {

                        $f_name = $row->o_f_name;
                        $l_name = $row->o_fo_l_name;

                        $name = $f_name." ".$l_name;
                        return $name;

                    } else{

                        $SQL = "SELECT c_f_name, c_l_name FROM clients WHERE c_username = '$username'";
                        $result = $MySQLiconn -> query($SQL);

                        $count = mysqli_num_rows($result);

                        if($result && $count > 0){
                            while ($row = $result->fetch_object()) {
                                if ((bool) $row) {

                                    if ($count >= 1) {

                                        $f_name = $row->o_f_name;
                                        $l_name = $row->o_fo_l_name;

                                        $name = $f_name." ".$l_name;
                                        return $name;

                                    } else{
                                        $name = 0;
                                        return $name;
                                    }
                                } else {

                                    $name = 0;
                                    return $name;
                                }
                            }
                        }else{
                            $name = 0;
                            return $name;
                        }
                    }
                } else {

                    $name = 0;
                    return $name;
                }
            }
        }else{
            $name = 0;
            return $name;
        }
        return $name;
    }

    public function sendMail(){
        require 'jayMailer/PHPMailerAutoload.php';

        $jsonData = array();
        $name = "Fredrick Mwangi";
        $to = "grimlisby.254@gmail.com";
        $subject = "Test";

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SingleTo = true;
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "mail.sajoytownsecondary.org";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "ticko@sajoytownsecondary.org";
        $mail->Password = "ticko2017";
        $mail->setFrom('ticko@sajoytownsecondary.org', 'TICKO SYSTEM');
        $mail->addReplyTo('ticko@sajoytownsecondary.org', 'TICKO SYSTEM');
        $mail->addAddress($to, $name);
        $mail->Subject = $subject;
        $mail->msgHTML(file_get_contents('jayMailer/index.html'), dirname(__FILE__));
        $mail->AltBody = 'This is a plain-text message body';

        if (!$mail->send()) {

//        echo "Mailer Error: " . $mail->ErrorInfo;
//            return false;

            $jsonData["data"] = array("error" => $mail->ErrorInfo, "response" => false);
        } else {

//        echo "Message sent!";
//            return true;
            $jsonData["data"] = array("response" => true);

        }
        echo json_encode($jsonData);
    }

}