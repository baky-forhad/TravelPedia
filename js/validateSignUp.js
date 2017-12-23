var status = false;

function validSignUp()
{
    if (validMail()) {
      if (validUserName()) {
        if (ValidPassword()) {
          if (confirmPassword()) {
            return true;
          }

        }

      }

    }


    //alert("hoy nai");

    return false;
    //alert("dhupp baal");


}

function validMail()
{
    var mail = document.getElementById('email');
    var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mail.value.match(reg)) {
      correct(mail);
      return true;
    }
    incorrect(mail);
    return false;

}
function validUserName()
{
    var uname = document.getElementById('Uname');

    if (uname.value.length<6) {
      incorrect(uname);
      return false;
    }
    correct(uname);
    return true;

}
function ValidPassword()
{
    var pass = document.getElementById('password');
    var reg = /(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).{8,}/;

    if (pass.value.match(reg)) {
      correct(pass);
      return true;
    }
    incorrect(pass);
    return false;

}

function confirmPassword()
{
    var pass = document.getElementById('password');
    var cpass = document.getElementById('cPassword');
    // var reg = /(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).{8,}/;
    // if(cpass.value.match(reg))
    // {
    //     console.log("ami ekhane");
    //     if (pass.value == cpass.value)
    //     {
    //         correct(cpass);
    //     }
    //     else
    //     {
    //         incorrect(cpass);
    //
    //     }
    //
    // }
    // else{
    //     incorrect(cpass);
    // }
    //pass.value == cpass.value ? correct(cpass):incorrect(cpass);
    var reg = /(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).{8,}/;


    if (cpass.value == pass.value && cpass.value.length>7 ) {
      correct(cpass);
      return true;
    }
    incorrect(cpass);
    return false;

}



function incorrect(x)
{
    x.style.border="solid 3px red";
    //return false;
    status = false;
}
function correct(x)
{
    x.style.border="solid 3px green";
    //return true;
    status = true;
}
