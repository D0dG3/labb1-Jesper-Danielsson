 <form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  <table>
    <?php echo ((isset($_GET["generalError"])&&!empty($_GET["generalError"]))? "Please fill out form":"") ?>
      <tr>
        <td><label for="username">Username</label></td>
        <td><input type="text" name="username" required></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["uname"])&&!empty($_GET["uname"]))? "display:inline":"display:none"); ?> >
        <td >Please fill out username</td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="text" name="email" required></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["email"])&&!empty($_GET["email"]))? "display:inline":"display:none"); ?>>
        <td>Please fill out email correctly</td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["userexists"])&&!empty($_GET["userexists"]))? "display:inline":"display:none"); ?>>
        <td>This email is in use</td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password" name="password" required></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["password"])&&!empty($_GET["password"]))? "display:inline":"display:none"); ?>>
        <td>Please fill out the password correctly</td>
      </tr>
      <tr>
        <td><label for="password_confirm">Confirm password</label></td>
        <td><input type="password" name="password_confirm" required></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["pwdconf"])&&!empty($_GET["pwdconf"]))? "display:inline":"display:none"); ?> >
        <td>The passwords does not match</td>
      </tr>
    </table>
      <tr>
        <a class="link" href="home.php">Back to login</a>
      </tr>
      <tr>
        <input type="submit" name="register" value="Registrera" class="button">
      </tr>
</form>
