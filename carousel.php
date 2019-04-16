<?php

if( session_status() == PHP_SESSION_NONE ) // if session status is none then start the session
{
     session_start();
}

?>

<!DOCTYPE html>
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
<style>
.bg-grey {
      background-color: #f6f6f6;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
}
.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}
.* {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 46px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;} 
  </style>
<body>


<p id="includedContent"></p>
<?php

if( ( isset($_SESSION['login_user']) ) ) // if the session is no  set then start to 
{
    include('l2.php'); 

}

?> 


  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/x.jpg" alt="Single Seater Room" style="width:100%; height:600px;" class="img-responsive">
        <div class="carousel-caption">
          <h3>Single Seater Room</h3>
          <p>Best for preparing alone!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/y.jpg" alt="Double Sharing" style="width:100%; height:600px;" class="img-responsive">
        <div class="carousel-caption">
          <h3>Double Sharing</h3>
          <p>Study with a partner!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/z.jpg" alt="Triple Sharing" style="width:100%; height:600px;" class="img-responsive">
        <div class="carousel-caption">
          <h3>Triple Sharing</h3>
          <p>Study and Enjoy Company!</p>
        </div>
      </div>
  
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container-fluid bg-3 text-center"> 
  <h3>Servicing the Youngsters!</h3>
  <div class="row">
    <div class="col-sm-4">
      
      <img src="images\service.jpg" alt="Image" style="width:300px;height:300px;" class="img-responsive">
    </div>
    <div class="col-sm-4">
     
      <img src="images\service1.jpg" alt="Image" style="width:300px;height:300px;" class="img-responsive">
    </div>
    <div class="col-sm-4"> 
      
      <img src="images\service2.jpg" alt="Image" style="width:300px;height:300px;" class="img-responsive">
    </div>
  </div>
</div> 
<h1></h1>

<div class="row container-fluid text-center">
<h3>BEST FOR</h3>
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3></h3>
      <p>Graduate Students</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3></h3>
      <p>School Students</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3></h3>
      <p>UPSC Aspirants!</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3></h3>
      <p>University Students</p>
    </div>
  </div>
</div> 

<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mathura, UP</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9876543210</p>
      <p><span class="glyphicon glyphicon-envelope"></span> lovelyshelter@gmail.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div> 

<footer class="container-fluid text-center bg-4">
  <a href="carousel.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Move To Top <a href="carousel.php" title="Visit the Top">on the top</a></p> 
</footer>  

  <script> 
    $(function(){
      $("#includedContent").load("navbar.html"); 
    });
    </script> 




</body>
</html>
