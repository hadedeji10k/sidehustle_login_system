<?php
   session_start();
   
   echo '<h2>You have been logged out!</h2>';
   header('Refresh: 2; URL = login.php');
?>