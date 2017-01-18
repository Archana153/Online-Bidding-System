<?php

include('first.php');
global $conn;
if(isset($_POST["user_name"]))
{
   
    
    $username = $_POST["user_name"];
    
    $s=mysqli_query($conn,"select Username from user where Username='$username'");
    $row=mysqli_num_rows($s);
    if($row>0){
        echo "Username is not available";
    }
    else{
        echo "Username is available";
    }
}
?>