
function validate()
{

	var userName= document.getElementsByName("uname").item(0);
	var pass1= document.getElementsByName("pw1").item(0);
	var pass2= document.getElementsByName("pw2").item(0);
	var mobileno=document.getElementsByName("mobile").item(0);
	var emailadd=document.getElementsByName("email").item(0);
	var name=document.getElementsByName("fname").item(0);
    var flg = 0;


//document.write(showUsernameHint(userName.value));


	if(showUsernameHint(userName.value))  
	{	  
	
		if(showPasswordHint(pass1.value))  
		{	  

			if(showConfirmPasswordHint(pass2.value))  
			{
				
			 	if(showEmailHint(emailadd.value))  
				{
					
					if(showContactNoHint(mobileno.value))
					{
						if(showfirstnameHint(name.value))
						{
						
							
							
							flg=1;	
								
								
						}	
						
					}
				}  	
			}   
		}  
	}   
  
if(flg==0)
{
	alert("Please fill all the compulsory fields and(or) rectify the errors");  
	return false;  
}


var flag = 0;
if(document.getElementById("terms").checked)
{
	flag ++;
}
if (flag != 1) 
{
	alert ("You must agree on the terms and conditions!");
	return false;
}
}		



/*

	if(userName=="")
	{
		alert("Please enter the user name");	
		thisform.uname.focus();
		return false;
	}	
	if(userName.length<6)
	{
		alert("User name must be of atleast six characters");	
		thisform.uname.focus();
		return false;
	}
	if(pass1=="")
	{
		alert("Please enter the password");	
		thisform.pw1.focus();
		return false;
	}
	if(pass1.length<6)
	{
		alert("Password must contain atleast 8 digits");	
		thisform.pw1.focus();
		return false;
	}
	if(pass2=="")
	{
		alert("Please enter the confirm password");	
		thisform.pw2.focus();
		return false;
	}
	if(pass2.length<6)
	{
		alert("Confirm password must contain atleast 8 digits");	
		thisform.pw2.focus();
		return false;
	}
	if(pass1.length>=6 && pass2.length>=6 )
	{
		if(pass1!=pass2)
		{
				alert("Password mismatched! enter the correct password!");	
				return false;
		}
	}
	if(mobileno.length<10 || mobileno.length>10)
	{
		alert("Mobile number must be of length 10");
		thisform.mobile.focus();
		return false;
	}
	if(isNaN(mobileno))
	{
		alert("It’s not a valid mobile number");
		thisform.num.focus();
		return false;
	}	
	if(emailadd=="")
	{
		alert("Please enter the email address");	
		thisform.email.focus();
		return false;
	}
	if(name=="")
	{
		alert("Please enter the first name");	
		thisform.fname.focus();
		return false;
	}
		
	
	var flag = 0;
	if(document.thisform("terms").checked){
flag ++;
}
if (flag != 1) {
alert ("You must check one and only one checkbox!");
return false;
}

	return true;
	
}*/
function showPasswordHint(str)  
{  
	var passid_len = str.length;  
	if (passid_len == 0)  
	{  
		document.getElementById("passwordHint").innerHTML="";  
		return false;  
	}  
	if(passid_len > 12 || passid_len < 6)
	{
		document.getElementById("passwordHint").innerHTML="Invalid Password length";  
		return false;
	}
	else
	{
		document.getElementById("passwordHint").innerHTML="";  
		return true;
	}
	return true;
}


function showConfirmPasswordHint(str)  
{  
	var passid_len = str.length;  
	if (passid_len == 0)  
	{  
		document.getElementById("confirmPasswordHint").innerHTML="";  
		return false;  
	}  
	
	var passid=document.getElementsByName('pw1').item(0).value;
	if((passid!=str))
	{
		document.getElementById("confirmPasswordHint").innerHTML="Passwords don't match";  
		return false;  
	}
	
	else
	{
		document.getElementById("confirmPasswordHint").innerHTML="";  
		return true;
	}
	return true;
}


function showUsernameHint(str)  
{  
	var username_len = str.length;  
	if (username_len == 0)  
	{  
		document.getElementById("usernameHint").innerHTML="";  
		return false;  
	}  
	if(username_len > 12 || username_len < 6)
	{
		document.getElementById("usernameHint").innerHTML="Invalid Username length";  
		return false;
	}
	else
	{
		document.getElementById("usernameHint").innerHTML="";  
		return true;
	}
	return true;
}



function showEmailHint(str)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(str.length==0)
	{
	document.getElementById("emailHint").innerHTML="";
	return false;
	}
	if(str.match(mailformat))  
	{  
	document.getElementById("emailHint").innerHTML="";
	return true;  
	}  
	else  
	{  
	document.getElementById("emailHint").innerHTML="invalid email address";  
	return false;
	}  
}

function showContactNoHint(str)
{
	var contactno_len = str.length;
	var numbers = /^[0-9]+$/;  
	if(str.length==0)
	{
	document.getElementById("contactNoHint").innerHTML="";
	return true;
	}
	if(!str.match(numbers))  
	{  
	document.getElementById("contactNoHint").innerHTML="Only digits allowed";
	return false;  
	}  
	if(contactno_len < 10)
	{
		document.getElementById("contactNoHint").innerHTML="Invalid contact no. length";  
		return false;
	}
	else  
	{  
	document.getElementById("contactNoHint").innerHTML="";  
	return true; 
	}
}

function showfirstnameHint(str)
{
	var numbers = /^[a-z]+$/;  
	if(str.length==0)
	{
	document.getElementById("firstnameHint").innerHTML="";
	return true;
	}
	if(!str.match(numbers))  
	{  
	document.getElementById("firstnameHint").innerHTML="Only letters allowed";
	return false;  
	}  
	else  
	{  
	document.getElementById("firstnameHint").innerHTML="";  
	return true; 
	}
}


