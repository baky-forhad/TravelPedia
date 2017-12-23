
var firstName;
var lastName;
var email;


var fld;

function valid() {

  firstName = document.getElementById('firstName');
  lastName = document.getElementById('lastName');
  email = document.getElementById('email');
  fld = document.getElementById('phone');
  if (validateEmail()) {
    if (validateLastName()) {
      if (validateFirstName()) {

        if (validatePhone()) {
          return true;
        }

      }
    }
  }
  //alert(day);
  return false;

}

function validateFirstName() {
  if(firstName.value.trim().length<3){
    return false;
  }
  return true;
}

function validateLastName() {
  if(lastName.value.trim().length<3){
    return false;
  }
  return true;
}

function validateEmail() {
  var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value.match(reg) ) {
    return true;
  }
  return false;
}


function validatePhone() {

            if (fld.value.trim() == "") {
                alert("You didn't enter number.");
                fld.value = "";
                fld.focus();
                return false;
            }

            var mySplitResult = fld.value.substring(0, 2);

            if (mySplitResult != "01") {
                alert("Not in correct format");
                fld.value = "";
                fld.focus();
                return false;
            }
            if (isNaN(fld.value)) {
                alert("number contains illegal characters.");
                fld.value = "";
                fld.focus();
                return false;
            }
            if (!(fld.value.length == 11)) {
                alert("number is the wrong length. \nPlease enter 11 digit mobile no.");
                fld.value = "";
                fld.focus();
                return false;
            }
            return true;
        }
