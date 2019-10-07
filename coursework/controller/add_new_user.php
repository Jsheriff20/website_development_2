<?php

include_once("../model/register_api.php");



if (strlen($_POST['username']) < 5) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else if (strlen($_POST['username']) > 20) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
 else if ($_POST['password'] < 7){

    header('Location: ' . $_SERVER['HTTP_REFERER']);
 }
 else if ($_POST['first_name'] < 2){

    header('Location: ' . $_SERVER['HTTP_REFERER']);
 }
 else if ($_POST['surname'] < 2){

   header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else if ($_POST['email'] > 60){

   header('Location: ' . $_SERVER['HTTP_REFERER']);
}
 else if ($_POST['contact_number'] < 11){

    header('Location: ' . $_SERVER['HTTP_REFERER']);
 }
 else if($_POST['confirm_password'] != $_POST['password']){

    header('Location: ' . $_SERVER['HTTP_REFERER']);
 }


 //validate the input and remove any sql injection potential inputs
 $username = stripcslashes($_POST['username']);
 $username = htmlspecialchars($username);
 $user_password = stripcslashes($_POST['password']);
 $user_password = htmlspecialchars($user_password);
 $first_name = stripcslashes($_POST['first_name']);
 $first_name = htmlspecialchars($first_name);
 $surname = stripcslashes($_POST['surname']);
 $surname = htmlspecialchars($surname);
 $email = stripcslashes($_POST['email']);
 $email = htmlspecialchars($email);
 $contact_number = stripcslashes($_POST['contact_number']);
 $contact_number = htmlspecialchars($contact_number);


//get infomation from register form
$register -> username = $username;
$register -> password_hashed = password_hash($user_password, PASSWORD_DEFAULT); // password is hashed and salted.
$register -> first_name = $first_name;
$register -> surname = $surname;
$register -> email = $email;
$register -> contact_number = $contact_number;

$register_json = json_encode($register);

register_user($register_json);

?>