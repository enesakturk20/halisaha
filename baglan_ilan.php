<?php

session_start();

//İlan girişi veri saklama
$firstname=$_POST["firstname"]; 
$saha=$_POST["saha"];
$bdaytime=$_POST["bdaytime"];
$mevkii=$_POST["mevkii"];
$subject=$_POST["subject"];
//




//veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname="halısaha";

$connn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
}
//



$sql = "INSERT INTO ilan ( ilan_basligi, saha, tarih_saat, mevkii, ekbilgi)
VALUES ('". $firstname ."','". $saha ."','". $bdaytime."','". $mevkii ."','".$subject ."')";
//


//ilan
if ($connn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo  $connn->error;
}

$connn->close();
//
?>