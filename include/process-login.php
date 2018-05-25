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
$compare = $result-> fetch_assoc();

  if ($result->num_rows > 0)
  { if ($row = $result-> fetch_assoc())
    {
      while ($row = $result-> fetch_assoc())
      {
        $_SESSION["User_ID"] = $row["User_ID"];
        $_SESSION["User_Name"] = $row["User_Name"];
        $_SESSION["User_Password"] = $row["User_Password"];
      }
    }
  else
  {
    if (isset($_POST)&&!empty($_POST))
    { echo "isset";
      if (0 === preg_match("/\S+/",$_POST["username"]))
      {
        (($errors == "?")? $errors = $errors."unamemtch=1":$errors = $errors."&unamemtch=1");
      } //check password
      if (0 !== strcmp(($_POST["password"]), ($compare["User_Password"])))
      {
        (($errors == "?")? $errors = $errors."pwdmtch=1":$errors = $errors."&pwdmtch=1");
      }
      if($errors == "")
      {
        header("Location: ../home.php");
      }
    }
  }
}
  header("Location: ../home.php?".(($errors=="?")?"":$errors));
