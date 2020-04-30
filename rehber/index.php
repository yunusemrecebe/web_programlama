<?php
session_start();
?>

<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Yunus Bilişim</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

</head>

<body style="background: url('images/background.jpg') no-repeat center center fixed; 
background-size: cover;">
	<div class="container-fluid">
		<div style="width: 700px; height: 480px; position: absolute; top: 21%; left: 32%; background-color: rgba(255, 255, 255, 0.3); border-radius: 10%;"> <!-- Orta div -->
		<h1 class="text-center;" style="text-align: center; font-size: 64px; margin-top: 3%;">Yunus Bilişim LTD. ŞTİ.</h1>
		<h3 class="text-center;" style="text-align: center; font-size: 48px; margin-bottom: 5%;">Hoş Geldiniz</h3>
			
			<div class="col">
				<div class="col" style="width: 420px; height: 350px; margin: auto;"> <!-- Üye giriş formu -->
					<form action="kontrol.php" method="POST" style="color: white; text-shadow: 1px 1px black; margin-top:-10px;">
						
						<label>E-Mail Adresiniz</label>
						<input class="form-control" type="text" name="kadi" placeholder="E-Mail" required>
						
						<label style="margin-top: 10px;">Şifreniz</label> 
						<input class="form-control" style="margin-bottom: 20px;" type="password" name="sifre" placeholder="Şifre" required>
						
						<img src="img.php" height="25" width="75" style="margin-left:10px;"/>
						Doğrulama Kodunu Giriniz: <input size="6" maxlength="6" name="kod" type="text" />
						
						<br><br>
						
						<button type="submit" class="btn btn-primary" style="margin-left: 23%;">Giriş Yap</button>
						<button type="button" class="btn btn-primary" style="margin-left: 8%;" data-toggle="modal" data-target="#kayitol"> Kayıt Ol </button>
						<h6 style="text-align:center; opacity:0.5; margin-top:7px;"><a href="https://www.linkedin.com/in/yunusemrecebe" target="_blank" style="color:#fff;">Yunus Emre CEBE tarafından hazırlandı.</a></h6>
						
					</form>
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
						<div class="modal-body">
							<form action="kaydet.php" method="POST">
								<label>Ad Soyad</label>
								<input class="form-control" type="text" name="kadi" required>
								<label>Mail Adresi</label>
								<input class="form-control" type="email" name="mail" required>
								<label>Telefon</label>
								<input class="form-control" type="number" name="tel" required>
								<label>Adres</label>
								<input class="form-control" type="text" name="adres" required>
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="sifre" required>
								<br>
								<button type="submit" class="btn btn-success">Kayıt Ol</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
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