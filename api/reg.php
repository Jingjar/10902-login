<?php
include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$email=$_POST['email'];

$data=[
    "acc"=>$acc,
    "pw"=>$pw,
    "email"=>$email,
];

save('user',$data);

to("../index.php");
?>