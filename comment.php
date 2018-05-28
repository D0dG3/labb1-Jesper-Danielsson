<div class="comment-div">
  <form name="comment" onsubmit="validate_Form_Comment()"action="include/process-comment.php" method="post">
  Hello! please post your comment belove! <br>
    <table>
      <tr>
        <td><label for="comment">Comment:</label></td>
        <td><textarea name="comment" placeholder="what do you need to say?"></textarea></td>
      </tr>
      <tr class="errormessage" colspan="2" style=<?php echo ((isset($_GET["comment"])&&!empty($_GET["comment"]))? "display:inline":"display:none"); ?>>
        <td>Please post what you like to say!</td>
      </tr>
    </table>
    <tr>
      <input class="button" type="submit" name="Comment" value="Post">
    </tr>
    <input class="button" type="submit" formaction="include/process-logout.php" name="logout" value="Log out">
  </form>
</div>
