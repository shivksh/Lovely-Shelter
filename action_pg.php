<?php   
function checkin()    
{ 
  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'booking';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$id= $_POST["user_id"];
  
   

$sql = "update booking_details set status=\"checked-in\" where user_id='$id' ";  
if(mysqli_query($conn, $sql)){  
 echo "USER WITH ID $id Checked-in successfully";  
header("Location: profile.php"); // Redirecting To Home Page
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);    
   
  
 
}  

 
function checkout()    
{  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'booking';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$id= $_POST["user_id"];
  
   

$sql = "update booking_details set status=\"check-out\" where user_id='$id' ";  
if(mysqli_query($conn, $sql)){  

 echo "USER WITH ID $id Checked-out successfully";  
header("Location: profile.php"); // Redirecting To Home Page
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
 
  


}  

if(isset($_POST['b1']))  
{  
  
 checkin();  
}  
   
if(isset($_POST['b2']))  
{  
 
checkout();  
}  




?>  