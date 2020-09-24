<?php

$name = htmlentities(trim($_POST['name']));
$surname = htmlentities(trim($_POST['surname']));
$lastname = htmlentities(trim($_POST['lastname']));
$sex = htmlentities(trim($_POST['sex']));
$wage = htmlentities($_POST['wage']);
$group = htmlentities(trim($_POST['group']));

include('insert.php');

echo 'test';
