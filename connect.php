<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1704566";
 $password = "ryGYkT62m";
 $dbname = "a1704566;
 // Create connection
GIT Exercises 4 (12)
29.12.2018
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

