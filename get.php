<?php

include "./conn.php";

$query = "SELECT * FROM region";
$exec = mysqli_query($conn, $query);
$result = [];

while ($fetch = mysqli_fetch_object($exec)) {
    array_push($result, $fetch);
}

header("Content-Type: application/json");
echo json_encode($result);