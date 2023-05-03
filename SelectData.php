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

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database";
echo "<br>";

// Display the rows returned by the sql query
if ($num > 0) {
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // We can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
       // echo var_dump($row);
       echo $row['Sr.No.'] . ". Hello " . $row['Name'] . " Welcome to " . $row['Dest'];
        echo "<br>";
    }
}
?>