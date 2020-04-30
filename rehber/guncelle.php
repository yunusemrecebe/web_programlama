<?php 
include("baglan.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Yunus Bilişim </title>
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
<?php 
$sorgu = $db->query("SELECT * FROM kisiler WHERE id =".(int)$_GET['id']);
$sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
    $id = $sonuc['id']; 
    $veri_ad = $sonuc['ad'];
    $veri_soyad = $sonuc['soyad'];
    $veri_kurulus = $sonuc['kurulus'];
    $veri_unvan = $sonuc['unvan'];
    $veri_cep_no = $sonuc['cep_no'];
    $veri_ev_no = $sonuc['ev_tel'];
    $veri_grup = $sonuc['grup'];
    $veri_mail = $sonuc['mail'];
    $veri_aciklama = $sonuc['aciklama'];
?>

<div class="container-fluid">
<div class="col-md-6">

<form action="" method="post">
	
	<table class="table">
		<h1>KİŞİ GÜNCELLE</h1>
		<tr>
			<td>Ad:</td>
			<td><input type="text" name="up_form_ad" class="form-control" value="<?php echo $veri_ad; ?>" required></td>
		</tr>

        <tr>
			<td>Soyad:</td>
			<td><input type="text" name="up_form_soyad" class="form-control" value="<?php echo $veri_soyad; ?>" required></td>
		</tr>

        <tr>
			<td>Kuruluş:</td>
			<td><input type="text" name="up_form_kurulus" class="form-control" value="<?php echo $veri_kurulus; ?>" required></td>
		</tr>

		<tr>
			<td>Ünvan:</td>
			<td><input type="text" name="up_form_unvan" class="form-control" value="<?php echo $veri_unvan; ?>" required></td>
		</tr>

        <tr>
			<td>Cep Numarası:</td>
			<td><input type="text" pattern="\d*" name="up_form_cep_no" class="form-control" value="<?php echo $veri_cep_no; ?>" required></td>
		</tr>

        <tr>
			<td>Ev Telefonu:</td>
			<td><input type="text" pattern="\d*" name="up_form_ev_no" class="form-control" value="<?php echo $veri_ev_no; ?>" required></td>
		</tr>

        <tr>
		<td>Gruplar:</td>
		<td><select class="custom-select" name="up_form_grup" >
    		<option selected><?php echo $veri_grup; ?></option>
			<?php
                foreach ($db->query("SELECT * FROM gruplar") as $category ){
                    echo '<option value="'.$category["ad"].'">'.$category["ad"].'</option>';
                }
            ?>
		</select></td>
		</tr>

        <tr>
			<td>E-Mail Adresi:</td>
			<td><input type="text" name="up_form_mail" class="form-control" value="<?php echo $veri_mail; ?>" required></td>
		</tr>

        <tr>
            <td>Açıklama:</td>
			<td><input class="form-control" name="up_form_aciklama" class="form-control" value="<?php echo $veri_aciklama; ?>" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { 

    $up_veri_ad = $_POST['up_form_ad'];
    $up_veri_soyad = $_POST['up_form_soyad'];
    $up_veri_kurulus = $_POST['up_form_kurulus'];
    $up_veri_unvan = $_POST['up_form_unvan'];
    $up_veri_cep_no = $_POST['up_form_cep_no'];
    $up_veri_ev_no = $_POST['up_form_ev_no'];
    $up_veri_grup = $_POST['up_form_grup'];
    $up_veri_mail = $_POST['up_form_mail'];
	$up_veri_aciklama = $_POST['up_form_aciklama'];


    
	if ($up_veri_ad<>"" && $up_veri_soyad<>"" && $up_veri_kurulus<>"" && $up_veri_unvan<>"" && $up_veri_cep_no<>"" && $up_veri_ev_no<>"" && $up_veri_grup<>"" && $up_veri_mail<>"" && $up_veri_aciklama<>"") { 
		
		if ($db->query("UPDATE kisiler SET ad = '$up_veri_ad', soyad = '$up_veri_soyad', kurulus = '$up_veri_kurulus', unvan = '$up_veri_unvan', cep_no = '$up_veri_cep_no', ev_tel = '$up_veri_ev_no', 
        grup = '$up_veri_grup', mail = '$up_veri_mail', aciklama = '$up_veri_aciklama' WHERE id =".$_GET['id']))
		{
			echo "<script type='text/javascript'>alert('Güncelleme İşlemi Başarılı!');</script>";
	        Header("Refresh: 0.1; url=kisiler.php");
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