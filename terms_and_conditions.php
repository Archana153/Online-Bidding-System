 <?php
session_start();
?>
 <!DOCTYPE html>
<html>
<head>
<title>terms and conditions</title>
<link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="future_auctions.css">
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
		$tap=$_SESSION['Username'];
$result = mysqli_query("SELECT Username FROM user WHERE Username='$tap'");
if (!(isset($_SESSION['Username']) && $_SESSION['Username'] != '')) {

?>
<a style=" float:right; margin-top:-40px; margin-right:120px;color:white; font-size:20px;" href="register_bidding.php">Register</a>
<a style=" float:right; margin-top:-10px; margin-right:130px;color:white; font-size:25px;" href="Websearch1.php">   Search</a>
<a style=" float:right; margin-top:-40px; margin-right:50px;color:white; font-size:20px;" href="#login-box" class="login-window">Login</a>
		<?php include_once("log.php");  ?>
		
<?php
	}
	else
	{
//$row=mysqli_fetch_assoc($result);
?>
<a style=" float:right; margin-top:-40px; margin-right:220px;color:white;" href="user_profile.php"><?php echo $tap;?></a>
<a style=" float:right; margin-top:-40px; margin-right:120px;color:white;" href="logout_bidding.php">Logout</a>
<a style=" float:right; margin-top:-40px; margin-right:170px;color:white;" href="history.php">History</a>
<a style=" float:right; margin-top:-40px; margin-right:60px;color:white;" href="wishlist.php">Wishlist</a>
<a style=" float:right; margin-top:-20px; margin-right:130px;color:white; font-size:20px;" href="Websearch1.php">   Search</a>

	<?php
		}
		?>

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
	<li class="top"><a href="#nogo3" id="futureauction" class="top_link"><span class="down">Future Auctions</span></a>
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
<div>


 <div style="margin-left:180px;margin-right:180px;width:77%;">
 
<h3>Terms and Conditions</h3>
Welcome to AuctionWorld. As you register and bid on an item, you are assumed to agree on the below mentioned Terms and Conditions. Please go through the following 

terms and conditions for a transparent bidding experience-</br>
<h3>Conditions of Bid</h3>
The Bid starts at a price decided by the administrator.</br>
The admin can surprise the consumers and pre close the auction and declare the winner at that moment with the maximum number of bids.</br>
</br>
 
Despite the highest level of care taken, the company will not be held responsible for any error occurring in the item detail.</br>
It is the user's responsibility to carefully read the product description and product title before making a bid.</br>
We have a discretion to withdraw from the sale of item in the following cases-</br>
If you are not directly contacted by us through email stating that you are the winning bidder.</br>
If there is a technical error on the site which is out of our control.</br>
If you are found guilty of indulging in any fraudulent or inconsistent behaviour with the terms and conditions mentioned in the site.</br>
If we are unable to reach you due to any reason.</br>

<h3>Payment</h3>
Payment is done at the time of delivery.</br>
</br>
<h3>Shipping and Delivery</h3>
The goods will be delivered within 15 days of your being declared as the winner.</br>
In case of returns/cancellation, the shipping expenses will be paid by user (but not in the case of faulty goods).</br>
All items will be delivered at your doorstep as per the address mentioned during registration.</br>
AuctionWorld is not directly responsible for any loss, pilferage or breakage of goods while in transit.</br>
We will also arrange for the transit insurance at an additional cost which would be borne by us.</br>
We will take all steps necessary to resolve any issues arising.</br>
We will acquaint you with the delivery status and will keep a follow-up.</br>
</br>
<h3>Bidding and Buying</h3>
You are requested to clearly understand the payment and delivery terms.</br>
A person with the maximum number of bids will be declared winner at the time of closure of the auction.</br>
A registered customer can bid at any number of available products on the website.</br>
In case there are two or more bidders with the similar number of highest bids at the time of the closure of the auction, the customer who was the first to bid the 

maximum, wins.</br>
The bid meter does not increase with the same value of the purchased bid amount. The same increases at a fixed amount pre defined by the admin for each product.</br>
Free bids are given to registered users at the sole discretion of the admin.</br>
Free bids are also allocated as per the package opted by the user and is mentioned clearly with all details before purchasing the same.</br>
</br>
<h3>Items Withdrawn from Sale</h3>
AuctionWorld has discretion to withdraw any item from sale without a prior notice. This action will only be done if the company finds it necessary. In such case, the 

company will not assume any liability or obligation to the users. If any customer has any bids till then, it will be refunded back to them.</br>
</br>
<h3>Interference with site</h3>
The user is requested not to alter, change, modify, copy or reproduce the content displayed on our site without our written permission. Doing this calls for a legal 

action.</br>
</br>

<h3>Processing and Technical Errors</h3>
In case of any unforeseen technical errors on our site which is beyond our control, the company has right to-</br>
decide to extend auction time for a relevant period of time.</br>
decide to re-open an online auction for a particular period of time.</br>
decide to make void the entire online auction transaction and start afresh.</br>
</br>
<h3>Breach</h3>
AuctionWorld can immediately issue a warning or suspend membership account if the user violates terms or conditions or breach the buyer agreement or if the company is 

unable to authenticate the information provided to us.</br>
</br>
<h3>Company's liability towards you</h3>

The company is not responsible for any bids not received, accepted or processed due to technical errors. In simple words, we are not responsible for any loss arising 

out of the above mentioned issues.</br>
The company will not issue any warranty or condition regarding site's capacity.</br>
The company can't be held responsible for any uninterrupted access to the site which is beyond the control of the company.</br>
We make sure that any inappropriate or illegal use of site will be resolved.</br>
We do not guarantee on preserving any records especially after the suspension, termination or cancellation of the service to you.</br>
</br>
<h3>Security</h3>
We assure complete security to the users. The company follow security norms to protect the personal information and integrity of the users. Our users have the 

discretion to alter/change their personal information as and when required. But the users who have valid user name and password can enjoy this right.</br>
</br>
<h3>Copyright</h3>
This website is owned and operated by Archana,Prerna,Apurva.</br>
The entire text, graphics, photographs, content and design layout of the site is fully protected under copyright law. Any unauthorized use of the site is strictly 

prohibited. No individual can copy or reproduce the content without prior written permission.</br>
 </div>
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


</tr>

</table>

</body>
</html>