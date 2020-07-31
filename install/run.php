<!DOCTYPE html>
<html>
    <head>
        <title>Setup - TuckerDesk</title>
        <link href="/styles/default.css" rel="stylesheet" />
    </head>
    <body>
        <center>
            <br>
            <h1>Setup - TuckerDesk</h1>
<?php

$host = $_POST['host'];
$username = $_POST['user'];
$password = $_POST['pass'];
$database = $_POST['data'];

$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("<h2>Sorry, the connection failed. MySQL Errors:</h2><br><code> " . $conn->connect_error . "</code><br><br><button onclick='window.history.back();'>Go Back</button><div display='none'>");
}
echo "<h2>All set up! We are now able to work with MySQL. You will need to enter in a few more details.</h2>";
?>
<form action="final.php" method="post">
                <label for="name">Support Center Name:</label><br>
                <input type="text" id="name" name="name" value="My Support Center"><br>
                <label for="url">Logo URL:</label><br>
                <input type="text" id="url" name="url" value="http://example.com/logo.jpg"><br><br>
                <input type="submit" value="Submit">
            </form>