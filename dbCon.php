<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tutorfinder";

    $con = mysqli_connect($host, $user, $pass, $db);

    if(!$con)
    {
        die("Error...");
    }
?>