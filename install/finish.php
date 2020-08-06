<!DOCTYPE html>
<html>
    <head>
        <title>Setup - TuckerDesk</title>
        <link href="/styles/default.css" rel="stylesheet" />
    </head>
    <body>
        <center>
            <br>
            <h1>Installation Complete - TuckerDesk</h1>
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

$title = $_POST['name'];
$logo = $_POST['url'];
$description = $_POST['desc'];
$conn = new mysqli($host, $username, $password, $database);

$_COOKIE['host'] = "deleted";
$_COOKIE['username'] = "deleted";
$_COOKIE['password'] = "deleted";
$_COOKIE['database'] = "deleted";

// Check connection
if ($conn->connect_error) {
  die("<h2>Sorry, the connection failed. MySQL Errors:</h2><br><code> " . $conn->connect_error . "</code><br><br><button onclick='window.history.back();'>Go Back</button><div display='none'>");
}

$sql = "use ${database};";

if ($conn->query($sql) === TRUE) {
  echo "Table created.";
} else {
  echo "Source Creation Error: " . $sql . "<br>" . $conn->error;
}


$sql = "source create.sql;";

if ($conn->query($sql) === TRUE) {
    echo "Table created.";
  } else {
    echo "Table Creation Error: " . $sql . "<br>" . $conn->error;
  }

$sql = "INSERT INTO details (title, logo, description)
VALUES ('${title}', '${logo}', '${description}')";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted.";
  } else {
    echo "Data Insert Error: " . $sql . "<br>" . $conn->error;
  }

exec("cd ..");
exec("touch tuckerconf.php");
exec("echo $password = ${password} >> tuckerconf.php");
exec("echo $username = ${username} >> tuckerconf.php");
exec("echo $host = ${host} >> tuckerconf.php");
exec("echo $database = ${database} >> tuckerconf.php");

  echo "<h2>Your installation is all done. Click below to start adding articles.</h2>";

$conn->close();

