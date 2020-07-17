<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'test';
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  $_SESSION['MSG'] = " Error! " . $conn->connect_error;
  die();
}
?>
