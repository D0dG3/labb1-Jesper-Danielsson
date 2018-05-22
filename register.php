<?php session_start();?>
<form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  <table>
    <tr>
      <th><label for="username">Username</label></th>
      <td>
        <input type="text" name="username" >
        <td> <?php
        if (isset($_SESSION['username']))
        {
          echo $_SESSION["empty-field1"];
          unset($_SESSION['username']);
        }?> </td>
      </td>
    </tr>
    <tr>
      <th><label for="email">Email</label></th>
      <td>
        <input type="text" name="email">
      </td>
    </tr>
    <tr>
      <th><label for="password">Password</label></th>
      <td>
        <input type="password" name="password">
      </td>
    </tr>
    <tr>
      <th><label for="password_confirm">Password</label></th>
      <td>
        <input type="password" name="password_confirm">
      </td>
    </tr>
    <tr>
      <a href="home.php">Back to login</a>
      <input type="submit" name="register" value="Registrera" class="button">
    </tr>
  </table>
</form>
