<!DOCTYPE html>
<html>
    <head>
        <title>Installation - TuckerDesk</title>
    </head>
    <body>
        <center>
            <br>
            <h1>Install - TuckerDesk</h1>
            <h2>Let get started by setting up the database</h2>
            <form action="run.php">
                <label for="host">MySQL Host:</label><br>
                <input type="text" id="host" name="host" value="localhost"><br>
                <label for="user">MySQL Username:</label><br>
                <input type="text" id="user" name="user" value="root"><br><br>
                <label for="pass">MySQL Password:</label><br>
                <input type="password" id="pass" name="pass"><br><br>
                <label for="data">MySQL Database:</label><br>
                <input type="text" id="data" name="data" value="tuckerdesk"><br><br>
                <input type="submit" value="Submit">
            </form>
            <?php
            $ver = phpversion();
            $php = substr($ver,0,6);
            if($php > 7){
                echo "<h3>Good, it looks like you are running " . $php "</h3>";
            }else{
                echo "<h3 class='error'>Your php version, " . $php . " is outdated. Consider upgrading.</h3>";
            }
            ?>
        </center>
    </body>

<?php
/*

(c) Copyright 2020 Riverside Rocks and TuckerDesk Authors
This code is under the Apache 2.0 License
See the "LICENSE" file for more details

*/

