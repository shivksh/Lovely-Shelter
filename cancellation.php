<?php

if( session_status() == PHP_SESSION_NONE ) // if session status is none then start the session
{
     session_start();
}

?>

 
<html lang="en">
<head>
  <title>Lovely Shelter</title>
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


<p id="includedContent"></p>
<?php

if( ( isset($_SESSION['login_user']) ) ) // if the session is no  set then start to 
{
    include('l2.php'); 

}

?> 

<script> 
    $(function(){
      $("#includedContent").load("navbar.html"); 
    });
    </script> 

<p></p>
<div class="container">
  <h2>Cancel Booking</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" >
  Cancel</button></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cancellation Module</h4>
        </div>
        <div class="modal-body">
		<form method="post" class="form-inline"> 
<div class="form-group">		
Enter User Id: <input type="string" class="form-control" name="user_id"/> 
 
<input type="submit" class="btn btn-default"  name="cancel" value="cancel"/>  
 </div>
</form>  
          
  
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



</body>
</html>
<?php 
function add()    
{  $host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'booking';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$id=$_POST["user_id"];

$sql = "DELETE FROM `booking_details` WHERE booking_details.user_id='$id'";  
if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";
  echo "Your money will be refunded within 24hrs Terms & Conditions Applied";
}else{  
 
}  
  
mysqli_close($conn);  
}  


if(isset($_POST['cancel']))  
{  
add();
}       
?>  

