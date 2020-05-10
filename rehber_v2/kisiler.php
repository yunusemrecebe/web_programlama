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

<!-- KİŞİ EKLE -->

<div class="col">
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
			<td>Cep No: <br>
            <small style="color: darkgray;">5xxxxxxxxx şeklinde 10 haneli numara giriniz</small></td>
			<td><input type="text" pattern="\d{10}" name="form_cep_no" class="form-control" required></td>
            
        </tr>
        
        <tr>
			<td>Ev No:<br>
            <small style="color: darkgray;">2xxxxxxxxx şeklinde 10 haneli numara giriniz</small></td>
			<td><input type="text" pattern="\d{10}" name="form_ev_no" class="form-control" required></td>
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
			<td><input type="email" name="form_mail" class="form-control" required></td>
            
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

//Ad ve Soyad DB'de kayıtlı mı kontrolü
    $ad = $form_ad;
    $soyad = $form_soyad;
        
    $ad_ara=$db->query("SELECT * from kisiler where ad like '$ad' ");
    $sonuc1=$ad_ara->rowCount();
        
    $soyad_ara=$db->query("SELECT * from kisiler where soyad like '$soyad' ");
    $sonuc2=$soyad_ara->rowCount();

	if(($ad_ara && $soyad_ara) && ($sonuc1>0 && $sonuc2>0) ){
        foreach($ad_ara as $id1){$id1["id"];}
        foreach($soyad_ara as $id2){$id2["id"];}
        if($id1==$id2){echo "<script type='text/javascript'>alert('Aynı Ad ve Soyada sahip kişi zaten kayıtlı!');</script>"; 
            $ad_soyad_var=true;}
        else{goto ekle_ad;}
    }
        
    else{ekle_ad:
        $ad_soyad_var=false;}

//Telefon Numarası DB'de kayıtlı mı kontrolü

$telefon = $form_cep_no;

$telefon_ara=$db->query("SELECT * from kisiler where cep_no like '$telefon'");
$sonuc3=$telefon_ara->rowCount();

    if($telefon_ara && $sonuc3>0){
        echo "<script type='text/javascript'>alert('Aynı Telefon Numarası zaten kayıtlı!');</script>";
        $telefon_var=true;
        }
    else{$telefon_var=false;}

        
        if ($ad_soyad_var==false && $telefon_var==false){
            
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
                        //KİŞİ EKLEME İŞLEMİ LOG BİLGİSİ
                        $l_ad = $form_ad;
                        $l_soyad = $form_soyad;
                        $islem="'{$l_ad} {$l_soyad}' adlı kişi rehbere eklendi.";
                        $kullanici = $_SESSION['kullanici']; 

                        log_islem($islem,$kullanici);
                    }
                    else{
                        echo "<script type='text/javascript'>alert('Bir Hata Oluştu!');</script>";
                    }

            }
        }
        
}

?>
</div>
<!-- KİŞİLERİ LİSTELE -->
<div class="col">
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
		<th>Açıklama</th>
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
		<td style=""><?php echo $veri_ad; ?></td>
		<td style=""><?php echo $veri_soyad ?></td>
        <td style=""><?php echo $veri_kurulus; ?></td>
        <td style=""><?php echo $veri_unvan; ?></td>
		<td style=""><?php echo $veri_cep_no; ?></td>
        <td style=""><?php echo $veri_ev_no; ?></td>
        <td style=""><?php echo $veri_grup; ?></td>
		<td style=""><?php echo $veri_mail; ?></td>
		<td style=""><?php echo $veri_aciklama; ?></td>
		<td><a href="guncelle.php?id=<?php echo $id; ?>" class="btn btn-primary">Güncelle</a></td>
		<td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
	</tr>

<?php
 }
?>


</table>
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
<?php
}
else{
    echo "<script type='text/javascript'>alert('Oturum Açmadınız!');</script>";
    Header("Refresh: 0.1; url=index.php");	
}