function checkLogin(form)
  {
    if(form.UI.value == "") {
      alert("Error: Username cannot be blank!");
      form.UI.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.UI.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.UI.focus();
      return false;
    }
    if(form.PW.value == "") {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.PW.focus();
      return false;
    }
    return true;
  }