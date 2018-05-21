<?php
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
$query = "SELECT * FROM comment LEFT JOIN user ON comment.User_ID = user.User_ID";
$result = mysqli_query($conn,$query);
while ($comment = mysqli_fetch_assoc($result))
{?>
<form>
  <tr>
    <td><?php echo $comment['User_Name']; ?></td> <br>
    <td><?php echo $comment['Comment']; ?></td> <br>
    <td><?php echo $comment['Timestamp']; ?></td> <br>
  </tr>
</form>
<?php } ?>
