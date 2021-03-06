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
      <title>Side Hustle - Register</title>
      
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
   
         <?php
            $msg = '';
            
            if (isset($_POST['register']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {

                $_SESSION['username'] = $_POST['username'];
                  $_SESSION['password'] = $_POST['password'];
				
                header('Refresh: 1; URL = login.php');

            }
         ?>
    
      <h2>Enter Your Username and Password</h2>
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>

            <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus></br><br>

            <input type = "password" class = "form-control" name = "password" placeholder = "password" required> <br>

            <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "register">Register</button>

         </form>
			
         <h3>Already Registered! Click <a href = "login.php"> here </a> to login.</h3>
         
      </div> 
      
   </body>
</html>