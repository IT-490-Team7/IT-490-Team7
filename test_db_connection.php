<?php

//Establishes connection to MySQL database
function dbConnection(){

    //$dbIP = '';
    //$user = '';
    //$pass = '';

    $connection = mysqli_connect($dbIP, $user, $pass);

    if (!$connection){
        echo "Error connecting to database: ".$connection->connect_errno.PHP_EOL;
        exit(1);
    }
    echo "Connection established to database".PHP_EOL;
    return $connection;
}