<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "result_sys";
$conn =  mysqli_connect($servername , $username ,$password , $dbname);
    if (!$conn) {
        if(mysqli_connect_error() );
        {
         echo " <b> Failed to connect to  server: </b>" .  mysqli_connect_error() ;
         exit();
        }
      
    }
?>