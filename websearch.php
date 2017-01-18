
<head>
    
    <style>
    .tdstyle
    {   color:red;
        height:200px;
        width:200px;
        padding:10px;
        font-weight: bold;
        font-size: 25px;
        color:rgb(85,8,85);
        vertical-align: bottom;
        text-align: center;
        border-radius:10px;
        

    }
    .postme
    {
        width:70px;
    height:30px;
    float:right;
    background:rgb(253,162,6);
    border-radius:5px;
    }
    table
    {
        border:0;
    }
    table td
    {
        border:solid 1px black;
    }
    </style>
</head>


<div style="backgroundcolor:red;">
<?php
session_start();
 include ('first.php');
 global $conn;
                $i=0;
                $p=0;
                $count=0;
                $userID=null;
                $chck=isset($_POST['checkbox_P1']);
                $chck2=isset($_POST['checkbox_P2']);
                $chck3=isset($_POST['checkbox_P3']);
                $chck4=isset($_POST['checkbox_N2']);
                
                $day=isset($_POST['day']);
                $week=isset($_POST['week']);
                $hour=isset($_POST['hour']);
                $none=isset($_POST['none']);

                $date = date("Y-m-d");
                $timestamp = strtotime($date);
                $day=date("d", $timestamp);
                $month=date("m", $timestamp);
                $year=date("Y", $timestamp);
                $hour=date("H",$timestamp);
                
                //$value=$_POST['search'];
                $cat=$_POST['cate'];
                $array=array("false","false","false");
                $arrlength=count($array);
                
                echo "<b style='font-size:30px;'>Searching For ' ",$cat," '......</b>";

                if($chck>0)
                {
                    $array[0]="true";
                    
                }
                else 
                    $array[0]="false";
                
                if($chck2>0)
                {
                    $array[1]="true";
                    
                }
                else
                    $array[1]="false";
                
                if($chck3>0)
                {
                    $array[2]="true";
                }
                else
                    $array[2]="false";
                
                $k=0;
                $userID=mysqli_query($conn,"SELECT * FROM item WHERE category='$cat' 
                         order by Starting_price asc") or die(mysqli_error());
                ?>
                                                <table cellspacing="10">
                                                <tr>
                                                    <?php
                

                while($row = mysqli_fetch_assoc($userID))
                {
                    $timestamp1 = strtotime($row['End_date']);    
                                $day1=date("d", $timestamp1); 
                                $year1=date("Y",$timestamp1);
                                $month1=date("m", $timestamp1); 
                                $hour=date("H",$timestamp1);
                    if($chck4>0 and $none==0)
                    {   
                           
                        if($week>0)
                            {    
                                if($month1>=$month and $year1>=$year and $day1>$day+7)
                                  {   $count++;
                                      if($count<=2)
                                      {
                                        echo "<td class='tdstyle'>
                                        <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
										

                                        ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                        ,$row['Starting_price'],$row['Details'],"<br>";
                                        echo "<form action='bid.php' method='post'><input  type='submit'  
                                        class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                        name='hidden' hidden></form></td>" ;
                                      }
                                      else
                                        {
                                            $count=0;
                                            echo "</tr><tr><td class='tdstyle'>
                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                            name='hidden' hidden></form></td>" ;

                                        }   
                                  }
                            }
                            if($day>0)
                            {   
                                if($month1==$month and $year1==$year and $day1==$day+1)
                                {
                                    $count++;
                                      if($count<=2)
                                      {
                                        echo "<td class='tdstyle'>
                                        <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                        ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                        ,$row['Starting_price'],$row['Details'],"<br>";
                                        echo "<form action='bid.php' method='post'><input  type='submit'  
                                        class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                        name='hidden' hidden></form></td>" ;
                                      }
                                      else
                                        {
                                            $count=0;
                                            echo "</tr><tr><td class='tdstyle'>
                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                            name='hidden' hidden></form></td>" ;

                                        }   
                                }
                            }
                            if($hour>0)
                            {
                                 if($month1==$month and $year1==$year and $day1==$day and $hour1<=$hour+1)
                                 {
                                    $count++;
                                      if($count<=2)
                                      {
                                        echo "<td class='tdstyle'>
                                        <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                        ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                        ,$row['Starting_price'],$row['Details'],"<br>";
                                        echo "<form action='bid.php' method='post'><input  type='submit'  
                                        class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                        name='hidden' hidden></form></td>" ;
                                      }
                                      else
                                        {
                                            $count=0;
                                            echo "</tr><tr><td class='tdstyle'>
                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                            name='hidden' hidden></form></td>" ;

                                        }   

                                 }

                            }

                    }
                        if($chck4==0 and $none==0)
                        {    
                                    for($x=0;$x<$arrlength;$x++)
                                        {  
                                            if($array[$x]=="true")
                                            {
                                        
                                                if($x==0)
                                                    $p=2000;
                                                if($x==1)
                                                    $p=4000;
                                                if($x==2)
                                                    $p=6000;

                                                if($row['Starting_price']>$p-2000 and $row['Starting_price']<=$p)
                                                {   
                                                   
                                                   if($week>0)
                                                    {   
                                                        if($month1>=$month and $year1>=$year and $day1>$day+7)
                                                        {   
                                                            $count++;
                                                            if($count<=2)
                                                          {
                                                            echo "<td class='tdstyle'>
                                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                                            name='hidden' hidden></form></td>" ;
                                                          }
                                                            else
                                                          {
                                                            $count=0;
                                                            echo "</tr><tr><td class='tdstyle'>
                                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                                            name='hidden' hidden></form></td>" ;

                                                          }
                                                        }    
                                                    }
                                                
                                                    if($day>0)
                                                    {
                                                        if($month1==$month and $year1==$year and $day1==$day+1)
                                                        {
                                                            $count++;
                                                            if($count<=2)
                                                          {
                                                            echo "<td class='tdstyle'>
                                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                                            name='hidden' hidden></form></td>" ;
                                                          }
                                                            else
                                                          {
                                                            $count=0;
                                                            echo "</tr><tr><td class='tdstyle'>
                                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                                            name='hidden' hidden></form></td>" ;

                                                          }
                                                        }    
                                                        
                                                    }
                                                    if($hour>0)
                                                    {

                                                    }
                                                    
                                                }

                                            }
                            
                                        }
                                        
                        }
                        if($chck4==0 and $none>0)
                        {  
                            for($x=0;$x<$arrlength;$x++)
                                        {  
                                            if($array[$x]=="true")
                                            {
                                        
                                                if($x==0)
                                                    $p=2000;
                                                if($x==1)
                                                    $p=4000;
                                                if($x==2)
                                                    $p=6000;

                                                if($row['Starting_price']>=$p-2000 and $row['Starting_price']<$p)
                                                {   
                                                    $count++;
                                                    if($count<=2)
                                                        {
                                                            echo "<td class='tdstyle'>
                                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                                            name='hidden' hidden></form></td>" ;
                                                           
                                                        }   
                                                    else
                                                        {
                                                            $count=0;
                                                            echo "</tr><tr><td class='tdstyle'>
                                                            <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                                            ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                                            ,$row['Starting_price'],$row['Details'],"<br>";
                                                            echo "<form action='bid.php' method='post'><input  type='submit'  
                                                            class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                                            name='hidden' hidden></form></td>" ;
                                                            
                                                        }    
                                                         
                                                }
                            
                                            }
                                        }
                        }
                        if($chck4>0 and $none>0)
                            {
                               
                               if($count<=2)
                             {
                                echo "<td class='tdstyle'>
                                <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                               ,$row['Starting_price'],$row['Details'],"<br>";
                               echo "<form action='bid.php' method='post'><input  type='submit'  
                              class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                               name='hidden' hidden>
						
  	    		</form></td>" ;
                                                           
                             }   
                                else
                             {
                                 $count=0;
                                 echo "</tr><tr><td class='tdstyle'>
                                 <img width='130px' height='130px' src='".$row["Item_display"]."'/><br>
                                 ",$row['Item_name'],"<br>",$row['Category'],"<br>"
                                ,$row['Starting_price'],$row['Details'],"<br>";
                                echo "<form action='bid.php' method='post'><input  type='submit'  
                                class='postme' name='button1' value='bid now''><input type='text' value=",$row['Item_id'],"
                                name='hidden' hidden> 
						
  	    	</td>" ;
                                                            
                            } 
								 $count++;
                         }

                }
            
                                    
 ?>
</tr>
</table>
