<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Side Hustle - User account</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #55555552;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         h2, h3{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <div class = "container">
      
        <?php echo "<h2>Welcome ". $_SESSION['username'] . " </h2>" ?>;
			
        <h3> Click <a href = "logout.php"> here </a> to logout. </h3>
         
      </div> 
      
   </body>
</html>