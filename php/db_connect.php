<?php
    $server = "localhost";
    $username= "root";
    $password = "";
    $database = "u261770466_luxurydubaicar";
    $conn = mysqli_connect ( $server, $username, $password, $database );
    if($conn){
        
    }
    else{
        die("error".mysqli_connect_error());
    }
    ?>