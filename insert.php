<?php

include('connect.php');

$sql = "insert into employeer values ('0', 'queen', 'diamonds', 'lisper', 'man', 101, 'manager');";

if ($conn->multi_query($sql) === TRUE) {
    echo '<script>console.log("new records created successfully")</script>';
}
else {
    echo "oho ho error "    .$sql.'<br>'.$conn->error;
}

$conn->close();
