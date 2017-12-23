var firstName;
var lastName;
var day;
var month;
var year;

var gender;
var fld;

function valid() {

  firstName = document.getElementById('firstName');
  lastName = document.getElementById('lastName');
  day = document.getElementById('day').options[document.getElementById('day').selectedIndex].value;
  month = document.getElementById('month').options[document.getElementById('month').selectedIndex].value;
  year = document.getElementById('year').options[document.getElementById('year').selectedIndex].value;

  gender = document.getElementsByName('Gender');

  fld = document.getElementById('phone');
  if (validateDate()) {
    if (validateLastName()) {
      if (validateFirstName()) {
        if (validateGender()) {
          if (validatePhone()) {
            return true;
          }
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

function validateDate() {
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
  if (month==1 || month>2)
  {
    if (day>ListofDays[month-1])
    {
      alert('Invalid date format!');
      return false;
    }
  }
  if (month == 0 || day == 0 || year == 0) {
    return false;
  }
  if (month==2)
  {
    var lyear = false;
    if ( (!(year % 4) && year % 100) || !(year % 400))
    {
      lyear = true;
    }
    if ((lyear==false) && (day>=29))
    {
      alert('Invalid date format!');
      return false;
    }
    if ((lyear==true) && (day>29))
    {
      alert('Invalid date format!');
      return false;
    }
  }
  return true;
}
function validateGender() {
  var i = 0;
  while (i < gender.length) {
      if (gender[i].checked){
        return true;
      }
      i++;
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
