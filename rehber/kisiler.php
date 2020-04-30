<?php 
include("baglan.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Yunus Bilişim</title>
<link rel="stylesheet" href="style/style.css" type="text/css">
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
<div class="container-fluid" style="margin-left: 0px;">
<!-- KİŞİ EKLE -->
<div class="col-sm-6">
<form action="" method="post">
	
	<table class="table">
		<h1>KİŞİ EKLE</h1>
		
		<tr>
			<td>Ad:</td>
			<td><input type="text" name="form_ad" class="form-control" required></td>
		</tr>

		<tr>
			<td>Soyad:</td>
			<td><input type="text" name="form_soyad" class="form-control" required></td>
        </tr>

        <tr>
			<td>Kuruluş:</td>
			<td><input type="text" name="form_kurulus" class="form-control" required></td>
        </tr>

        <tr>
			<td>Ünvan:</td>
			<td><input type="text" name="form_unvan" class="form-control" required></td>
        </tr>
        
        <tr>
			<td>Cep No:</td>
			<td><input type="text" pattern="\d*" name="form_cep_no" class="form-control" required></td>
        </tr>
        
        <tr>
			<td>Ev No:</td>
			<td><input type="text" pattern="\d*" name="form_ev_no" class="form-control" required></td>
        </tr>

        <tr>
		<td>Gruplar:</td>
		<td><select class="custom-select" name="form_grup">
    		<option selected>Yok</option>
			<?php
                foreach ($db->query("SELECT * FROM gruplar") as $category ){
                    echo '<option value="'.$category["ad"].'">'.$category["ad"].'</option>';
                }
            ?>
		</select></td>
		</tr>
        
        <tr>
			<td>E-Mail Adresi:</td>
			<td><input type="text" name="form_mail" class="form-control" required></td>
        </tr>
        
        <tr>
			<td>Açıklama:</td>
			<td><input type="text" name="form_aciklama" class="form-control" required></td>
        </tr>

		<tr>
			<td></td>
			<td><input class="btn btn-primary"  type="submit" value="Kaydet"></td>
		</tr>

	</table>

</form>

<?php 


if ($_POST) {

    $form_ad = $_POST['form_ad'];
    $form_soyad = $_POST['form_soyad'];
    $form_kurulus = $_POST['form_kurulus'];
    $form_unvan = $_POST['form_unvan'];
    $form_cep_no = $_POST['form_cep_no'];
    $form_ev_no = $_POST['form_ev_no'];
    $form_grup = $_POST['form_grup'];
    $form_mail = $_POST['form_mail'];
    $form_aciklama = $_POST['form_aciklama'];


    if ($form_ad<>"" && $form_soyad<>"" && $form_kurulus<>"" && $form_unvan<>"" && $form_cep_no<>"" && $form_ev_no<>"" && $form_grup<>"" && $form_mail<>"" && $form_aciklama<>"") {


        
        $query = $db->prepare("INSERT INTO kisiler SET
            ad = :ad,
            soyad = :soyad,
            kurulus = :kurulus,
            unvan = :unvan,
            cep_no = :cep_no,
            ev_tel = :ev_no,
            grup = :grup,
            mail = :mail,    
            aciklama = :aciklama");        
        $insert = $query->execute(array(
            "ad" => $form_ad,
            "soyad" => $form_soyad,
            "kurulus" => $form_kurulus,
            "unvan" => $form_unvan,
            "cep_no" => $form_cep_no,
            "ev_no" => $form_ev_no,
            "grup" => $form_grup,
            "mail" => $form_mail,
            "aciklama" => $form_aciklama,
        ));
        if ( $insert ){
            $last_id = $db->lastInsertId();
            echo "<script type='text/javascript'>alert('Kayıt İşlemi Başarılı!');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Bir Hata Oluştu!');</script>";
        }

    }
}

?>
</div>
<!-- KİŞİLERİ LİSTELE -->
<div class="col" style="margin: auto;">
    <h1>KİŞİLER</h1>
<table class="table">
	
	<tr>
		<th>Ad</th>
		<th>Soyad</th>
        <th>Kuruluş</th>
        <th>Unvan</th>
		<th>Cep No</th>
        <th>Ev Tel</th>
        <th>Grup</th>
		<th>Mail</th>
		<th>aciklama</th>
		<th></th>
		<th></th>
	</tr>

<?php 


$sorgu = $db->query("SELECT * FROM kisiler");
while ( $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC) ){
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
	
	<tr>
		<td style="min-width:150px; max-height:250px;"><?php echo $veri_ad; ?></td>
		<td style="min-width:150px; max-height:250px;"><?php echo $veri_soyad ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri_kurulus; ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri_unvan; ?></td>
		<td style="min-width:150px; max-height:250px;"><?php echo $veri_cep_no; ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri_ev_no; ?></td>
        <td style="min-width:150px; max-height:250px;"><?php echo $veri_grup; ?></td>
		<td style="min-width:250px; max-height:250px;"><?php echo $veri_mail; ?></td>
		<td style="min-width:250px; max-height:250px;"><?php echo $veri_aciklama; ?></td>
		<td><a href="guncelle.php?id=<?php echo $id; ?>" class="btn btn-primary">Güncelle</a></td>
		<td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
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