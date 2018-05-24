<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$db = "projekt";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  if (isset($_POST)&&!empty($_POST))
{ // check username
    if (0 === preg_match("/\S+/",$_POST["username"]))
    {
      (($errors == "&")? $errors = $errors."uname=1":$errors = $errors."&uname=1");
    }//check password
    if (0 === preg_match("/\S+/",$_POST["password"]))
    {
      (($errors == "&")? $errors =  $errors."password=1": $errors = $errors."&password=1");
    }//check email
    if (0 === preg_match("/.+@.+\..+/",$_POST["email"]))
    {
      (($errors == "&")? $errors = $errors."email=1":$errors = $errors."&email=1");
    }//check passwords matching
    if (0 !== strcmp($_POST["password"], $_POST["password_confirm"]))
    {
      (($errors == "&")? $errors = $errors."pwdconf=1":$errors = $errors."&pwdconf=1");
    }
    if (0 !== preg_match("/ʌDuplicate.*email.*/i",mysqli_error($conn)))
    {
      (($errors == "&")? $errors = $errors."userexists=1": $errors = $errors."&userexists=1");
    }
    //check no errors occured
    if ($errors == "&")
    {
      $uname = mysqli_real_escape_string($conn,$_POST["username"]);
      $email = mysqli_real_escape_string($conn,$_POST["email"]);
      $password = mysqli_real_escape_string($conn,$_POST["password"]);
          // generates a 22 character long random string
          function unique_salt()
          {
            return substr(sha1(mt_rand()),0,22);
          }

      $unique_salt = unique_salt();
      $hash = sha1($unique_salt . $password);

      $query = "INSERT INTO user (User_Name,User_Email,User_Password, User_Salt) VALUES ('$uname','$email','$hash','$unique_salt')";
      $result = mysqli_query($conn,$query);
      header("Location: ../home.php");
    }else{
      header("Location: ../home.php?reg=1".(($errors=="&")?"":$errors));
    }
  }
?>
