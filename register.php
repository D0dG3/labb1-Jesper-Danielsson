<?php session_start();?>
<form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  <table>
    <tr>
      <th><label for="username">Username</label></th>
      <td>
        <input type="text" name="username" >
        <tr>
         <?php
        if (isset($_SESSION["emptyField1"]))
        {
          echo $_SESSION["emptyField1"];
          unset($_SESSION["emptyField1"]);
        }?> </tr>
      </td>
    </tr>
    <tr>
      <th><label for="email">Email</label></th>
      <td>
        <input type="text" name="email">
        <tr>
         <?php
        if (isset($_SESSION["emptyField2"]))
        {
          echo $_SESSION["emptyField2"];
          unset($_SESSION["emptyField2"]);
        }?> </tr>
      </td>
    </tr>
    <tr>
      <th><label for="password">Password</label></th>
      <td>
        <input type="password" name="password">
        <tr>
         <?php
        if (isset($_SESSION["emptyField3"]))
        {
          echo $_SESSION["emptyField3"];
          unset($_SESSION["emptyField3"]);
        }?> </tr>
      </td>
    </tr>
    <tr>
      <th><label for="password_confirm">Password</label></th>
      <td>
        <input type="password" name="password_confirm">
        <tr>
         <?php
        if (isset($_SESSION["emptyField4"]))
        {
          echo $_SESSION["emptyField4"];
          unset($_SESSION["emptyField4"]);
        }?> </tr>
      </td>
    </tr>
    <tr>
      <a href="home.php">Back to login</a>
      <input type="submit" name="register" value="Registrera" class="button">
    </tr>
  </table>
</form>
