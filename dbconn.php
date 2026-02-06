<?php
$conn = new mysqli("localhost", "root", "", "task3_sqldemo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>