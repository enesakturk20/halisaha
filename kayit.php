<?php
error_reporting(0);

$db = new PDO("mysql:host=localhost;dbname=halısaha; charset=utf8" ,
"root", "");



$kullanici_ad = $_POST['kullanici_ad'];

$email = $_POST['email'];

$tel_no = $_POST['tel_no'];

$sifre = $_POST['sifre'];

if(!$kullanici_adi || !$email || !$tel_no || !$sifre ) {

//die("Lütfen Boş Alan Bırakmayınız");

}

$ekle = $db->prepare("INSERT INTO kayıt SET kullanici_ad = ? , email = ?, tel_no = ?, sifre = ?");
$ekle->execute([$kullanici_ad , $email , $tel_no , $sifre]);

if ($ekle) {

echo "Kayıt Oldunuz";

}else {
	echo "Bir hata oluştu.";
}

