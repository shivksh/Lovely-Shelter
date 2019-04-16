<?php  
session_start();  
?>  
<?php

if( ( isset($_SESSION['login_user']) ) ) // if the session is no  set then start to 
{
    include('l2.php'); 

}

?> 
<?php  
function p1()    
{  $_SESSION["pannal"]=1;


}   
function p2()    
{  $_SESSION["pannal"]=2;


}   
function p3()    
{  $_SESSION["pannal"]=3;


}   
function p4()    
{  $_SESSION["pannal"]=4;

}
function p5()    
{  $_SESSION["pannal"]=5;


}   
function p6()    
{  $_SESSION["pannal"]=6;


} 
 if(isset($_POST['b1']))  
{  
 p1();  
}     
if(isset($_POST['b2']))  
{  
p2();  
}     
 
if(isset($_POST['b3']))  
{  
 p3();  
}     
if(isset($_POST['b4']))  
{  
p4();  
} 
if(isset($_POST['b5']))  
{  
 p5();  
}     
if(isset($_POST['b6']))  
{  
p6();  
} 
 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Credit card validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #section3 {padding-top:50px;height:200px;color: #fff; background-color: #ff0000;}
    #section4 {color: #fff; background-color: #110000;}
body{
    font: normal 18px sans-serif;
    color: #333;
    background-color: #eee;
}

  .creditCardForm {
    max-width: 700px;
    background-color: #fff;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
.creditCardForm label {
    width: 100%;
    margin-bottom: 10px;
}
.creditCardForm .heading h1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #4c4e56;
}

.creditCardForm .payment {
    float: left;
    font-size: 18px;
    padding: 10px 25px;
    margin-top: 20px;
    position: relative;
}
.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}
.creditCardForm .payment .form-control {
    line-height: 40px;
    height: auto;
    padding: 0 16px;
}
.creditCardForm .fname {
    width: 49%;
    margin-right: 10px;
}
.creditCardForm .lname {
    width: 49%;
}
.creditCardForm .email {
    width: 98%;
    margin-right: 10px;
}
.creditCardForm .phone {
    width: 78%;
    margin-right: 10px;
}
.creditCardForm .owner {
    width: 63%;
    margin-right: 10px;
}
.creditCardForm .CVV {
    width: 35%;
}
.creditCardForm #card-number-field {
    width: 100%;
}
.creditCardForm #expiration-date {
    width: 49%;
}
.creditCardForm #credit_cards {
    width: 50%;
    margin-top: 25px;
    text-align: right;
}
.creditCardForm #pay-now {
    width: 100%;
    margin-top: 25px;
}
.creditCardForm .payment .btn {
    width: 100%;
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}
.creditCardForm .payment select {
    padding: 10px;
    margin-right: 15px;
}
.transparent {
    opacity: 0.2;
}
@media(max-width: 650px) {
    .creditCardForm .owner,
    .creditCardForm .CVV,
    .creditCardForm #expiration-date,
    .creditCardForm #credit_cards {
        width: 100%;
    }
    .creditCardForm #credit_cards {
        text-align: left;
    }
}



</style>
</head>
<body>




















<div class="jumbotron text-center" id="section3">
  <h1>Make Payment to confirm your booking</h1> 
  <p>"Stay in Lovely Shelter"</p> 
  </div>
  <div class="jumbotron text-center" id="section4">
  <?php  
echo "Checkin: ".$_SESSION["checkin"];


echo nl2br("\n \n Checkout: ").$_SESSION["checkout"];
echo nl2br("\n \n id: ").$_SESSION["pannal"];  
?>  
</div>

<div class="creditCardForm">
    <div class="heading">
        <h1>Confirm Details</h1>
    </div>
    <div class="payment">
        <form name="myForm" action="login1.php"
onsubmit="return validateForm()" method="post">
			<div class="form-group fname">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" >
				
            </div>
            <div class="form-group lname">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" id="lname" name="lname">
				
            </div>
            <div class="form-group email">
                <label for="email">Email Id</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
			<div class="form-group phone">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone">
			<div ><hr>	
              <h1>Make Payment</h1>
            </div>
            </div>
			
            <div class="form-group owner">
                <label for="owner">Owner</label>
                <input type="text" class="form-control" id="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="Enter Card Number">
            </div>
            <div class="form-group" id="expiration-date">
                <label>Expiration Date</label>
                <select>
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select>
                    <option value="16"> 2016</option>
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                </select>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="images/Visa.png" width="80" height="70">
                <img src="images/card.jpg" width="80" height="70" >
                <img src="images/card1.png"  width="80" height="70">
				
				
            </div>
            <div class="form-group" id="pay-now">
                <button type="submit"  class="btn btn-default"  id="confirm-purchase">Confirm</button>
            </div>
        </form>
    </div>
</div> 

<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("First name must be filled out");
		
        return false;
    }
	var y = document.forms["myForm"]["lname"].value;
    if (y == "") {
        alert("Last name must be filled out");
        return false;
    }
    var z = document.forms["myForm"]["email"].value;
    if (z == "") {
        alert("email must be filled out");
        return false;
    }
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z)))
    {
    alert("You have entered an invalid email address!")
    return (false)
    }

    var phone = document.forms["myForm"]["phone"].value;
    if (phone == "") {
        alert("Phone must be filled out");
        return false;
    }
	var phoneno = /^\d{10}$/;
    if(!phone.match(phoneno))
        {alert("You have entered an invalid phone number!")

      return false;
        }

    var owner = document.forms["myForm"]["owner"].value;
    if (owner == "") {
        alert("owner must be filled out");
        return false;
    }
    var cvv = document.forms["myForm"]["cvv"].value;
    if (cvv == "") {
        alert("cvv must be filled out");
        return false;
    }
	var cardNumber = document.forms["myForm"]["cardNumber"].value;
    if (cardNumber == "") {
        alert("cardNumber must be filled out");
        return false;
    }
	
}

</script>

</body>
</html>

