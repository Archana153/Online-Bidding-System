
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
	var numbers = /^[A-Za-z0-9 ]{3,20}$/;  
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


