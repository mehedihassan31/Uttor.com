<?php

include ("../../vendor/autoload.php");
use App\Auth\Auth;

$obj1= new Auth();
$data = $obj1->login($_POST);

if(!empty($data)){
    header("location: ../../profile/profile.html");
}
else {

    header("location: login.php");
}