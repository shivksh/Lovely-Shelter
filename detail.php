  <div class="jumbotron text-center" id="section4">
  <?php  
echo "Checkin: ".$_SESSION["checkin"];


echo nl2br("\n \n Checkout: ").$_SESSION["checkout"];
echo nl2br("\n \n Room id: ").$_SESSION["pannal"];  
?>  
<?php  
$fname=$_POST["fname"];
$lname=$_POST["lname"]; 
$email_id=$_POST["email"];
$phone_no=$_POST["phone"]; 
echo "</br></br>Congratulation your room is reserved: $fname $lname</br></br>";  

  ?>
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
  
$sql = "SELECT * FROM booking_details order by id desc";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo"</BR>booking id:	{$row['id']}  <br> <br>". 
		"<H3>user id:		{$row['user_id']} </H3> <br><br> ".
		"first name:	{$row['fname']}  <br><br> ".
		"last name:		{$row['lname']}  <br><br> ".
		
		"--------------------------------<br><br>".
		"<h4>THE USER IS REQUESTED TO NOTE ABOVE INFORMATION FOR FUTURE REFERENCE(check-in,check-out,cancellation,etc).</h4>";
		break;
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>  
</div>