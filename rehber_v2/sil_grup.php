<?php 

if ($_GET) 
{

include("baglan.php");
include("log.php");
session_start();
    if ($_SESSION['durum']==1){ 

//Grupta kişi varlığı kontrolü
$kontrol = $db->prepare("SELECT * FROM gruplar join kisiler on gruplar.ad = kisiler.grup WHERE grup='{$_GET['ad']}'");
$ad = $_GET['ad'];
$kontrol->execute();
$sonuc = $kontrol->rowCount();


if ($sonuc==0){
	if ($db->exec("DELETE FROM gruplar WHERE ad = '{$_GET['ad']}'")) {
		echo "<script type='text/javascript'>alert('Grup Silme İşlemi Başarılı!');</script>";
		//GRUP SİLİNDİ LOG BİLGİSİ
		$l_ad = $_GET['ad'];
		$islem="'{$l_ad}' adlı grup silindi.";
		$kullanici = $_SESSION['kullanici']; 

		log_islem($islem,$kullanici);

		Header("Refresh: 0.1; url=gruplar.php");	
	}
}
else{
	echo "<script type='text/javascript'>alert('Grupta Kayıtlı Kişi Mevcutken Grubu Silme İşlemi Gerçekleştirilemez!');</script>";
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
	Header("Refresh: 0.1; url=".$url);
	
}

}
}
else{
    echo "<script type='text/javascript'>alert('Oturum Açmadınız!');</script>";
    Header("Refresh: 0.1; url=index.php");	
}

?>