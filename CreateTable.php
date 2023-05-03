<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbvinayak";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful <br>";
}

// Create a table in the db
$sql = "CREATE TABLE `phptrip` (`Sr.No.` INT(6) NOT NULL AUTO_INCREMENT , 
`Name` VARCHAR(12) NOT NULL , `Dest` VARCHAR(6) NOT NULL , 
PRIMARY KEY (`Sr.No.`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation
if ($result) {
    echo "The table was created successfully!";
} else {
    echo "The table was not created successfully because of this eroor ---> " . mysqli_error($conn);
}
?>