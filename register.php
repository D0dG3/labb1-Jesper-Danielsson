<form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  Username <br>
  <input type="text" name="username" > <br>
  Email <br>
  <input type="text" name="email"> <br>
  Password <br>
  <input type="password" name="password"> <br>
  Password confirm <br>
  <input type="password" name="password_confirm">
  <a href="home.php">Back to login</a>
  <input type="submit" name="register" value="Registrera" class="button">
</form>
