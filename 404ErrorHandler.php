<?php

// This is the 404 Handling Page
// It checks if the tuckerconf file exisits, then redirects you to the homepage if you don't.

if(!file_exists("tuckerconf.php")){
    header("Location: /");
    die();
}else{
    echo "<center><h1>404 - Not Found</h1></center>";
}