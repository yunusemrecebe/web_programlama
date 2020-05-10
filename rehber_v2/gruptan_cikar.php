<?php
session_start(); 
if ($_SESSION['durum']==1){
    if ($_GET) 
    {
    include("baglan.php"); 
    include("log.php");
    }
    
    //log bilgisi için kişi silinmeden önce grup adını alıyorum.
    $grup_ad = $db->query("SELECT grup FROM kisiler WHERE id = '{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);

    $sil = $db->prepare("UPDATE kisiler SET grup = :grup_adi WHERE id = :id");
    $update = $sil->execute(array(
        "grup_adi" => "Yok",
        "id" => "{$_GET['id']}'"
    ));
    if ( $update ){
        echo "<script type='text/javascript'>alert('Gruptan Çıkarma İşlemi Başarılı!');</script>";
        //KİŞİ GRUPTAN ÇIKARTILDI LOG BİLGİSİ
        $mesaj = $db->query("SELECT * FROM kisiler WHERE id = '{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
        
        $l_ad = $mesaj['ad'];
        $l_soyad = $mesaj['soyad'];
        $islem="'{$l_ad} {$l_soyad}' adlı kişi '{$grup_ad['grup']}' adlı gruptan çıkartıldı.";
        $kullanici = $_SESSION['kullanici']; 
        
        log_islem($islem,$kullanici);
        Header("Refresh: 0.1; url=gruplar.php");
    }
}
else{
    echo "<script type='text/javascript'>alert('Oturum Açmadınız!');</script>";
    Header("Refresh: 0.1; url=index.php");	
}

?>