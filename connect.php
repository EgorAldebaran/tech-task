<?php

$servername = 'localhost';
$username = 'employeer';
$password = 'company';
$dbname = 'company';

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die('connect failed: '.$conn->connect_error);
}
