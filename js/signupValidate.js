
function validSignUp()
{

}



function validMailInput()
{
    validMail()? correct(this) : incorrect(this);
}




function validMail()
{
    var mail = document.getElementById('email');
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value))
        return  true;
    return false;


}
function validUserName()
{
    var uname = document.getElementById('Uname');
    if(uname.value.length<6)
    {
        incorrect(this);
        return  false;
    }
    return true;

}
function ValidPassword()
{


}
function confirmPasswordMatched()
{

}



function incorrect(x)
{
    x.style.border="solid 3px red";
}
function correct(x)
{
    x.style.border="solid 3px green";
}
