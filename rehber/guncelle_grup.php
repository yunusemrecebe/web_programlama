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
<!-- GRUP ADI GÖSTER VE GÜNCELLE  -->
<?php 
	$query = $db->query("SELECT * FROM gruplar WHERE ad = '{$_GET['ad']}'")->fetch(PDO::FETCH_ASSOC);
	if ( $query ){
    	$veri_grup_ad = ($query['ad']);
	}
?>

<div class="container-fluid">
<div class="col-md-6">

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
        
		if ($db->query("UPDATE gruplar SET ad = '$up_form_grup_ad' WHERE ad = '{$_GET['ad']}'") && ($db->query("UPDATE kisiler SET grup = '$up_form_grup_ad' WHERE grup = '{$_GET['ad']}'")))
		{
			echo "<script type='text/javascript'>alert('Güncelleme İşlemi Başarılı!');</script>";
			Header("Refresh: 0.1; url=gruplar.php");
	        
		}
		else
		{
			echo "<script type='text/javascript'>alert('Bir Hata Oluştu!');</script>";
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