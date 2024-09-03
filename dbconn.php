<?php
$host = 'localhost'; // Change if using a different host
$db = 'workshop_registration';
$user = 'root'; // Change to your database username
$pass = ''; // Change to your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}