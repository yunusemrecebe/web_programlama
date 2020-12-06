<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Beylidüzü Kırlangıç Bisiklet Spor Kulübü</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://kit.fontawesome.com/ac794817c2.js" crossorigin="anonymous"></script>
	  <link rel="icon" href="" type="image/x-icon" />
	  
	  <script>//kaydet ajax
$(document).ready(function(){
    
    $("#kaydet").click(function(){

        var firstName = $("input[name=firstName]").val();
        var lastName = $("input[name=lastName]").val();
		var mail = $("input[name=mail]").val();
		var password = $("input[name=parola]").val();
		var gsm = $("input[name=tel]").val();
		console.log(firstName,password);
		
        $.ajax({
            url: "userRegistration.php",
            type: "POST",
            data:{
                'firstName':firstName,
				'lastName':lastName,
				'mail':mail,
				'password':password,
                'gsm':gsm
            },
            success: function(result){
                $(".alert").show();
                $(".alert").html(result);
                $("#kayitol").modal('hide');
                $("input[name=tel]").val('');
                $("input[name=sifre]").val('');
                $("input[name=mail]").val('');
                $("input[name=lastName]").val('');
                $("input[name=firstName]").val('');

            },
			fail:function(result){
				$(".alert").show();
				$(".alert").html(result);
			}
        });
    });

});
</script>

</head>

<body class="bg-light">
	<div class="container">
		<div class="text-center my-5 ">
    		<h1 style="font-size:300%;"> Beylikdüzü Kırlangıç Bisiklet Spor Kulübü </h1>
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
                <small>Beylikdüzü Kırlangıç B.S.K.</small>
              </div>  
                        
            </div>
          </div>
          
          <div class="card-body">
            <form action="kontrol.php" method="POST">
						
              <label>E-Mail Adresiniz</label>
              <input class="form-control" type="email" name="kadi" placeholder="E-Mail" required>
              
              <label style="margin-top: 10px;">Şifreniz</label> 
              <input class="form-control" style="margin-bottom: 20px;" type="password" name="sifre" placeholder="Şifre" required>
              
              <img src="img.php" height="25" width="75" style="margin-left:px;"/>
               Doğrulama Kodu: 
              <input size="6" maxlength="6" name="kod" type="text" required />
              
            
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
						<div class="alert"></div>
							<form action="" method="" id="kayitformu">
								<label>Ad</label>
								<input class="form-control" type="text" name="firstName" required>
								<label>Soyad</label>
								<input class="form-control" type="text" name="lastName" required>
								<label>Mail Adresi</label>
								<input class="form-control" type="email" name="mail" required>
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="parola" required>
								<label>Telefon <small style="color:darkgray;">(5xxxxxxxxx şeklinde 10 haneli olacak şekilde giriniz)</small></td></label>
								<input class="form-control" type="text" pattern="\d{10}" name="tel" required>
								
								<br>
								<div class="text-center">
								<input class="btn btn-primary"  type="submit" id="kaydet" onclick="return false" value="Kaydet">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>  



		<!-- Bootstrap gerekli js kodları -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
	</html>