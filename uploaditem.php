<?php
session_set_cookie_params(0);
session_start();


 include ('first.php');
 global $conn;
$filename=null;
$allowedExts = array("gif", "jpeg", "jpg", "png");

$extension = end(explode(".", $_FILES["file"]["name"]));

$randomprefix1 = mt_rand(0,1000);
$randomprefix2 = mt_rand(0,1000);
$filename = $randomprefix1.$randomprefix2.$_FILES["file"]["name"];

if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 2000000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		}
		else{
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			
			if (file_exists("upload/" . $filename)){
				echo $filename . " already exists. ";
			}
			
			else{
				move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
				echo "Stored in: " . "<img src='upload/" . $filename."'/>";
			}
		}
	}

$itemname=$_POST['itemname'];
$Category=$_POST['Category'];
$Startdate=$_POST['Start_date'];
$enddate=$_POST['End_Date'];
$details=$_POST['Details'];
$actualprice=$_POST['Actual_price'];
$startingprise=$_POST['Starting_price'];
$image= "upload/" . $filename;
echo $filename;
$userID=mysqli_query($conn,"INSERT INTO `item`(`Item_id`, `Item_name`, `Item_display`, `Category`, `Start_date`, `End_date`, `Details`, `Actual_price`,
 `Starting_price`) VALUES ('','$itemname','$image','$Category','$Startdate','$enddate','details','$actualprice','$startingprise')") or die(mysqli_error());
/*$user=mysqli_query("SELECT * from item")or die (mysqli_error());
while($row=mysqli_fetch_assoc($user))
{

	echo "<img width='200px' height='300px' src='".$row["Item_display"]."'/>";
	
}*/

?>