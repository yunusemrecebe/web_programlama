<?php 
session_start();	
if($_SESSION['durum']==1){
    include("log.php");
    echo "<script type='text/javascript'>alert('Başarıyla çıkış yaptınız!');</script>";
    
    //ÇIKIŞ YAPILDI LOG BİLGİSİ
    $islem = "Çıkış yapıldı.";
    $kullanici = $_SESSION['kullanici'];
    log_islem_uye($islem,$kullanici);
    
    session_destroy();
    Header("Refresh: 0.1; url=index.php");
}
else{
    echo "<script type='text/javascript'>alert('Oturum Açmadınız!');</script>";
    Header("Refresh: 0.1; url=index.php");
}
 ?>