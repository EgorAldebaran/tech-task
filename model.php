<?php

if(isset($_POST['name'])) {
    $name = $_POST['name'];
}


if(isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}

if(isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}

if(isset($_POST['sex'])) {
    $sex = $_POST['sex'];
}

if(isset($_POST['wage'])) {
    $wage = $_POST['wage'];
}


if(isset($_POST['team'])) {
    foreach($_POST['team'] as $team) {

    }
}

$servername = 'localhost';
$username = 'employeer';
$dbname = 'company';
$password = 'company';

$conn = new mysqli($servername, $username, $dbname, $password);

$sql = "insert into employeer (name, surname, lastname, sex, wage, team, team_id) values ('$name', '$surname', '$lastname', '$sex', $wage, '$team', 101)";
if ($conn->query($sql) === TRUE) {
    echo '<script>console.log("new record create successfylly!!!!")</script>';
}
else {
    echo "fuck you";
}

$conn->close();
