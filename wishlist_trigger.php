<?php
session_start();
include('first.php');
global $conn;
//if (!(isset($_SESSION['UserName']) && $_SESSION['UserName'] != '')) 
	if (isset($_SESSION['Username']))
//if($_SESSION['UserName']=="akku")
{
 $item_id = $_GET['item_id'];
 $username=$_SESSION['Username'];
 include('first.php');
global $conn;
echo $item_id;
echo $username;
mysqli_query($conn,"INSERT INTO wishlist(username,item_ids) VALUES('$username','$item_id')");
header('Location: ' . $_SERVER['HTTP_REFERER']);


}

?>