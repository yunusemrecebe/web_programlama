<?php 
include("baglan.php");
include("log.php");
session_start(); 
if ($_SESSION['durum']==1){
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Yunus Bilişim</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Kapat &times;</button>
  <a href="kisiler.php" class="w3-bar-item w3-button">Kişiler</a>
  <a href="gruplar.php" class="w3-bar-item w3-button">Gruplar</a>
  <a href="log_listele.php" class="w3-bar-item w3-button">İşlem Logları</a>
  <a href="cikis.php" class="w3-bar-item w3-button">Çıkış Yap  <i class="fa fa-sign-out" style="font-size:18px"></i></a>
</div>

<div id="main">


<div class="bg-primary text-white">
  <button id="openNav" class="w3-button bg-primary w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <img src="images/yunus_ust.png" alt="yunus" style="width: 50px; height: 50px; float:left; margin-top:-50px; margin-left: 50px;"/>
    <h1 style="float: left; margin-top:-50px; margin-left: 110px;">Yunus Bilişim Hizmetleri - Rehber Sistemi</h1>
  </div>
</div>
<!-- GRUP ADI GÖSTER VE GÜNCELLE  -->
<?php 
	$query = $db->query("SELECT * FROM gruplar WHERE ad = '{$_GET['ad']}' AND sahip='{$_SESSION['kullanici']}'")->fetch(PDO::FETCH_ASSOC);
	if ( $query ){
    	$veri_grup_ad = ($query['ad']);
	}
?>

<div class="container-fluid">
<div class="col">

<form action="" method="post">
	<h1>Grup Adı Güncelleme</h1>
	<table class="table">
		
		<tr>
			<td>Grup Adı:</td>
			<td><input type="text" name="up_form_ad" class="form-control" value="<?php echo $veri_grup_ad; ?>" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="Güncelle"></td>
		</tr>

	</table>

</form>
</div>
<div>
<?php 
// GRUP ADI GÜNCELLE DB AKTARIM
if ($_POST) { 
	
    $up_form_grup_ad = $_POST['up_form_ad'];
	

	if ($up_form_grup_ad<>"") { 
		//Grup Adı DB'de kayıtlı mı kontrolü
		$grup_ara=$db->query("SELECT * from gruplar where ad like '{$up_form_grup_ad}' AND sahip='{$_SESSION['kullanici']}'");
    	if($grup_ara->rowCount()){
			echo "<script type='text/javascript'>alert('Aynı isimde bir grup zaten var!');</script>";
		}
		else{
			if 	($db->query("UPDATE gruplar SET ad = '$up_form_grup_ad' WHERE ad = '{$_GET['ad']}' AND sahip='{$_SESSION['kullanici']}'") && 
				($db->query("UPDATE kisiler SET grup = '$up_form_grup_ad' WHERE grup = '{$_GET['ad']}' AND sahip='{$_SESSION['kullanici']}'")))
			{
				echo "<script type='text/javascript'>alert('Güncelleme İşlemi Başarılı!');</script>";
				//GRUP ADI GÜNCELLENDİ LOG BİLGİSİ
				$l_ad1 = $veri_grup_ad;
				$l_ad2 = $up_form_grup_ad;
				$islem="'{$l_ad1}' adlı grubun adı '{$l_ad2}' olarak güncellendi.";
				$kullanici = $_SESSION['kullanici']; 

				log_islem($islem,$kullanici);
				Header("Refresh: 0.1; url=gruplar.php");
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('Bir Hata Oluştu!');</script>";
			}
		}

	}

}



?>
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
<?php
}
else{
    echo "<script type='text/javascript'>alert('Oturum Açmadınız!');</script>";
    Header("Refresh: 0.1; url=index.php");	
}
?>