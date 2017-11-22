function validSignUp()
{
    return false;

}

function validMail()
{
    var mail = document.getElementById('email');
    var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    mail.value.match(reg) ? correct(mail):incorrect(mail);

}
function validUserName()
{
    var uname = document.getElementById('Uname');
    uname.value.length<6?incorrect(uname):correct(uname);

}
function ValidPassword()
{
    var pass = document.getElementById('password');
    var reg = /(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).{8,}/;
    pass.value.match(reg)?correct(pass):incorrect(pass);

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
    cpass.value == pass.value ?correct(cpass):incorrect(cpass);

}



function incorrect(x)
{
    x.style.border="solid 3px red";
}
function correct(x)
{
    x.style.border="solid 3px green";
}
