<?php
require 'checkfile.php';
checkConf();

echo exec("cd .. && cd data && cat host.txt");