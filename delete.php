<?php

include "./conn.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM region WHERE id='$id'");