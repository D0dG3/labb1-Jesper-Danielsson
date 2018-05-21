<?php
session_start();
$errors =array();

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
{ //checking not empty
  if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["password_confirm"]))
  {
    $errors[1]="Please enter proper inputs.";
    echo $errors[1];
  }
  else
  { // check username
    if (0 === preg_match("/\S+/",$_POST["username"]))
    {
      $errors[2] = "Please enter a username.";
      echo $errors[2];
    }//check password
    if (0 === preg_match("/\S+/",$_POST["password"]))
    {
      $errors[3] = "Please enter a password.";
      echo $errors[3];
    }//check email
    if (0 === preg_match("/.+@.+\..+/",$_POST["email"]))
    {
      $errors[4] = "Please enter a proper email";
      echo $errors[4];
    }//check passwords matching
    if (0 !== strcmp($_POST["password"], $_POST["password_confirm"]))
    {
      $errors[5] = "Passwords do not match.";
      echo $errors[5];
    }
    if (0 === preg_match("/ʌDuplicate.*email.*/i",mysqli_error($conn)))
    {
      $errors[4] = "Email has already been used.";
      echo $errors[4];
    }
    //check no errors occured
    if (0 === count($errors))
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
    }
  }
}
header("Location: ../home.php");
?>
