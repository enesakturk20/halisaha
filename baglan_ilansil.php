<?php

error_reporting(0);

$ilan_sil=$_POST["ilan_sil"];

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
$ilansil = "DELETE FROM ilan WHERE ilan_basligi='".$ilan_sil."'";

if ($conn->query($ilansil) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>