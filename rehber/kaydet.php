<?php 
include "baglan.php";
	//mysql_isim=:yazılım_isim
	$kaydet=$db->prepare("INSERT INTO uyeler SET kullanici_adi=:uye_adi, kullanici_mail=:uye_mail, kullanici_tel=:uye_tel, kullanici_adres=:uye_adres, kullanici_sifre=:uye_sifre");
	$insert=$kaydet->execute(array(
		'uye_adi' => $_POST['kadi'],
		'uye_mail' => $_POST['mail'],
		'uye_tel' => $_POST['tel'],
		'uye_adres' => $_POST['adres'],
		'uye_sifre' => $_POST['sifre']
	));

	if ($insert) {

		echo "<script type='text/javascript'>alert('Kayıt Başarılı!');</script>";
		Header("Refresh: 0.1; url=index.php");		

	} else {

		echo "<script type='text/javascript'>alert('Hata Oluştu!');</script>";
		Header("Refresh: 0.1; url=index.php");		
	}


 ?>