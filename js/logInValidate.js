
var uname = document.getElementById('uname');
var pass = document.getElementById('pass');

function validForm()
{
    if(uname.value.length<6)
    {
        if(pass.value.length<8)
        {
            alert("userName and password not valid");
            uname.focus();
            incorrect(uname);
            pass.focus();
            incorrect(pass);
            return false;

        }
        alert("username not valid");
        uname.focus();
        incorrect(uname);
        pass.focus();
        correct(pass);
        return false;


    }
    else
    {
        if(pass.value.length<8)
        {
            alert("password not valid");
            uname.focus();
            correct(uname);
            pass.focus();
            incorrect(pass);
            return false;

        }
        return true;


    }

}


function userNameValid()
{
    uname.value.length<6?incorrect(uname): correct(uname);

}
function passwordValid()
{
    pass.value.length<8 ? incorrect(pass):correct(pass);

}

function incorrect(x)
{
    x.style.border="solid 3px red";
}
function correct(x)
{
    x.style.border="solid 3px green";
}
