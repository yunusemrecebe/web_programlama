<?php

//Kullanıcı giriş-çıkış işlemleri loglama
function log_islem_uye($islem,$kullanici){
    include("baglan.php");

    $ip = $_SERVER["REMOTE_ADDR"];
    date_default_timezone_set('Europe/Istanbul');
    $zaman = date('d.m.Y H:i:s');  

    $log = $db->prepare("INSERT INTO log_islem_uyeler SET 
    uye_islem_tipi = :uye_islem_tipi,
    uye_islem_kisi = :uye_islem_kisi,
    uye_islem_zaman = :uye_islem_zaman,
    uye_islem_ip = :uye_islem_ip");
    $gonder = $log->execute(array(
        "uye_islem_tipi" => $islem,
        "uye_islem_kisi" => $kullanici,
        "uye_islem_zaman" => $zaman,
        "uye_islem_ip" => $ip,
        
    ));
}

//Yapılan işlemleri loglama
function log_islem($islem,$kullanici){
    include("baglan.php");

    $ip = $_SERVER["REMOTE_ADDR"];
    date_default_timezone_set('Europe/Istanbul');
    $zaman = date('d.m.Y H:i:s');  

    $log = $db->prepare("INSERT INTO log_islem SET 
    islem_tipi = :islem_tipi, 
    islem_zaman = :islem_zaman, 
    islem_kisi = :islem_kisi, 
    islem_ip = :islem_ip");
    $gonder = $log->execute(array(
        "islem_tipi" => $islem,
        "islem_zaman" => $zaman,
        "islem_kisi" => $kullanici,
        "islem_ip" => $ip,
        
    ));
}


?>