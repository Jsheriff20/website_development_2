<?php

include_once("../model/connect.php");


//get infomation from register form
$username = $_POST['username'];
$user_password = $_POST['password'];
$password_hashed = password_hash($user_password, PASSWORD_DEFAULT); // password is hashed and salted.
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];


regsiter_user($username, $password_hashed, $first_name, $surname, $email, $contact_number)
?>