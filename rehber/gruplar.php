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
<div class="ccontainer-fluid" style="margin-left: 0px;">
<div class="col-sm-6">
<form action="" method="post">
	
	<table class="table">
		<h1>GRUP EKLE</h1>
		
		<tr>
			<td>Grup Adı:</td>
			<td><input type="text" name="form_grup_ad" class="form-control" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
		</tr>

	</table>

</form>

<?php 


if ($_POST) {

    $form_grup_ad = $_POST['form_grup_ad'];

    if ($form_grup_ad<>"") {

        $query = $db->prepare("INSERT INTO gruplar SET ad = :grup");        
        $insert = $query->execute(array("grup" => $form_grup_ad,));
        if ( $insert ){
            $last_id = $db->lastInsertId();
            echo "<script type='text/javascript'>alert('Grup Ekleme İşlemi Başarılı!');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Bir Hata Oluştu!');</script>";
        }

    }
}

?>
</div>



<div class="col">
<table class="table">
<h1>GRUPLAR</h1>
	<tr>
		<th>Grup Adı</th>
		<th></th>
        <th></th>
        <th></th>
	</tr>

<?php 

$sorgu = $db->query("SELECT * FROM gruplar");
while ( $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC) ){ 
    $veri_grup_ad = $sonuc['ad'];


?>
    
    
	<tr>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri_grup_ad; ?></td>
        <td style="width:50px; max-height:250px;"><a href="listele_grup.php?ad=<?php echo $veri_grup_ad; ?>" class="btn btn-primary">Listele</a></td>
		<td style="width:50px; max-height:250px;"><a href="guncelle_grup.php?ad=<?php echo $veri_grup_ad; ?>" class="btn btn-primary">Güncelle</a></td>
		<td style="width:50px; max-height:250px;"><a href="sil_grup.php?ad=<?php echo $veri_grup_ad; ?>" class="btn btn-danger">Sil</a></td>
	</tr>

<?php
 }
?>

</table>
</div>
</div>
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