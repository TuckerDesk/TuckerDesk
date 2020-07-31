<?php
require 'checkfile.php';
checkConf();

$myfile = fopen("/data/host.txt", "r") or die("Something went wrong...");
echo fread($myfile,filesize("/data/host.txt"));
fclose($myfile);