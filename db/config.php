<?php
    global $con;
    $con = mysqli_connect('25.18.108.160','test','password','test');
    if(!$con) {
        die("Connection failed".mysqli_connect_error());
    }
?>