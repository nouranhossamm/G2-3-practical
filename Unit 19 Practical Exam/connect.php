<?php

$conn = mysqli_connect("localhost", "root", "", "exam_db");

if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}

?>
