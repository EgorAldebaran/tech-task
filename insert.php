<?php

include('connect.php');

$sql = "insert into employeer (name, surname, lastname, sex, wage, team, team_id) values('$name', '$surname', '$lastname', '$sex', $wage, '$team', 101)";

if ($conn->multi_query($sql) === TRUE) {
    echo '<script>console.log("new records created successfully")</script>';
}
else {
    echo "oho ho error "    .$sql.'<br>'.$conn->error;
}

$conn->close();
