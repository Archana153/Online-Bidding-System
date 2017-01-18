<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="register.css">

<body>
<link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="future_auctions.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <script type="text/javascript">var _siteRoot='home.php',_root='home.php';</script>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="scripts.js"></script>
<script src="stuHover.js" type="text/javascript"></script>
<script src="validate.js" type="text/javascript"></script>
<script type="text/javascript">
 function checkname()
    {
  
     var name=document.getElementById( "i0" ).value;

  
     
          $.ajax({
         type: 'post',
         url: 'username_checker.php',
         data: {
         user_name:name,
         },
         success: function (response) {
         $( '#usernameHint' ).html(response);
                if(response=="OK")  
                  {
                     return true; 
                  }
                  else
                  {
                    
                     return false;  
                  }
                }
          });

      }
  
     
</script>
 <style>
  body
  {

  }
  .logo
  {
  	
  	margin-top:3px;
  	padding:0px;
  	float:left;
  }
  .search_icon
  {
  	position:absolute;
  	right:20px;
  	top:50px;
  	background:url(images/search_icon.png) left top no-repeat;
  	width:18px;
  	z-index:10;
  	height:22px;
  	display:block;
  	border:0;
  	cursor:pointer;
    
  }
  .button_style
  {
    width:100px;height:40px; 
  }
</style>
</head>
<body style="background:url(images/bg.jpg);background-size:cover; ">
<header style="width=100%;background:black;height:100px;margin-top:-30px;margin-left:-10px;margin-right:-10px;"> 

		
		  <p style="color:white; margin-left:160px;margin-top:30px;font-size:50px;">Auction World</p>
     
   
	<?php
   if (!(isset($_SESSION['Username']) && $_SESSION['Username'] != '')) {

?>


<a style=" float:right; margin-top:-40px; margin-right:190px;color:white; font-size:20px;" href="#login-box" class="login-window">Login</a>
		<?php include_once("log.php");  
    global $conn;

	}
	else
	{

$tap=$_SESSION['Username'];
$result = mysqli_query($conn,"SELECT Username FROM user WHERE Username='$tap'");
$row=mysqli_fetch_assoc($result);
?>
<a style=" float:right; margin-top:-20px; margin-right:220px;color:white;" href="user_profile.php"><?php echo $row['Username'];?></a>
<a style=" float:right; margin-top:-20px; margin-right:170px;color:white;" href="logout_bidding.php">Logout</a>

	<?php
		}
		?>

   <a style=" float:right; margin-top:-10px; margin-right:110px;color:white; font-size:25px;" href="Websearch1.php">   Search</a>

	</header>
</head>
<body>
<span class="preload1"></span>
<span class="preload2"></span>
<ul id="nav">
	<li class="top"><a href="home.php" class="top_link"><span>Home</span></a></li>
	<li class="top"><a href="#nogo2" id="liveauction" class="top_link"><span class="down">Live Auctions</span></a>
		<ul class="sub">
			<li><a href="live_auctions_electronics.php">Electronics</a></li>
			<li><a href="live_auctions_books.php">Books</a></li>
			<li><a href="live_auctions_antiques.php">Antiques</a></li>
			<li><a href="live_auctions_entertainment.php">Entertainment</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo3" id="liveauction" class="top_link"><span class="down">Future Auctions</span></a>
		<ul class="sub">
			<li><a href="future_auctions_electronics.php">Electronics</a></li>
			<li><a href="future_auctions_books.php">Books</a></li>
			<li><a href="future_auctions_antiques.php">Antiques</a></li>
			<li><a href="future_auctions_entertainment.php">Entertainment</a></li>
		</ul>
	</li>
	<li class="top"><a href="closed_auctions.php" class="top_link"><span>Closed Auctions</span></a></li>
	<li class="top"><a href="contact.php" class="top_link"><span>Contact Us</span></a></li>
	<li class="top"><a href="news.php" class="top_link"><span>News</span></a></li>
</ul>



</head>
<body>
<div id="d15">
</br>
<h1 style="margin-left:50px;">New User?</br>Create a free Account</br></h1></br>
<p id="p11"><b>Login Details</b></p></br>


<form  method="Post" action="./reg_insert.php" onSubmit="return validate();" >
<p id="p100" >User Name* <INPUT id="i0" type="text" height="30" width="100" name="uname" onKeyUp="showUsernameHint(this.value); checkname()"> <span style="color:#F00">*</span><span id="usernameHint"></span></p>

<p id="p2"> Password* <INPUT id="i1" type="password" name="pw1" onKeyUp="showPasswordHint(this.value)"/> <span style="color:#F00">*</span><span id="passwordHint"></span></p>
</br>
<p id="p100" >Confirm Password* <INPUT id="i2" type="password" name="pw2" onKeyUp="showConfirmPasswordHint(this.value)"/> <span style="color:#F00">*</span><span id="confirmPasswordHint"></span><BR/></p>
</br>
<p id="p11"><b>Personal Details</b></p>
</br>
<p id="p100" >First Name* <input id="i0" type="text" name="fname" onKeyUp="showfirstnameHint(this.value)" /><span style="color:#F00">*</span><span id="firstnameHint"></span></p>
<p id="p2">Last Name <input id="i3" type="text" name="lname"/></p></br>
<p id="p100" >Email Address*<input id="i4" type="text" name="email" onKeyUp="showEmailHint(this.value)"/><span style="color:#F00">*</span><span id="emailHint"></span></p></br>
<p id="p40">Mobile Number*<input id="i5" type="text" name="mobile" onKeyUp="showContactNoHint(this.value)"/><span style="color:#F00">*</span><span id="contactNoHint"></span></p></br>
<p id="p100" >Date of Birth<input id="i7" type="date" name="dob"/></p>
<p id="p2">City <input id="i6" type="text" name="city"/></p></br>
<p id="p100" > <input type="checkbox" name="terms" value="terms" id="terms" > &nbsp I agree to terms and conditions.</br></p>
</br>
            <button type="submit" name="submit" style="margin-left:80px; margin-right:auto; " >Submit</button>

</br>
</br>
</form>
</div>
</br>
</br>
<div id="d2">
<table class="tablestyle">
<tr>
<td><a id="r1" href="terms_and_conditions.php">Terms and conditions</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="Refund_policy.php">Refund policy</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="about_us.php">About us</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="privacy_policy.php">Privacy policy</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="">How it works</a></td>

</tr>

</table>
</body>
</html>
