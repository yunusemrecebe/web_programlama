<?php 

if ($_GET) 
{

include("baglan.php"); 
include("log.php");
session_start();
    if ($_SESSION['durum']==1){
        
        //KİŞİ SİLİNMEDEN ÖNCE LOG KAYDI İÇİN BİLGİLERİNİ ÇEKİYORUM
    $kisi_ad = $db->query("SELECT * FROM kisiler WHERE id = {$_GET['id']} AND sahip='{$_SESSION['kullanici']}'")->fetch(PDO::FETCH_ASSOC);
         
    if ($db->exec("DELETE FROM kisiler WHERE id = {$_GET['id']} AND sahip='{$_SESSION['kullanici']}'"))
        {
            echo "<script type='text/javascript'>alert('Kişi Silme İşlemi Başarılı!');</script>";
            
            //KİŞİ EKLEME İŞLEMİ LOG BİLGİSİ
            $l_ad = $kisi_ad['ad'];;
            $l_soyad = $kisi_ad['soyad'];;
            $islem="'{$l_ad} {$l_soyad}' adlı kişi rehberden silindi.";
            $kullanici = $_SESSION['kullanici'];
            log_islem($islem,$kullanici); 
            
            Header("Refresh: 0.1; url=kisiler.php");	
        }
        }

        }
        else{
            echo "<script type='text/javascript'>alert('Oturum Açmadınız!');</script>";
            Header("Refresh: 0.1; url=index.php");	
        }


?>