<?php

$host = $_POST['host'];
$username = $_POST['user'];
$password = $_POST['pass'];
$database = $_POST['data'];

$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Sorry, the connection failed. MySQL Errors:<br><code> " . $conn->connect_error . "</code>");
}
echo "<h2>All set up! We are now able to work with MySQL.</h2>";