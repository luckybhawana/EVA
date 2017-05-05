  function checkPassword(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

  function checkRegister(form)
  {
    if(form.correo.value != form.confirmcorreo.value) {
      alert("Error: Please check that you've entered and confirmed your school email!");
      form.clave.focus();
      return false;
    }	
    if(form.clave.value == form.claveDos.value) {
      if(!checkPassword(form.claveDos.value)) {
        alert("The password you have entered is not valid!");
        form.clave.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.clave.focus();
      return false;
    }
    return true;
  }