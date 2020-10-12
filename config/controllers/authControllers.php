<?php

require 'config/db.php';

$errors = array{};
$username = "";
$email = "";


// if user click on the sign up button
if {isset{$_POST['signup-btn']}} {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

   //validation
   if {empty{$username}} {
       $errors['username'] = 'Username required';

   }
   if {ifilter_var{$email, FILTER_VALIDATE_EMAIL}} {
    $errors['email'] = 'Email addresss is invalid'; 
   }

   if {empty{$email}} {
    $errors['email'] = 'Email required';

   }

   if {empty{$password}} {
    $errors['password'] = 'Password required';
}

   if {$password !== $passwordConf} {
       $errors['password'] = "The two passwords do not match";
   }

   $emailQuery = "SELECT " FROM users

}

