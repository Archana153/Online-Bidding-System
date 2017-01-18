<?php
session_start();
include('first.php');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="future_auctions.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="popup.css">
<link rel="stylesheet" type="text/css" href="reg.css">
<link rel="stylesheet" type="text/css" href="edit_profile.css">
  <script type="text/javascript">var _siteRoot='home.html',_root='home.html';</script>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="scripts.js"></script>
<script src="stuHover.js" type="text/javascript"></script>
<script type="text/javascript" src="log.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="register.js"></script>	
  <style>
  body
  {

  }
  #d200
  {
	margin-top:40px;
	}
	#d3
	{
		margin-top:300px;
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
<header style="width=100%;background:black;height:100px;margin-top:-50px;margin-left:-10px;margin-right:-10px;"> 

		
		<p style="color:white; margin-left:160px;margin-top:50px;font-size:50px;">Auction World</p>
		<a style=" float:right;margin-top:-40px;margin-right:60px; color:white"href="about_us.html">About us</a>
		
		<?php 
		$tap=$_SESSION['Username'];
$result = mysqli_query("SELECT Username FROM user WHERE Username='$tap'");
if (!(isset($_SESSION['Username']) && $_SESSION['Username'] != '')) {

?>
<a style=" float:right; margin-top:-80px; margin-right:150px;color:white;" href="register_bidding.php">Register</a>
<a style=" float:right; margin-top:-60px; margin-right:130px;color:white; font-size:20px;" href="Websearch1.php">   Search</a>
<a style=" float:right; margin-top:-80px; margin-right:210px;color:white;" href="#login-box" class="login-window">Login</a>
		<?php include_once("log.php");  ?>
		
<?php
	}
	else
	{
//$row=mysqli_fetch_assoc($result);
?>
<a style=" float:right; margin-top:-40px; margin-right:220px;color:white;" href="user_profile.php"><?php echo $tap;?></a>
<a style=" float:right; margin-top:-40px; margin-right:170px;color:white;" href="logout_bidding.php">Logout</a>
<a style=" float:right; margin-top:-20px; margin-right:130px;color:white; font-size:20px;" href="Websearch1.php">   Search</a>

	<?php
		}
		?>

</header>
<span class="preload1"></span>
<span class="preload2"></span>
<ul id="nav">
	<li class="top"><a href="home.php" class="top_link"><span>Home</span></a></li>
	<li class="top"><a href="#nogo2" id="liveauction" class="top_link"><span class="down">Live Auctions</span></a>
		<ul class="sub">
			<li><a href="live_auctions_electronics.php">Electronics</a></li>
			<li><a href="#nogo24">Books</a></li>
			<li><a href="#nogo25">Antiques</a></li>
			<li><a href="#nogo26">Entertainment</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo3" id="futureauction" class="top_link"><span class="down">Future Auctions</span></a>
		<ul class="sub">
			<li><a href="future_auctions_electronics.php">Electronics</a></li>
			<li><a href="future_auctions_books.php">Books</a></li>
			<li><a href="future_auctions_antiques.php">Antiques</a></li>
			<li><a href="future_auctions_entertainment.php">Entertainment</a></li>
			
		</ul>
	</li>
	<li class="top"><a href="closed_auctions.php" class="top_link"><span>Closed Auctions</span></a></li>
	<li class="top"><a href="#nogo5" class="top_link"><span>Contact Us</span></a></li>
	<li class="top"><a href="news.html" class="top_link"><span>News</span></a></li>
</ul>
<div style="height:1000px;width:72.6%;margin-left:180px;background:white; margin-right:180px">
<?php
$r=mysqli_query("select Username, Fname, Lname,DOB,Phone_no,city,email from user where Username='$tap'");
$row1=mysqli_fetch_assoc($r);
?>
<div style="margin-left:350px; background:white; width:500px;">
<br>
<br>
<p style="margin-left:40px; font-size:20px; color:blue;" >Username: &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <?php echo $row1['Username'];?></p>
<p style="margin-left:40px; font-size:20px; color:blue;" >Name: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row1['Fname'] . " " . $row1['Lname'];?></p>
<p style="margin-left:40px; font-size:20px; color:blue;" >DOB: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row1['DOB'];?></p>
<p style="margin-left:40px; font-size:20px; color:blue;" >Contact Number: &nbsp &nbsp <?php echo $row1['Phone_no'];?></p>
<p style="margin-left:40px; font-size:20px; color:blue;" >City: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row1['city'];?></p>
<p style="margin-left:40px; font-size:20px; color:blue;" >Email Address: &nbsp &nbsp &nbsp <?php echo $row1['email'];?></p><br>
<form method="Post" action="./edit_profile.php" >
<button type="submit" name="submit" style="margin-left:80px; margin-right:auto; padding: 10px 15px; background: #4479BA; color: #FFF; border-radius: 8px; " >Edit Profile</button>
</form>
<br>
<form method="Post" action="./change_password.php" >
<button type="submit" name="submit" style="margin-left:80px; margin-right:auto; padding: 10px 15px; background: #4479BA; color: #FFF; border-radius: 8px; " >Change Password</button>
</form>
</div>
</div>
	<hr id="d3" style="margin-left:180px;" width="70%;" >
<div id="d200">
</br>
<table class="tablestyle">
<tr>
<td><a id="r1" href="terms_and_conditions.html" >Terms and conditions</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="Refund_policy.html">Refund policy</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="about_us.html">About us</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="privacy_policy.html">Privacy policy</a></td>
<td></td>
<td></td>
<td></td>
<td><a id="r1" href="">How it works</a></td>

</tr>

</table>
</br>
<div id="footer" style="clear:both;text-align:center;">
	Copyright @Prerna,Archana,Apurva</div>
</div>
	</body>
	</html>
	<?php
	
	mysqli_close($bd);
	?>