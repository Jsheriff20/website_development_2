<?php

include_once("../model/register_api.php");


//get infomation from register form
$register -> username = $_POST['username'];
$user_password = $_POST['password'];
$register -> password_hashed = password_hash($user_password, PASSWORD_DEFAULT); // password is hashed and salted.
$register -> first_name = $_POST['first_name'];
$register -> surname = $_POST['surname'];
$register -> email = $_POST['email'];
$register -> contact_number = $_POST['contact_number'];

$register_json = json_encode($register);

register_user($register_json);

?>