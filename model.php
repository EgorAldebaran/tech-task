<?php

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "your name is ";
    echo $name;
    echo "<br>";
}


if(isset($_POST['surname'])) {
    $surname = $_POST['surname'];
    echo "your surname is ";
    echo $surname;
    echo "<br>";
}

if(isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
    echo "your lastname is ";
    echo $lastname;
    echo "<br>";
}

if(isset($_POST['sex'])) {
    $sex = $_POST['sex'];
    echo "your sex is ";
    echo $sex;
    echo "<br>";
}

if(isset($_POST['wage'])) {
    $wage = $_POST['wage'];
    echo "your wage is ";
    echo $wage;
    echo "<br>";
}


if(isset($_POST['team'])) {
    foreach($_POST['team'] as $team) {
        echo "your choice is ";
        echo $team;
    }
}

$servername = 'localhost';
$username = 'employeer';
$dbname = 'company';
$password = 'company';

$conn = new mysqli($servername, $username, $dbname, $password);

$sql = "insert into employeer (name, surname, lastname, sex, wage, team, team_id) values ('$name', '$surname', '$lastname', '$sex', $wage, '$team', 101)";
if ($conn->query($sql) === TRUE) {
    echo "<br>new record created successfylly";
}
else {
    echo "fuck you";
}

$conn->close();
