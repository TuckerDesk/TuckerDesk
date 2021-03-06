
<?php
/*

(c) Copyright 2020 Riverside Rocks and TuckerDesk Authors
This code is under the Apache 2.0 License
See the "LICENSE" file for more details

*/


/*

Useful tip:

To change the server into development mode for testing, visit the dev.txt
file and change it to "true".

*/

// Check if installation file exists.
$code = 'window.location.replace("install/index.php");';
$toggle = file_get_contents("data/dev.txt");
if($toggle = "false"){ // Checks that the server is in production mode
    if(!file_exists("tuckerconf.php")){
      echo "<script>" . $code . "</script>";
    }else{

      /*

      This is the code to run when the server passes the production mode check
      and the tuckerconf.php file exists

      */

      require "tuckerconf.php";
      echo "<script src='js/prodmode.js'></script>";
      $conn = new mysqli($host, $username, $password, $database); // Create a connection to the database with the stored values in tuckerconf.php
      if ($conn->connect_error) {
        die("<h2>Sorry, something went wrong. Please report error 2 and this code to our <a href='https://github.com/TuckerDesk/TuckerDesk/issues' />Github</a>:</h2><br><code> " . $conn->connect_error . "</code><br>");
      }

      $sql = "SELECT title FROM ${database}";

      /*

      Work on this part later...

      */

    }
  }else{
    // Do not redirect, the server is in non-production mode.
    echo "<script src='js/devmode.js'></script>";

  $title = "Dev Test";
  $desc = "This is the support center for developer testing.";
  $url = "https://riverside.rocks/logo.jpg";

}
?>
