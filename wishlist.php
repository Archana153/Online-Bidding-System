<?php
session_start();
include('first.php');
global $conn;
$tap=$_SESSION['Username'];
$s=mysqli_query($conn, "SELECT i.Actual_price, i.Category, i.Details, i.End_date, i.End_time, i.Item_display, i.Item_id, i.Item_name, i.Starting_Price, i.starting_time, i.Start_date, i.is_deleted, u.Username from item i, user u, wishlist w where w.Username = u.Username AND w.Username = '$tap' AND i.Item_id = w.Item_ids;" );

	
?>


<html>
<title>Closed Auctions</title>
<head>
<link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="future_auctions.css">
<link rel="stylesheet" type="text/css" href="closed_auctions.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="popup.css">
<link rel="stylesheet" type="text/css" href="password.css">
<link rel="stylesheet" type="text/css" href="reg.css">
  <script type="text/javascript">var _siteRoot='home.php',_root='home.php';</script>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="scripts.js"></script>
<script src="stuHover.js" type="text/javascript"></script>
<script type="text/javascript" src="log.js"></script>
<script type="text/javascript" src="forgot_password.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="register.js"></script>	
 <style>
  body
  {

  }
  #nn
  {
	margin-left:50%;
	
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
	
$result = mysqli_query($conn,"SELECT Username FROM user WHERE Username='$tap'");
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
$row=mysqli_fetch_assoc($result);
?>

<a style=" float:right; margin-top:-40px; margin-right:220px;color:white;" href="user_profile.php"><?php echo $row['Username'];?></a>
<a style=" float:right; margin-top:-40px; margin-right:80px;color:white;" href="logout_bidding.php">Logout</a>
<a style=" float:right; margin-top:-40px; margin-right:150px;color:white;" href="history.php">History</a>
<a style=" float:right; margin-top:-10px; margin-right:130px;color:white; font-size:30px;" href="Websearch1.php">   Search</a>

	<?php
		}
		?>

	</header>
</head>
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
<div id="d3">
<table border="1" id="closed" cellspacing="0" cellpadding="5" width="980px">
<tr>
	<th colspan="4">Wishlist</th>
</tr>
</table>
<table border="1" id="closed" cellspacing="15" cellpadding="5" width="980px"> 
		
		<?php
		loop12:
		while ($row = mysqli_fetch_array($s)) {
			
		?>
		<tr>

		<td>
		<?php
		$curdate=date('Y-m-d');
		$curtime=date('h-m-s');
		if(($row["End_date"])<$curdate&&($row["End_time"]<$curtime))
		{
			?>
			<p> <?php    echo $row["Item_name"]; ?> </p> 
		<img src="<?php echo $row["Item_display"]; ?>"  width="130" height="130" />
		<p id="p1"> MRP: <?php echo $row["Actual_price"]; ?> </p>
		<p id="p1"> Starting price: <?php echo $row["Starting_price"]; ?> </p>
		<p id="p1"> Auction date: <?php echo $row["Start_date"] ." ". "to" ." ". $row["End_date"]; ?> </p>
		<p id="p1"> Auction time: <?php echo $row["starting_time"] ." ". "to" ." ". $row["End_time"]; ?> </p>
		<p id="p1" style="color:red;"> Sorry, bidding of this item is already over.</p>
		<?php
		}
		else if($row["is_deleted"]=='Y')
		{
			?>
			<p> <?php    echo $row["Item_name"]; ?> </p> 
		<img src="<?php echo $row["Item_display"]; ?>"  width="130" height="130" />
		<p id="p1"> MRP: <?php echo $row["Actual_price"]; ?> </p>
		<p id="p1"> Starting price: <?php echo $row["Starting_price"]; ?> </p>
		<p id="p1"> Auction date: <?php echo $row["Start_date"] ." ". "to" ." ". $row["End_date"]; ?> </p>
		<p id="p1"> Auction time: <?php echo $row["starting_time"] ." ". "to" ." ". $row["End_time"]; ?> </p>
		<p id="p1" style="color:red;"> Sorry, this item has been removed from the catalog.</p>
		<?php
	}
		else
		{
			?>
			<p> <?php    echo $row["Item_name"]; ?> </p> 
		<img src="<?php echo $row["Item_display"]; ?>"  width="130" height="130" />
		<p id="p1"> MRP: <?php echo $row["Actual_price"]; ?> </p>
		<p id="p1"> Starting price: <?php echo $row["Starting_price"]; ?> </p>
		<p id="p1"> Auction date: <?php echo $row["Start_date"] ." ". "to" ." ". $row["End_date"]; ?> </p>
		<p id="p1"> Auction time: <?php echo $row["starting_time"] ." ". "to" ." ". $row["End_time"]; ?> </p>
		<?php
		}

		?>

		</td>
		</tr>
		<?php
	
	}
	?>

</table>
</div>
</body>
<br>


</div>
<hr style="margin-left:180px;" width="70%;" >
	
<div id="d2">
</br>
<table class="tablestyle">
<tr>
<td><a id="r1" href="terms_and_conditions.php" >Terms and conditions</a></td>
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


</tr>
</table>
</div>
</br>


</html>
<?php
end:	
  mysqli_close($bd);
?>