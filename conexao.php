<?php
$host ='localhost';
$user ='root';
$password ='';
$db ='bdagenda';

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_error) {
    die('Connection error: ' . $mysqli->connect_error);
}
?>
