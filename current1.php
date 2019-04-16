<html>
<head>
  <title>Lovely Shelter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<h2>WELCOME !</h2>
<div class="container">
<p id="demo"></p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

</body>
</html>
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
$sql="SELECT * FROM booking_details ";
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "<br><br><br> id :{$row['id']}  <br> ". 
	"fname : {$row['fname']} <br> ".  
         "LAST NAME : {$row['lname']} <br> ".  
		 "EMAIL ID : {$row['email_id']} <br> ".  
         "PHONE NUMBER : {$row['phone_no']} <br> ".  
		 "BEGIN : {$row['begin']} <br> ".  
		 "END : {$row['end']} <br> ".  
         "ROOM ID : {$row['room_id']} <br> ". 
         "STATUS : {$row['status']} <br> ".  
	
        
         "--------------------------------<br>";  
 } //end of while   
}else{  
echo "0 results";  
}  
?>

<div class="container">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<div class="table-responsive">  
     <table class="table table-bordered table-hover">
          <thead><tr>
              <td>Id</td>
			  <td>User Id</td>
              <td>First_Name   </td>
              <td>Last_Name    </td>
			  <td>Email_Id     </td>
              <td>Phone_Number   </td>
			  <td>BEGIN     </td>
              <td>END  </td>
			  <td>ROOM_ID  </td>
              <td>Status  </td>
			  
          </tr>
		  </thead>
          
		  <?php
		  $sql="SELECT * FROM booking_details ";
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
 
  

        ?>
		<tbody id="myTable">
        <tr>
            
			<td><?php echo  $row['id']  ; ?></td> 
			<td><?php echo  $row['user_id']  ; ?></td> 
            <td><?php echo $row['fname']; ?></td> 
            <td><?php echo $row['lname']; ?></td> 
			<td><?php echo  $row['email_id']  ; ?></td> 
            <td><?php echo $row['phone_no']; ?></td>
			<td><?php echo $row['begin']; ?></td> 
			<td><?php echo  $row['end']  ; ?></td> 
            <td><?php echo $row['room_id']; ?></td>
            <td>
			
<button id="demo1"  name='button1'><?php echo $row['status']; ?></button></td> 
			
			
        </tr>
		</tbody>
        <?php
    }
}
mysqli_close($conn);
?>
</tr>
       </table>
	   </div>
    </div>

	
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

