<?php

include('connect.php');

$id = $_GET['team_id'];



$sql = "delete from team where team_id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo '<script>console.log("record success delete!")</script>';
}
else {
    echo "error delete record:"    .$conn->error;
}
