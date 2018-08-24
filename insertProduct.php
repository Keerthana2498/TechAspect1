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
if(isset($_POST['ADD']))
{
    $sql = "INSERT INTO add(ProductName,Price,Category,quantity,PurchaseDate,ExpiryDate)
    VALUES ('".$_POST["pname"]."','".$_POST["price"]."','".$_POST["category"]."','".$_POST["quantity"]."','".$_POST["purchaseDate"]."','".$_POST["expiryDate"]."')";

    $result = mysqli_query($conn,$sql);
}

if ($conn->query($result) === TRUE) {
    echo "Product added succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>