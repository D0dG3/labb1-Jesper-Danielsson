<!DOCTYPE html>
<?php  session_start(); ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/main.css">
    <title>commentcenter</title>
  </head>
  <body>
    <h1>Hello and Welcome!</h1>
    <img class="img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg/1200px-Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg">
    <div name="register/login">
      <?php if (isset($_SESSION["User_ID"])&&!empty($_SESSION["User_ID"]))
      {
        include "comment.php";
        include "wall.php";
      }
    else if (isset($_GET["reg"])&&!empty($_GET["reg"]))
      {
        include "register.php";
      }
    else
      {
        include "login.php";
        include "wall.php";
      }
    ?></div>

  </body>
</html>
