function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


function Validation()
{   
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if((password==null || password=="") || (!validateEmail(email)))
    {
        alert ("Your informations is wrong");
        return false;
    }
    return true;
}