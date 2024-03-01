<?php

$host ='localhost';
$user ='root';
$password ='';
$db ='bdagenda';

// Create a new mysqli object
$mysqli = new mysqli($host, $user, $password, $db);

// Check for errors
if ($mysqli->connect_error) {
    die('Connection error: ' . $mysqli->connect_error);
}

?>