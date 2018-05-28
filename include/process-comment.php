<?php
session_start();
$errors =array();

$servername = "localhost";
$username = "root";
$password = "";
$db = "projektsolo";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_SESSION)&&!empty($_SESSION))
{
  if (empty($_POST['comment']))
   {
    (($errors === "&")? $errors = $errors."comment=1":$errors = $errors."&comment=1");
    header("Location: ../home.php?".(($errors=="&")?"":$errors));
  }
  else {
    $user_id = mysqli_real_escape_string($conn,$_SESSION['User_ID']);
    $comment= mysqli_real_escape_string($conn,$_POST['comment']);
    $query = "INSERT INTO comment (Comment,User_ID,Timestamp) VALUES ('$comment','$user_id',CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn,$query);

    header("Location: ../home.php");
  }
}
 ?>
