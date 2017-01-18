<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
    <script src="stuhover.js" type="text/javascript"></script>
    <style>
    table td
    {
         border:1px solid black;
         border-radius: 20px;
    }
    table
    {
        border:0;
    }
    .text
    {
        border-radius:10px;
    }
    #panel,#flip,#panel1,#flip1,#panel2,#flip2,#panel3,#flip3
    {
        padding:5px;
        border:solid 1px #c3c3c3;
        color: black;
        width:200px;

    }
    #panel,#panel1,#panel2,#panel3
    {
        display:none;

    }
    .b_style
    {
        width:70px;
    height:30px;
    float:right;
    background:rgb(253,162,6);
    border-radius:5px;
    }
    a:link {color:black; text-decoration:none;}    /* unvisited link */
    a:visited {color:black;} /* visited link */
    a:hover {color:red;}   /* mouse over link */
    </style>
    <script src="java.js">
    </script>
    <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("fast");
            });
        
        $("#flip3").click(function(){
            $("#panel3").slideToggle("fast");
            });
    });
</script>
	<script language="javascript">
    function call()
    {
        var a= Activate();
        var b= this.form.submit();
    }
    
    function call3()
    {
        var a= Activate_n();
        var b= this.form.submit();
    }

    function Activate_n()
    {
        var cb1=document.getElementById('week');
        var cb2=document.getElementById('day');
        var cb3=document.getElementById('hour');
        var cb4=document.getElementById('none');
        

        if((cb1.checked==true)||(cb2.checked==true)||(cb3.checked==true))
        {
            cb4.disabled=true;
            cb4.checked=false;
            
        }
        if((cb1.checked==false)&&(cb2.checked==false)&&(cb3.checked==false))
        {
            cb4.disabled=false;
            cb4.checked=true;
            
        }
        
    }
    
    function Activate()
    {
    	var cb1=document.getElementById('c_2000');
    	var cb2=document.getElementById('c_4000');
    	var cb3=document.getElementById('c_6000');
    	var cb4=document.getElementById('c_none');
        

    	if((cb1.checked==true)||(cb2.checked==true)||(cb3.checked==true))
    	{
    		cb4.disabled=true;
            cb4.checked=false;
            
    	}
        if((cb1.checked==false)&&(cb2.checked==false)&&(cb3.checked==false))
        {
            cb4.disabled=false;
            cb4.checked=true;
            
        }
        
    }
    	

    </script>
</head>
<body>

<body style="background:url(images/bg.jpg);background-size:cover; ">
<header style="width=100%;background:black;height:100px;margin-top:-30px;margin-left:-10px;margin-right:-10px;"> 

		
		<p style="color:white; margin-left:160px;margin-top:30px;font-size:50px;">Auction World</p>
       
        <?php 
		$tap=$_SESSION['Username'];
        global $conn;
$result = mysqli_query($conn,"SELECT Username FROM user WHERE Username='$tap'");
if (!(isset($_SESSION['Username']) && $_SESSION['Username'] != '')) {

?>
<a style=" float:right; margin-top:-80px; margin-right:50px;color:white; font-size:20px;" href="register_bidding.php">Register</a>

<a style=" float:right; margin-top:-80px; margin-right:150px;color:white; font-size:20px;" href="#login-box" class="login-window">Login</a>
		<?php include_once("log.php");  ?>
		
<?php
	}
	else
	{
//$row=mysqli_fetch_assoc($result);
?>
<a style=" float:right; margin-top:-80px; margin-right:220px;color:white;" href="user_profile.php"><?php echo $tap;?></a>
<a style=" float:right; margin-top:-80px; margin-right:170px;color:white;" href="logout_bidding.php">Logout</a>
<a style=" float:right; margin-top:-80px; margin-right:60px;color:white;" href="wishlist.php">Wishlist</a>
<a style=" float:right; margin-top:-80px; margin-right:120px;color:white;" href="history.php">History</a>


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


<form action="websearch.php" method="post" target="myiframe" name="form" frameBorder="0">
                    <div style="float:right;margin-top:-100px;" >
                        <select name="cate" style="width:100px;">
                            <option value="Electronics"> Electronics</option>
                            <option value="Books">Books</option>
                            <option value="Antiques">Antiques</option>
                            <option value="entertainmen">Entertainment</option>
                 
                        <input type="submit" class="search_icon" value="submit" class="b_style">
                    </div>

            <div>
                <table id="table2" style="margin-left:170px;border-radius:20px;" cellspacing="5">
                    <tr>
                        <td style="vertical-align:top;" >
                            <b style="font-size:40px;">Filter your <br>search!!!</b>
                            <br>
                            <br>
                <div id="flip"><a href="##" ><b>Price</b></a></div>
                    <div id="panel">
                       <input type="checkbox" name="checkbox_P1" id="c_2000" value[]="0" onClick="call();"/>(0-2000)<br>
                       <input type="checkbox" name="checkbox_P2" id="c_4000" value[]="1" onClick="call();"/>(2000-4000)<br>
                       <input type="checkbox" name="checkbox_P3" id="c_6000" value[]="2" onClick="call();"/>(4000-6000)<br>
                       <input type="checkbox" name="checkbox_N2" id="c_none" value[]="3" checked />None
                    </div>
                
                <div id="flip3"><a href="##" ><b>Time Left</b></a></div>
                   <div id="panel3">
                       <input type="checkbox" name="week" id="week" value="13" onClick="call3();"/>More than a week<br>
                       <input type="checkbox" name="day" id="day" value="14" onClick="call3();"/>Less than a day<br>
                       <input type="checkbox" name="hour" id="hour" value="15" onClick="call3();"/>Less than an hour<br>
                       <input type="checkbox" name="none" id="none" value="16" checked/>Noner<br>
                   </div>   
                 </td>  
                
                </form>
                <td width="760" style="float:right; " >
                    <iframe name="myiframe" frameBorder="0" width="1000px" height="1000px" style="margin-left:0px;margin-top:-0px;;margin-right:0px;">
                    </iframe>
                </td>
                </tr>
                </table>
            </div>  

</body>
</html>