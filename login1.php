<?php  
session_start();  

?>  
<?php

if( ( isset($_SESSION['login_user']) ) ) // if the session is no  set then start to 
{
    include('l2.php'); 

}

?> 
<div class="container">
<div class="row">
  <div class="col-lg-6">
<?php  
$fname=$_POST["fname"];
$lname=$_POST["lname"]; 
$email_id=$_POST["email"];
$phone_no=$_POST["phone"]; 
echo "Congratulation your room is reserved: $fname $lname</br></br>";  
  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'booking'; 




  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>'; 
 
$a=$_SESSION["checkin"];
$b=$_SESSION["checkout"];
$c=$_SESSION["pannal"];



 
$sql = "INSERT INTO booking_details(fname,lname,email_id,phone_no,begin, end,room_id  ) VALUES ( '$fname' , '$lname' , '$email_id'  ,'$phone_no',  '$a' ,'$b', $c )";  

  if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet">
  
  
  
</head>
<body>

  
<button type="button" class="btn btn-danger navbar-btn" class="btn btn-default btn-lg" id="myBtn"><a href="carousel.php">Go to Home Page</a></button>
<?php include('detail.php'); ?>
</div>
<div class="col-lg-6">
<img class="img-responsive img-rounded" src="images/cong.jpg" alt="congo"> 
</div><div>

</div> 
</div> 

</html>
