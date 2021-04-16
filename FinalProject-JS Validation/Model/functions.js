function validateAddProduct() {
	var name = document.forms["addProduct"]["name"].value;
	var price = document.forms["addProduct"]["price"].value;
	var stock = document.forms["addProduct"]["stock"].value;

	if(name == "" || stock == "" || price == "") {
		alert("Null");
		return false;
	}

	else 
	{
		for(i=0; i<name.length; i++) {
			if(!(name[i] <= 'Z' && name[i] >= 'A' || name[i] <= 'z' && name[i] >= 'a'))
				alert("Name can only be alphabetical");
		}
	}
}



function validateAddUser() {
	var name = document.forms["addUser"]["name"].value;
	var username = document.forms["addUser"]["username"].value;
	var password = document.forms["addUser"]["password"].value;
	var email = document.forms["addUser"]["email"].value;
	var type = document.forms["addUser"]["type"].value;

	if(name == "" || username == "" || password == "" || email == "" || type == "") {
		alert("Null");
		return false;
	}

	else 
	{
		for(i=0; i<name.length; i++) {
			if(!(name[i] <= 'Z' && name[i] >= 'A' || name[i] <= 'z' && name[i] >= 'a'))
				alert("Name can only be alphabetical");
		}

		for (i = 0; i < username.length; i++) {
			if(!(username[i] <= 'Z' && username[i] >= 'A' || username[i] <= 'z' && username[i] >= 'a' && username[i] >= '9' || username[i] >= '0'))
			{
				alert("Username can only be alphanumerical!");
				//break;
			}
		}

		var symbol = false;
		var period = false;
		var symbolLocation = 0;
		var periodLocation = 0;

		for (i = 0; i < email.length; i++) {
			if(email[i] == '@')
			{
				symbol = true;
				symbolLocation = i;
			}

			if(email[i] == '.')
			{
				period = true;
				periodLocation = i;
			}

		}

		if(!(symbol == true && period == true && symbolLocation < periodLocation))
				alert("Invalid Email!");

		


	}
}

function validateRegistration() {
	var name = document.forms["addUser"]["name"].value;
	var username = document.forms["addUser"]["username"].value;
	var password = document.forms["addUser"]["pass"].value;
	var repass = document.forms["addUser"]["repass"].value;
	var email = document.forms["addUser"]["email"].value;
	var type = document.forms["addUser"]["type"].value;

	if(name == "" || username == "" || password == "" || email == "" || type == "") {
		alert("Null");
		return false;
	}

	if(password != repass)
		alert("Password and confirm password mismatch");

	else 
	{
		for(i=0; i<name.length; i++) {
			if(!(name[i] <= 'Z' && name[i] >= 'A' || name[i] <= 'z' && name[i] >= 'a'))
				alert("Name can only be alphabetical");
		}

		for (i = 0; i < username.length; i++) {
			if(!(username[i] <= 'Z' && username[i] >= 'A' || username[i] <= 'z' && username[i] >= 'a' && username[i] >= '9' || username[i] >= '0'))
			{
				alert("Username can only be alphanumerical!");
				//break;
			}
		}

		var symbol = false;
		var period = false;
		var symbolLocation = 0;
		var periodLocation = 0;

		for (i = 0; i < email.length; i++) {
			if(email[i] == '@')
			{
				symbol = true;
				symbolLocation = i;
			}

			if(email[i] == '.')
			{
				period = true;
				periodLocation = i;
			}

		}

		if(!(symbol == true && period == true && symbolLocation < periodLocation))
				alert("Invalid Email!");

		
		// if(password != repass)
		// 	alert("Password and confirm password mismatch!");

	}
}

