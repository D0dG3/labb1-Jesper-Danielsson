<?php
session_start();
$errors =array();

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
echo "Connected successfully";
$uname = $_POST['username'];
$password = $_POST['password'];

$ss = mysqli_query($conn,"SELECT User_Salt FROM user WHERE User_Name = '$uname'");
$result = mysqli_fetch_array($ss);
$hash = sha1($result['User_Salt'].$password);

$sql = "SELECT * FROM user WHERE User_Name='$uname' AND User_Password = '$hash'";
$result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
    while ($row = $result-> fetch_assoc())
    {
      $_SESSION["User_ID"] = $row['User_ID'];
      $_SESSION['User_Name'] = $row['User_Name'];
    }
  }
  else
  {
    //stop inlogg if not user
  }
header("Location: ../home.php");
