<?php

session_start();

error_reporting(0);

$db = new PDO("mysql:host=localhost;dbname=halısaha; charset=utf8" ,
"root", "");

$kullanici_ad = $_POST["kullanici_ad"];
$tel_no = $_POST["tel_no"];
$sifre = $_POST["sifre"];

if (!$kullanici_ad || !$tel_no || !$sifre) {

die("Boş Alan Bırakmayınız!");
	
	}

	$user = $db->query("SELECT * FROM kayıt WHERE kullanici_ad = '$kullanici_ad' AND tel_no = '$tel_no' AND sifre = '$sifre'")->fetch();

	if ($user) {

		$_SESSION['user'] = $user;

		header("location:GirisYapılmısAnasayfa.php");

		var_dump($user);
	}else {

		echo "Bilgiler Hatalı";
	}



