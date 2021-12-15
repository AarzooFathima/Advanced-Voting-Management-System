<?php
// Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "voting";
    // Create a database connection
    $connect = mysqli_connect($server, $username, $password, $db_name);
    
    // Check for connection success
    if(!$connect){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

?>
