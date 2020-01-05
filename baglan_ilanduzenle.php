<?php

error_reporting(0);

$number=$_POST["number"];
$firstname=$_POST["firstname"]; 
$saha=$_POST["saha"];
$bdaytime=$_POST["bdaytime"];
$mevkii=$_POST["mevkii"];
$subject=$_POST["subject"];


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

$duzen = "UPDATE ilan SET saha='".$saha."' WHERE ilan_no='".$number."'";

if ($conn->query($duzen) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>