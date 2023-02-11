<?php
$dbUser = 'root'; // User of Dtabase
$dbHost = 'localhost'; // Route or Server
$dbPassword = ''; // pass
$dbName = 'webdev3b'; // DataBase Name


try {
    $connect= mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    echo "connected to database";
} catch (\Throwable $th) {
        echo $th;
}

?>