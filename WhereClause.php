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

$sql = "SELECT * FROM `phptrip` WHERE `Dest`='Bihar';";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num . " records found in the database <br>";

// Display the rows returned by the sql query
if ($num > 0) {

    // We can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
       // echo var_dump($row);
       $no = 1;
        echo $row['Sr.No.'] . ". Hello " . $row['Name'] . " Welcome to " . $row['Dest'];
        echo "<br>";
        $no = $no + 1;
    }
}

// Use of WHERE Clause to Update Data
$sql = "UPDATE `phptrip` SET `Name` = 'FromBihar' WHERE `Dest` = 'Bihar'";
$result = mysqli_query($conn, $sql);

echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";
if ($result) {
    echo "We updated the record successfully";
} else {
    echo "We could not update the record successfully";
}
?>