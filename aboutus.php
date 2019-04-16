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
</br>
<?php

if( ( isset($_SESSION['login_user']) ) ) // if the session is no  set then start to 
{
    include('l2.php'); 

}

include('ab1.php'); 
?> 


<script> 
    $(function(){
      $("#includedContent").load("navbar.html"); 
    });
    </script> 




</body>
</html>
