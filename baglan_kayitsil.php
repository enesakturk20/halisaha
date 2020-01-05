<?php

error_reporting(0);

$sifre=$_POST["sifre"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "halısaha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sil = "DELETE FROM kayıt WHERE sifre='".$sifre."'";

if ($conn->query($sil) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>