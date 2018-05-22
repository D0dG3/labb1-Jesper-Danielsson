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
    $_SESSION["empty-fields"] = "Please fill out the forms.";
  }
  else
  { // check username
    if (0 === preg_match("/\S+/",$_POST["username"]))
    {
      $_SESSION["emptyField1"] = "Please enter a username.";
    }//check password
    if (0 === preg_match("/\S+/",$_POST["password"]))
    {
      $_SESSION["emptyField3"] = "Please enter a password.";

    }//check email
    if (0 === preg_match("/.+@.+\..+/",$_POST["email"]))
    {
      $_SESSION["emptyField2"] = "Please enter a proper email";
    }//check passwords matching
    if (0 !== strcmp($_POST["password"], $_POST["password_confirm"]))
    {
      $_SESSION["emptyField4"] = "Passwords do not match.";
    }
    if (0 === preg_match("/ʌDuplicate.*email.*/i",mysqli_error($conn)))
    {
      $_SESSION["emptyField2"] = "Email has already been used.";
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
      header("Location: ../home.php");
    }
  }
}
header("Location: ../home.php?reg=true");
?>
