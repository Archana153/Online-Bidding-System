
function validate()
{

	var userName= document.getElementsByName("uname").item(0);
	var pass1= document.getElementsByName("pw2").item(0);
	var pass2= document.getElementsByName("pw3").item(0);
    var flg = 0;


	if(showUsernameHint(userName.value))  
	{	  
	
		if(showPasswordHint(pass1.value))  
		{	  

			if(showConfirmPasswordHint(pass2.value))  
			{
				
							
							
							flg=1;	
							
						 	
			}   
		}  
	}   
  
if(flg==0)
{
	alert("Please fill all the compulsory fields and(or) rectify the errors");  
	return false;  
}


var flag = 0;

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






