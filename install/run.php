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
require 'checkfile.php';
checkConf();

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
echo "<i>Important: You MUST let all folders in this directable be writeable by TuckerDesk! Bad things will happen if you do not.</i>";

/*

This next step puts mysql details into text files.

Don't panic! The data directory is not avalible on the inter

You must grant write access to this directory.


*/

exec("cd .. && cd data");
exec("${host} > host.txt");
exec("${username} > username.txt");
exec("${password} > password.txt");
exec("${database} > database.txt");

/*

Keep in mind that if these these are not made VERY BAD THINGS WILL HAPPEN!
(in other words, the program will be unable to connect to the database, none of the login/setup details will be saved...)

*/


?>
            <form method="post" action="run.php">
                <label for="name">Support Center Name:</label><br>
                <input type="text" id="name" name="name" value="My Support Center"><br>
                <label for="url">Logo URL:</label><br>
                <input type="text" id="url" name="url" value="http://example.com/logo.jpg"><br><br>
                <label for="adminuser">Admin Username:</label><br>
                <input type="text" id="adminuser" name="adminuser" value="Admin"><br><br>
                <label for="adminpass">Admin Password:</label><br>
                <input type="text" id="adminpass" name="adminpass" value="abcdefg"><br><br>
                <input type="submit" value="Submit">
            </form>

<?php
