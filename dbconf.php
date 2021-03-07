<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection


// Check connection

function connect(){
    $conn = new mysqli('localhost', 'root','','sms');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}