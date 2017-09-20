<?php
/**
 * Created by PhpStorm.
 * User: FMMBUGUA
 * Date: 6/22/2017
 * Time: 3:24 PM
 */
if(isset($_SESSION['ad_username']) && (!empty($_SESSION['ad_username']))){

}else{
    header('location:/ticko/home/');
}