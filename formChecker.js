function validateForm() {

	var pass = document.forms["myForm"]["pass"].value;
	var q1 = document.forms["myForm"]["item1"].value;
	var q2 = document.forms["myForm"]["item2"].value;
	var q3 = document.forms["myForm"]["item3"].value;
	var user = document.form["myForm"]["user"].value;

	if (pass == null || pass == "") {
		alert("Password field must be filled out");
		return false;
     }
	else if (user == null || user == "") {
		alert("Username field must be filled out");
		return false;
     }
	else if(q1 < 0 || q2 < 0 || q3 < 0 || q1 == null || q2 == null || q3 == null){
		alert("Please choose a valid amount of items");
		return false;
	}
	else if(!(validateEmail(user))){
		alert("Please enter a valid email for your username");
		return false;
	}
	else if(!(validateRadio (document.forms["survey1"]["q1"]))){
		alert("Please choose a shipping option");
		return false;
	}
	else{
		return true;
	}

}




function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}




function validateRadio (radios)
{
    for (i = 0; i < radios.length; ++ i)
    {
        if (radios [i].checked) return true;
    }
    return false;
}

