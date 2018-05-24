 <form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  <table>
    <tbody>
      <tr>
          <td><label for="username">Username</label></td>
          <td><input type="text" name="username"></td>
      </tr>
      <tr colspan="2" style=<?php echo ((isset($_GET["uname"])&&!empty($_GET["uname"]))? "display:inline":"display:none"); ?> >
        <td >Please fill out username</td>
        <?php //echo ((isset($_GET["generalError"])&&!empty($_GET["generalError"]))? "Please fill out form":"") ?>
      </tr>
        <tr>
          <th><label for="email">Email</label></th>
            <td class="errormessage">
              <input type="text" name="email">
              <?php echo ((isset($_GET["email"])&&!empty($_GET["email"]))? "Please fill out email":"") ?>
            </td>
          </tr>
          <tr>
            <th><label for="password">Password</label></th>
            <tr>
              <td class="errormessage">
                <input type="password" name="password">
                <?php echo ((isset($_GET["password"])&&!empty($_GET["password"]))? "Please fill out password":"") ?>
              </td>
            </tr>
            <tr>
              <th><label for="password_confirm">Password</label></th>
              <tr>
                <td class="errormessage">
                  <input type="password" name="password_confirm">
                  <?php echo ((isset($_GET["pwdconf"])&&!empty($_GET["pwdconf"]))? "passwords do not match":"") ?>
                </td>
              </tr>
              <tr>
                <tfoot>
                  <a href="home.php">Back to login</a>
                  <input type="submit" name="register" value="Registrera" class="button">
                </tfoot>
              </tr>
          </tbody>
      </table>
</form>
