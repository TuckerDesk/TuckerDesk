<?php

function checkConf() {
    $code = 'window.location.replace("install/index.php");';
    if(!file_exists("tuckerconf.php")){
        echo "<script>" . $code . "</script>";
    }
}