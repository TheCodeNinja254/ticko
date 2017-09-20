<?php
/**
 * Created by PhpStorm.
 * User: FMMBUGUA
 * Date: 6/7/2017
 * Time: 1:57 PM
 */

require_once "env.define.php";

$MySQLiconn = new MySQLi(HOST, USERNAME, PASSWORD, DB);


//Test Code:
if($MySQLiconn){
    // print "Connection Established";
}else{
    //print "Connection Failed";
    die("ERROR : -> ".$MySQLiconn->connect_error);
}
