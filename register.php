 <form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  <table>
    <?php echo ((isset($_GET["generalError"])&&!empty($_GET["generalError"]))? "Please fill out form":"") ?>
      <tr>
        <td><label for="username">Username</label></td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["uname"])&&!empty($_GET["uname"]))? "display:inline":"display:none"); ?> >
        <td >Please fill out username</td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["email"])&&!empty($_GET["email"]))? "display:inline":"display:none"); ?>>
        <td>Please fill out email correctly</td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["password"])&&!empty($_GET["password"]))? "display:inline":"display:none"); ?>>
        <td>Please fill out the password correctly</td>
      </tr>
      <tr>
        <td><label for="password_confirm">Confirm password</label></td>
        <td><input type="password" name="password_confirm"></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["pwdconf"])&&!empty($_GET["pwdconf"]))? "display:inline":"display:none"); ?> >
        <td>The passwords does not match</td>
      </tr>
      <tr>
        <a href="home.php">Back to login</a>
        <input type="submit" name="register" value="Registrera" class="button">
      </tr>
    </table>
</form>
