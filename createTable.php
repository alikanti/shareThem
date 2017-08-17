<?php

//Updating DB 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE share ( filename VARCHAR(90) NOT NULL,keycode VARCHAR(90) NOT NULL,password VARCHAR(30))";

if ($conn->query($sql) === TRUE) {
    echo "Table share created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();

?>
