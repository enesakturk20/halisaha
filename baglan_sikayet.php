<?php
error_reporting(0);
session_start();

//İlan girişi veri saklama
$sikayet=$_POST["sikayet"]; 
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$reports=$_POST["reports"];
$subject=$_POST["subject"];
//


//veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname="halısaha";

$connn = new mysqli($servername, $username, $password, $dbname);

if ($connn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
}
//


$sql = "INSERT INTO sikayetler ( sikayet_edilen_kullanici, ad, soyad, sikayet_nedeni, diger)
VALUES ('". $sikayet ."','". $firstname ."','". $lastname."','". $reports ."','".$subject ."')";

if ($connn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo  $connn->error;
}

$connn->close();


?>