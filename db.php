<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "DB Connected successfully";
 // mysqli_select_db($conn,"$db");

}
 
?>