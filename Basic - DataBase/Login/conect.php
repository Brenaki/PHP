<?php

$hostname = "localhost";
$database = "logphp";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database, $username, $password);
    if ($mysqli->connect_error) {
        echo "Err Connecting to (" . $mysqli->connect_errorno . ") " . $mysqli->connect_error;
    }
    else {
        echo "Conect!!";
    }