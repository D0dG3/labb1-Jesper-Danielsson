function validate_Form_Register()
{
var name=document.register.username.value;
var email=document.register.email.value;
var password=document.register.password.value;
var password_confirm=document.register.password_confirm.value;

  if (name.trim()=="" || email.trim()=="" || password.trim()=="")
  {
    alert("Please enter proper values.");
    return false;
  }
  else
    {
      if (email.match(/.+@.+\..+/))
      {
        return true;
      }
      else
      {
        alert("Email is not correct.");
        return false;
      }
    }
}

function validate_Form_Login()
{
  var name=document.login.name.value;
  var password=document.login.password.value;
    if (name.trim()== "" && password.trim()== "")
    {
      alert("Please enter proper values.");
      return false;
    }
    else
    {
        return true;
    }
}
function validate_Form_Comment()
{
  var post=document.comment.post.value;
    if (post.trim()=="")
    {
      alert("Please fill out your comment");
      return false;
    }
    else
    {
      return true;
    }
}
