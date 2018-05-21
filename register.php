<?php
function form_row_class($name)
{
  global $errors;
  return $errors[$name]?"form_error_row" : "";
}
function error_for($name)
{
  global $errors;
  if($errors[$name])
  {
    return "<div class='form_error'>".$errors[$name];
  }
}
function h($string)
{
  return htmlspecialchars($string);
}
?>
<form name="register" onsubmit="return validate_Form_Register()" action="include/process-register.php" method="POST">
  <table>
    <tr class="<?php echo form_row_class("username")?>">
      <th><label for="username">Username</label></th>
      <td>
        <input type="text" name="username" >
        <?php echo error_for('username')?>
      </td>
    </tr>
    <tr class="<?php echo form_row_class("email") ?>">
      <th><label for="email">Email</label></th>
      <td>
        <input type="text" name="email">
        <?php echo error_for('email')?>
      </td>
    </tr>
    <tr class="<?php echo form_row_class("password")?>">
      <th><label for="password">Password</label></th>
      <td>
        <input type="password" name="password">
        <?php echo error_for('password')?>
      </td>
    </tr>
    <trclass="<?php echo form_row_class("password_confirm")?>">
      <th><label for="password_confirm">Password</label></th>
      <td>
        <input type="password" name="password_confirm">
        <?php echo error_for('password_confirm')?>
      </td>
    </tr>
    <tr>
      <a href="home.php">Back to login</a>
      <input type="submit" name="register" value="Registrera" class="button">
    </tr>
  </table>
</form>
