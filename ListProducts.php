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

$sql = "SELECT ProductName,Price,Category FROM add";
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
<html>
<form action="categorySearchOptions.html">
<input type="submit">CATEGORY FILTERING</input>
</form>
<form action="PriceSearch.html">
<input type="submit">PRICE FILTERING - LOW TO HIGH</input>
</form>