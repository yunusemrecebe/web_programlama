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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Yunus Bilişim</title>
<link rel="stylesheet" href="style/style.css" type="text/css">
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

<!-- Log Seçimi -->

<div class="container-fluid">
    <div class="col">
        <form action="" method="post">
    
            <table class="table">
                
                <tr>
                <td style="width: 10%;">Listelenecek Log Dosyası:</td>
                <td style="width: 30%;">
                    <select name="secim" class="custom-select">
                    <option selected>Seçiniz</option>
                    <option value="1">Üye Giriş/Çıkış İşlemleri</option>
                    <option value="2">Rehber Kişileri İşlemleri</option>
                    </select></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input class="btn btn-primary"  type="submit" value="Göster"></td>
                </tr>

            </table>
        </form>
    </div>


<!-- SEÇİLEN LOG DOSYASINA GÖRE SAYFA SAYISI HESAPLAMA -->


<!-- Üye Giriş Çıkış Log LİSTELE -->
<?php
if ($_POST['secim']==1){
?>
<div class="col my-5">
    <h1 class="text-center text-primary">Görüntülenen Log Dosyası: Üye Giriş/Çıkış İşlemleri</h1>
    <h5 class="text-center text-secondary my-3">Son 25 İşlem Görüntülenmektedir.</h5>    
<table class="table my-4">
	
	<tr>
		<th>Yapılan İşlem</th>
		<th>İşlemi Yapan Kişi</th>
        <th>İşlem Zamanı</th>
        <th>Yapan Kişinin IP Adresi</th>
	</tr>

<?php 

    $islem = "Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.";
    $kullanici = $_SESSION['kullanici'];
    log_islem($islem,$kullanici);

    $sorgu = $db->query("SELECT * FROM log_islem_uyeler ORDER BY log_id DESC LIMIT 25");

    while ( $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC) ){ 
        $uye_islem_tip = $sonuc['uye_islem_tipi'];
        $uye_islem_kisi = $sonuc['uye_islem_kisi'];
        $uye_islem_zaman = $sonuc['uye_islem_zaman'];
        $uye_islem_ip = $sonuc['uye_islem_ip'];
?>
        
        <tr>
            <td><?php echo $uye_islem_tip; ?></td>
            <td><?php echo $uye_islem_kisi ?></td>
            <td><?php echo $uye_islem_zaman; ?></td>
            <td><?php echo $uye_islem_ip; ?></td>
        </tr>

<?php
    }
}
?>

<!-- Rehber Kişi İşlemleri Log LİSTELE -->
<?php
if ($_POST['secim']==2){
?>
<div class="col my-5">
    <h1 class="text-center text-primary">Görüntülenen Log Dosyası: Rehber Kişileri İşlemleri</h1>
    <h5 class="text-center text-secondary my-3">Son 25 İşlem Görüntülenmektedir.</h5>    
<table class="table my-4">
	
	<tr>
		<th>Yapılan İşlem</th>
		<th>İşlemi Yapan Kişi</th>
        <th>İşlem Zamanı</th>
        <th>İşlemi Yapan Kişinin IP Adresi</th>
	</tr>

<?php 

    $islem = "Rehber Kişileri İşlemleri Log Tablosu Listelendi.";
    $kullanici = $_SESSION['kullanici'];
    log_islem($islem,$kullanici);

    $sorgu = $db->query("SELECT * FROM log_islem ORDER BY log_islem_id DESC LIMIT 25");

    while ( $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC) ){ 
        $rehber_islem_tip = $sonuc['islem_tipi'];
        $rehber_islem_kisi = $sonuc['islem_kisi'];
        $rehber_islem_zaman = $sonuc['islem_zaman'];
        $rehber_islem_ip = $sonuc['islem_ip'];
?>
        
        <tr>
            <td ><?php echo $rehber_islem_tip; ?></td>
            <td><?php echo $rehber_islem_kisi ?></td>
            <td><?php echo $rehber_islem_zaman; ?></td>
            <td><?php echo $rehber_islem_ip; ?></td>
        </tr>

<?php
    }
}
?>


</table>
</div>
</div>

<!-- KONTEYNIR FLUYİD -->
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