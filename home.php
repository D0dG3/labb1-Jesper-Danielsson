<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/main.css">
    <title>commentcenter</title>
  </head>
  <body>
    <div name="register/login">
      <?php if (isset($_SESSION)&&!empty($_SESSION))
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
