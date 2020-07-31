<?php

function checkConf() {
    $code = 'window.location.replace("/");';
    if(file_exists("tuckerconf.php")){
        echo "<script>" . $code . "</script>";
    }
}