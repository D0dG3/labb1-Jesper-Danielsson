<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "projekt";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$uname = $_POST["username"];
$password = $_POST["password"];

$ss = mysqli_query($conn,"SELECT User_Salt FROM user WHERE User_Name = '$uname'");
$result = mysqli_fetch_array($ss);
$hash = sha1($result['User_Salt'].$password);

$sql = "SELECT * FROM user WHERE User_Name='$uname' AND User_Password = '$hash'";
$result = $conn->query($sql);
$compare = mysqli_fetch_array($result);

  if ($result->num_rows > 0)
  {
    $row = $result -> fetch_assoc();
    foreach ($result as $row)
      {
        $_SESSION["User_ID"] = $row["User_ID"];
        $_SESSION["User_Name"] = $row["User_Name"];
        $_SESSION["User_Password"] = $row["User_Password"];
      }
      header("Location: ../home.php");
  }
  else if (isset($_POST["username"]))
    {
      if ($uname != $compare["User_Name"])
      {
        (($errors == "?")? $errors = $errors."unamemtch=1":$errors = $errors."&unamemtch=1");
      } //check password
      if ($hash != $compare["User_Password"])
      {
        (($errors == "?")? $errors = $errors."pwdmtch=1":$errors = $errors."&pwdmtch=1");
      }
        header("Location: ../home.php?".(($errors=="&")?"":$errors));
    }
