<?php require_once './enter.php'; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user=new enter();

$user->reserve_name= $_POST["res_name"];
$user->groom_name= $_POST["groom_name"];
$user->bride_name= $_POST["bride_name"];
$user->date= $_POST["reserve_date"];
$user->desc= $_POST["description"];
$user->hall_name= $_POST["hall_name"];
$user->hall_id= $_POST["hall_id"];

$enter=$user->enter_data();

?>