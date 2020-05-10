<?php 
include("baglan.php");
include("log.php");
	//mysql_isim=:yazılım_isim

	//Mail DB'de kayıtlı mı kontrolü
$mail = $_POST['mail'];
        
$mail_ara=$db->query("SELECT * from uyeler where kullanici_mail like '$mail' ");
$sonuc1=$mail_ara->rowCount();

if($mail_ara && $sonuc1>0){
	echo "<script type='text/javascript'>alert('Kullanılan bir mail adresi girdiniz!');</script>";
	Header("Refresh: 0.1; url=index.php");
    $mail_var=true;
    }
else{$mail_var=false;}


//Telefon Numarası DB'de kayıtlı mı kontrolü

$telefon = $_POST['tel'];

$telefon_ara=$db->query("SELECT * from uyeler where kullanici_tel like '$telefon'");
$sonuc2=$telefon_ara->rowCount();

    if($telefon_ara && $sonuc2>0){
		echo "<script type='text/javascript'>alert('Kullanılan bir telefon numarası girdiniz!');</script>";
		Header("Refresh: 0.1; url=index.php");
        $telefon_var=true;
        }
    else{$telefon_var=false;}

        
        if ($mail_var==false && $telefon_var==false){

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
		//ÜYE KAYIT İŞLEMİ LOG BİLGİSİ
		$l_ad = $_POST['kadi'];
		$islem="'{$l_ad}' adlı kişi yeni üyelik oluşturdu.";
		$kullanici = $_POST['mail'];
		log_islem($islem,$kullanici); 
		Header("Refresh: 0.1; url=index.php");		

	} else {

		echo "<script type='text/javascript'>alert('Hata Oluştu!');</script>";
		Header("Refresh: 0.1; url=index.php");		
	}
}

 ?>