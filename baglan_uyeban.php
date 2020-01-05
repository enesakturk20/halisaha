<?php

error_reporting(0);

$uye_ban=$_POST["uye_ban"];

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
$uyesil = "DELETE FROM kayıt WHERE kullanici_ad='".$uye_ban."'";

if ($conn->query($uyesil) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>