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
<!-- GRUP ADI GÖSTER -->
<?php 					
	$listele = $db->query("SELECT * FROM gruplar WHERE ad = '{$_GET['ad']}' AND sahip='{$_SESSION['kullanici']}'")->fetch(PDO::FETCH_ASSOC);
	if ( $listele ){
		$veri_grup_ad = ($listele['ad']);
		//GRUP LİSTEMELE İŞLEMİ LOG BİLGİSİ
		$l_ad = $veri_grup_ad;
		$islem="'{$l_ad}' adlı grup için listeleme işlemi yapıldı.";
		$kullanici = $_SESSION['kullanici']; 

		log_islem($islem,$kullanici);
	}
?>

<div class="container-fluid">

	<h1> Grup Adı: <?php echo $veri_grup_ad; ?> </h1>
</div>

<!-- GRUP İÇİNDEKİ KİŞİLERİ LİSTELE -->

<div class="col">
<table class="table">
	
	<tr>
		<th>Ad</th>
		<th>Soyad</th>
        <th>Kuruluş</th>
        <th>Unvan</th>
		<th>Cep No</th>
        <th>Ev Tel</th>
		<th>Mail</th>
		<th>Açıklama</th>
		<th></th>
		<th></th>
	</tr>


<?php
$name = $_GET['ad'];
$sorgu = $db->query("SELECT * FROM kisiler WHERE grup='$name' and kisiler.sahip='{$_SESSION['kullanici']}' ");
while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
	$veri['id'];
	$veri['ad'];
    $veri['soyad'];
    $veri['kurulus'];
    $veri['unvan'];
    $veri['cep_no'];
    $veri['ev_tel'];
    $veri['mail'];
    $veri['aciklama'];
?>

<tr>
	<td style=""><?php echo $veri['ad']; ?></td>
	<td style=""><?php echo $veri['soyad'] ?></td>
    <td style=""><?php echo $veri['kurulus']; ?></td>
    <td style=""><?php echo $veri['unvan']; ?></td>
	<td style=""><?php echo $veri['cep_no']; ?></td>
    <td style=""><?php echo $veri['ev_tel']; ?></td>
    <td style=""><?php echo $veri['mail']; ?></td>
	<td style=""><?php echo $veri['aciklama']; ?></td>
	<td><a href="gruptan_cikar.php?id=<?php echo $veri['id']; ?>" class="btn btn-danger"  style="width:150px;">Gruptan Çıkar</a></td>
	</tr>

<?php
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