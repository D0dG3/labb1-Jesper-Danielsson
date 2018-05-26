<form name="login" onsubmit="return validate_Form_Login()" action="include/process-login.php" method="POST">
  <table>
    <?php echo ((isset($_GET["generalError"])&&!empty($_GET["generalError"]))? "Please fill out form":"") ?>
      <tr>
        <td><label for="username">Username</label></td>
        <td><input type="text" name="username" required></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["unamemtch"])&&!empty($_GET["unamemtch"]))? "display:inline":"display:none"); ?> >
        <td >Username or password is wrong</td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password" name="password" required></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["pwdmtch"])&&!empty($_GET["pwdmtch"]))? "display:inline":"display:none"); ?>>
        <td>Username or password is wrong</td>
      </tr>
    </table>
      <tr>
        <a class="link" href="?reg=true">Registrera</a>
        <tr>  
        <input type="submit" name="login" value="Logga in" class="button">
      </tr>
      </tr>
</form>
