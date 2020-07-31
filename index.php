
<?php
/*

(c) Copyright 2020 Riverside Rocks and TuckerDesk Authors
This code is under the Apache 2.0 License
See the "LICENSE" file for more details

*/


// Check if installation file exists.
$code = 'window.location.replace("install/index.php");';
if(!file_exists("tuckerconf.php")){
  echo "<script>" . $code . "</script>";
}
?>
