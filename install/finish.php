<?php
require 'checkfile.php';
checkConf();

if(!isset($_COOKIE['host'])){
    echo "Something went wrong, please make sure cookies are allowed for this site.";
}

$host = $_COOKIE['host'];
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$database = $_COOKIE['database'];

$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("<h2>Sorry, the connection failed. MySQL Errors:</h2><br><code> " . $conn->connect_error . "</code><br><br><button onclick='window.history.back();'>Go Back</button><div display='none'>");
}
echo "<h2>Your installation is all done. Click below to start adding articles.</h2>";