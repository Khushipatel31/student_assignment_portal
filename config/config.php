<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "student_assignment_portal";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
} catch (PDOException $e) {
    
    die();
}
