


<!DOCTYPE html>
<html lang="en">
<html>

    <head>

        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Giriş Yapılmış Anasayfa</title>

   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    </head>
	<style>
      h1{
          color: floralwhite
      }
	  </style>
	  
	  <body>
    
      <BODY style="background:url(bbb.jpeg) center no-repeat fixed;">  
	  
  
  
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-">
       <a href="" class="navbar-brand">
         
          <h1> <b> Halısaha Adam Bul </b></h1>
       </a>
       
   </nav>
    <br>-->
	
    
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      


      <a class="navbar-brand" href="#">Anasayfa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
         <li class="active"><a href="#">S.S.S. <span class="sr-only">(current)</span></a></li>
        <!--<li><a href="#">Link</a></li>-->
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Üyelik İşlemleri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Arama">
        </div>
        <button type="submit" class="btn btn-default">Ara</button>
      </form>
	  
	  <ul class="nav navbar-nav navbar-right">
	  
	  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">İlan <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="file:///C:/Users/user/Desktop/HTML/%C4%B0lanGiris.html">İlan Girişi</a></li>
            <li><a href="file:///C:/Users/user/Desktop/HTML/%C4%B0lanD%C3%BCzenleme.html">İlanlarım</a></li>
			
			
		 </ul>
        </li>
	  
	  
	  
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Üye İşlemleri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profili Düzenle</a></li>
            <li><a href="#">Üye Yorumlama</a></li>
            <li><a href="#">Şikayet</a></li>
            <li><a href="#">Kullanıcı Engelle</a></li>
			
			
          </ul>
        </li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin İşlemleri <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="file:///C:/Users/user/Desktop/HTML/%C4%B0lanSil.html#">İlan Silme</a></li>
            <li><a href="file:///C:/Users/user/Desktop/HTML/UyeBan.html#">Üye Ban</a></li>
			
		 </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Örnek İlan - 1</h4>
  <p>Saha İsmi : Batıkent</p>
  <p>Tarih : 29.11.2019</p>
  <p>Saat : 20:00</p>
  <p>Mevkii : Kaleci ve Forvet
  <p>Ek Bilgi : ...</p>
  <p> <div style="margin-left:px;"><button onclick="window.location.href='#'">+ İlana Başvur</button>	</div>
  
  
</div>

<?php

error_reporting(0);

$firstname=$_POST["firstname"];
$saha=$_POST["saha"];
$bdaytime=$_POST["bdaytime"];
$mevkii=$_POST["mevkii"];
$subject=$_POST["subject"];
?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"></h4>
  <?php  
echo $firstname."<br>";
echo "Saha İsmi : ".$saha."<br>";
echo "Tarih ve Saat : ".$bdaytime."<br>";
echo "Mevkii : ".$mevkii."<br>";
echo "Ek Bilgi : ".$subject."<br>";

?>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	
	</body>
	
	




</html>