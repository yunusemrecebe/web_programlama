<?php 
include("baglan.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Yunus Bilişim</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Kapat &times;</button>
  <a href="kisiler.php" class="w3-bar-item w3-button">Kişiler</a>
  <a href="gruplar.php" class="w3-bar-item w3-button">Gruplar</a>
  <a href="panel.php" class="w3-bar-item w3-button">Panel</a>
</div>

<div id="main">


<div class="w3-blue">
  <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <img src="images/yunus_ust.png" alt="yunus" style="width: 50px; height: 50px; float:left; margin-top:-50px; margin-left: 50px;"/>
    <h1 style="float: left; margin-top:-50px; margin-left: 110px;">Yunus Bilişim Hizmetleri - Rehber Sistemi</h1>
  </div>
</div>
<!-- GRUP ADI GÖSTER -->
<?php 
	$query = $db->query("SELECT * FROM gruplar WHERE ad = '{$_GET['ad']}'")->fetch(PDO::FETCH_ASSOC);
	if ( $query ){
		$veri_grup_ad = ($query['ad']);
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
		<th>aciklama</th>
		<th></th>
		<th></th>
	</tr>


<?php
$name = array($_GET['ad']);
$sql = "SELECT COUNT(*) FROM kisiler";
if ($res = $db->query($sql)) {
	if ($res->fetchColumn() > 0) 
	{
        $sql = "SELECT * FROM gruplar join kisiler on gruplar.ad = kisiler.grup Where grup = '$name[0]'";

		foreach ($db->query($sql) as $veri) 
		{ 
			$id = $veri['id'];
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
		<td style="min-width:150px; max-height:250px;"><?php echo $veri['ad']; ?></td>
		<td style="min-width:150px; max-height:250px;"><?php echo $veri['soyad'] ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri['kurulus']; ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri['unvan']; ?></td>
		<td style="min-width:150px; max-height:250px;"><?php echo $veri['cep_no']; ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri['ev_tel']; ?></td>
        <td style="min-width:250px; max-height:250px;"><?php echo $veri['mail']; ?></td>
		<td style="min-width:250px; max-height:250px;"><?php echo $veri['aciklama']; ?></td>
		<td><a href="gruptan_cikar.php?id=<?php echo $id; ?>" class="btn btn-danger"  style="width:150px;">Gruptan Çıkar</a></td>
	</tr>

<?php
		}
	}
}
$res = null;
$db = null;
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