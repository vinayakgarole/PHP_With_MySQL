<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful <br>";
}

// Create a DB
$sql = "CREATE DATABASE dbVinayak";
$result = mysqli_query($conn, $sql);

// Check for the Database connection
if ($result) {
    echo "The DB was created successfully! <br>";
} else {
    echo "The DB was not created successfully because of this eroor ---> " . mysqli_error($conn);
}
?>