<?php

    $host = "localhost";
    $username= "root";
    $password = "";
    $db_name = "resolute";

    $conn = mysqli_connect($host, $username, $password, $db_name);

    if (mysqli_connect_errno()) {
        echo "database not connected". mysqli_connect_error();
    }
?>