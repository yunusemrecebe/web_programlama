<?php
session_start();
$_SESSION['durum']=0;
?>

<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Yunus Bilişim</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<script src="https://kit.fontawesome.com/ac794817c2.js" crossorigin="anonymous"></script>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

</head>

<body class="bg-light">
  
  <div class="container">

  <div class="text-center my-5 ">
    <h1 style="font-size:300%;"> YUNUS BİLİŞİM SİSTEMLERİ LTD. ŞTİ. REHBER SİSTEMİ </h1>
  </div>
    
    <!-- GİRİŞ YAPMA EKRANI -->
    <div class="row my-5">
      <div class="my-5 col-md-4 offset-md-4 ">
        
        <div class="card my-5">
          <div class="card-header">
            <div class="row">
              
              <div class="col-md-3">
                <h3><span class="fa fa-sign-in fa-2x"></span></h3>
              </div>
              <div class="col-md-9 text-right">
                <h2>Giriş Yap</h2>
                <small>Yunus Bilişim Hizmetleri LTD. ŞTİ.</small>
              </div>  
                        
            </div>
          </div>
          
          <div class="card-body">
            <form action="kontrol.php" method="POST">
						
              <label>E-Mail Adresiniz</label>
              <input class="form-control" type="email" name="kadi" placeholder="E-Mail" required>
              
              <label style="margin-top: 10px;">Şifreniz</label> 
              <input class="form-control" style="margin-bottom: 20px;" type="password" name="sifre" placeholder="Şifre" required>
              
              <img src="img.php" height="25" width="75" style="margin-left:10px;"/>
              Doğrulama Kodu: <input size="6" maxlength="6" name="kod" type="text" required />
              
            
          </div>

          <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kayitol"> Kayıt Ol </button>
          </form>
          </div>
          
        </div>
        <h6 class="text-center"><a class="text-muted" href="https://www.linkedin.com/in/yunusemrecebe" target="_blank">Yunus Emre CEBE tarafından hazırlandı.</a></h6>
      </div>
    </div>
		
			
			<!-- KAYIT OLMA PENCERESİ -->
			<div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Kayıt Ol</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body ">
							<form action="kaydet.php" method="POST">
								<label>Ad Soyad</label>
								<input class="form-control" type="text" name="kadi" required>
								<label>Mail Adresi</label>
								<input class="form-control" type="email" name="mail" required>
								<label>Telefon <small style="color:darkgray;">(5xxxxxxxxx şeklinde 10 haneli numara giriniz)</small></td></label>
								<input class="form-control" type="text" pattern="\d{10}" name="tel" required>
								<label>Adres</label>
								<input class="form-control" type="text" name="adres" required>
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="sifre" required>
								<br>
								<div class="text-center">
								<button type="submit" class="btn btn-primary">Kayıt Ol</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>  

		<!-- Bootstrap gerekli js kodları -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
	</html>
