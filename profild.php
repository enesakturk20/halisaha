<!DOCTYPE html>
<html lang="en">
<html>

    <head>

        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profil Düzenle</title>

   
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
        .giris {
        
  background-color: green;
  color: white;
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
        <li class="active"><a href="file:///C:/Users/user/Desktop/HTML/%C4%B0lanGiris.html">İlan Girişi <span class="sr-only">(current)</span></a></li>
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
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Üye Ara <span class="caret"></span></a>
          <ul class="dropdown-menu">
          
			
			
			 <div class="form-group">
          <input type="text" class="form-control" placeholder="Üye Ara">
        </div>
        <button type="submit" class="btn btn-default">Ara</button>
      </ul>
	  </li>
	  
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Üye İşlemleri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profili Düzenle</a></li>
            <li><a href="profil.html">Profilim</a></li>
            
			
			
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

<br>
          
          
          
          <div class="container bootstrap snippet">
          <div class="row">
              <div class="col-sm-10"><h1><font color="black">Profilim</font></h1></div>
              <div class="col-sm-2"></div></div>
          
          <div class="row">
              <div class="text-center">
                  <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                  <h6><font color="white">Fotoğraf Değiştir..</font></h6>
                  <input type="file" class="text-center center-block file-upload"></div></div>
          
          <form action="baglan_profil.php" method="POST">
              <div class="form-group">
                  <div class="col-xs-6">
                      <label for="first_name"><h4><font color="white">Ad</font></h4></label>
                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="adınız" title="Adınızı Giriniz"></div></div>

              <div class="form-group"><div class="col-xs-6">
                  <label for="last_name"><h4><font color="white">Soyad</font></h4></label>
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="soyadınız" title="Soyadınızı Giriniz"></div></div>
              
              <div class="form-group"><div class="col-xs-6">
                  <label for="phone"><h4><font color="white">Telefon</font></h4></label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="telefon" title="enter your phone number if any."></div></div>
              
              <div class="form-group"><div class="col-xs-6">
                  <label for="mobile"><h4><font color="white">Yaş</font></h4></label>
                  <input type="number" class="form-control" name="age" id="age" placeholder="yaş" title="enter your mobile number if any."></div></div>
              
              <div class="form-group"><div class="col-xs-6">
                  <label for="email"><h4><font color="white">Email</font></h4></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="emailiniz giriniz"></div></div>
              
              <div class="form-group"><div class="col-xs-6">
                  <label for="mevkii"><h4><font color="white">Oynadığınız Mevkii</font></h4></label>
                  <input type="text" class="form-control" name="mevkii" id="mevkii" placeholder="mevkii" title="Oynadığınız mevkii"></div></div>
                          
              <div class="form-group"><div class="col-xs-6">
                  <label for="password"><h4><font color="white">Şifre</font></h4></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="şifre" title="enter your password."></div></div>
              
              <div class="form-group"><div class="col-xs-6">
                  <label for="password2"><h4><font color="white">Uyruk</font></h4></label>
                  <input type="text" class="form-control" name="uyruk" id="uyruk" placeholder="uyruk" title="enter your password2."></div></div>
              
              <div class="form-group"><div class="col-xs-6">
                  <label for="mevkii"><h4><font color="white">Kullandığı Ayak</font></h4></label>
                  <input type="text" class="form-control" name="ayak" id="ayak" placeholder="kullanılan ayak" title="Oynadığınız mevkii"></div></div>
              
              <div class="form-group"><div class="col-xs-12"><br>
                 
                  
              
        <li> <button type="submit" >Kaydet</button></li> 
         <li> <button type="submit" >Hesabı Sil</button></li> 
          
              	
          </form>
          </div>
	</body>
</html>