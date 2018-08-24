<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CONVERT(`ProductName`,`Price`,`Category`, CHAR(50)) as `Price` from `add` WHERE CONVERT(`Price`, CHAR(50)) <=12000 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Product Name: " . $row["ProductName"]. " - Price: " . $row["Price"]. " -Category " . $row["Category"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>