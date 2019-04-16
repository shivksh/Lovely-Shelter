 
<?php 
session_start();
?>
  <?php include("navbar.html"); ?>
 <?php

if( ( isset($_SESSION['login_user']) ) ) // if the session is no  set then start to 
{
    include('l2.php'); 

}

?> 
<html>
<head>
<style>
  #section3 {padding-top:50px;height:200px;color: #fff; background-color: #ff9800;}
  
  </style>
</head>
<body>
<div class="container" >
<div class="jumbotron container" id="section3">
<?php

    
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$_SESSION["checkin"] = $checkin;
$_SESSION["checkout"] = $checkout;

echo "<h3>CHECKIN: $checkin</h3>";
  
echo "<h3>CHECKOUT: $checkout</h3>";

?>
 
</div>
<?php
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'booking';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  

$sql2="SELECT * FROM room AS r WHERE r.id NOT IN( SELECT distinct b.room_id FROM booking_details AS b
 WHERE (('$checkin' BETWEEN b.begin AND b.end OR '$checkout' BETWEEN b.begin AND b.end OR ('$checkin' <= b.begin AND '$checkout' >= b.end))) AND (b.status=\"checked-in\" or b.status=\"blank\" )) ";
 
$retval=mysqli_query($conn, $sql2);  
?>
  <?php
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "id :{$row['id']}  <br> ".  
         "name : {$row['name']} <br> ".    
         "--------------------------------<br>"
	 ;
    if($row['id']==1){
	include("p1.html");
    } 
    if($row['id']==2){
	include("p2.html");
    } 
    if($row['id']==3){
	include("p3.html");
    } 
    if($row['id']==4){
	include("p4.html");
    } 
    if($row['id']==5){
	include("p5.html");
    }
    if($row['id']==6){
	include("p6.html");
    }  
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>  

</div> 

</body>


</html>