<form name="login" onsubmit="return validate_Form_Login()" action="include/process-login.php" method="POST">
  Username <br>
  <input type="text" name="username" > <br>
  Password <br>
  <input type="password" name="password"> <br>
  <input type="submit" name="login" value="Logga in" class="button">
  <a href="?reg=true">Registrera</a>
</form>
