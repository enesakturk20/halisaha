<?php


 require_once ('src/facebook.php'); 
 
 $ayarlar = array(
 	'appId' => '529168281031246',
 	'secret' => 'a7b6a1115797ccaf1381fd0c3c82c57d'
 
 );

 $facebook =new Facebook($ayarlar);

 $uyeKimligi = $facebook->getUser();

 if ($uyeKimligi)
 {

 }
 else 
 {
 	$izinAyar = array(
'scope' => 'user_relationship', 
'redirect_uri' => 'http://localhost/facebook/'

 	);

 	$link = $facebook -> getLoginUrl($izinAyar);
 	Header("Location:".$link);

 }
 	



?>
