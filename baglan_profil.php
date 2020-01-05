<?php

session_start();
error_reporting(0);

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$phone=$_POST["phone"];
$age=$_POST["age"];
$email=$_POST["email"];
$mevkii=$_POST["mevkii"];
$password=$_POST["password"];
$uyruk=$_POST["uyruk"];
$ayak=$_POST["ayak"];


//veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname="halısaha";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//


//echo $first_name."<br>".$last_name."<br>".$phone."<br>".$age."<br>".$email."<br>".$mevkii."<br>".$password."<br>".$uyruk."<br>".$ayak;

$duzenle= "INSERT INTO profil (ad, soyad, tel, yas, email, mevkii, sifre, uyruk, ayak) 
VALUES('".$first_name."','".$last_name."','".$phone."','".$age."','".$email."','".$mevkii."','".$password."','".$uyruk."','".$ayak."')";


if ($conn->query($duzenle) === TRUE) {
    echo "New record created successfully";
} else {
    echo  $conn->error;
}

$conn->close();



?>