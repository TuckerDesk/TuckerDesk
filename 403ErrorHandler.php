<?php

// This is the 403 Handling Page
// It checks if the tuckerconf.php file exisits, then redirects you to the homepage if you don't.

if(!file_exists("tuckerconf.php")){
    header("Location: /");
    die();
}else{
    echo "<center><h1>403 - Forbidden</h1></center>";
}