function validPost()
{
    var place = document.getElementById('placeselected').value;
    if(place=="false"){
        return false;
        alert("dhurr");
    }

    var title = document.getElementById('title').value.trim().length;
    if(title <=0)
        return false;
    var details = document.getElementById('details').value.trim().length;
    if(details <= 0)
        return false;
    return true;
}

function test() {
    document.getElementById('placeselected').value = "true";
}







//title
//details
//location
//date
