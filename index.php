
<?php
/*

(c) Copyright 2020 Riverside Rocks and TuckerDesk Authors
This code is under the Apache 2.0 License
See the "LICENSE" file for more details

*/


// Check if installation file exists.

if(!file_exists("tuckerconf.php")){
  echo "<script>" . exec("cat redirect.js") . "</script>";
}
?>
