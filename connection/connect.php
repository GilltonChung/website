<?php

//main connection file for both admin & front end
$servername = "gilltonassignment2backup.mysql.database.azure.com"; //server
$username = "gilltonadmin"; //username
$password = "Jugular59"; //password
$dbname = "online_rest";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>