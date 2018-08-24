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

// sql to create table
$sql="CREATE TABLE add(ProductName VARCHAR(30) NOT NULL,Price VARCHAR(30) NOT NULL,Category VARCHAR(30) NOT NULL,quantity NUMBER(20),PurchaseDate VARCHAR(30) NOT NULL,ExpiryDate VARCHAR(30) NOT NULL)";

if($conn->query($sql)===TRUE){
echo "Table add created succesfully";
}
else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>