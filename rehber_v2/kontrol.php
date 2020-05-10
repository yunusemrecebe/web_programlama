<?php
include("baglan.php");
include("log.php");
session_start();

if (isset($_POST['kadi']) and isset($_POST['sifre'])) {

$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
$_SESSION['durum']=0;
}

else {
	echo 'Kullanıcı adı veya şifre girişi yapılmamış!';
}
//girilen k.adı ve şifreyi dbden çekmeyi dene varsa dönen satır sayısını yaz kontrolü sağla 
    $sorgula=$db->prepare("SELECT * FROM uyeler WHERE kullanici_mail=:mail AND kullanici_sifre=:password");
    $sorgula->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));

    $islem_ok=$sorgula->rowCount();


if (isset($_POST['kod'])) {
    if ((strtoupper($_POST['kod']) == $_SESSION['dogrulamakodu']) and $islem_ok==1 ) {
        $_SESSION['durum']=1;
        
        //log kaydında işlem yapan kullanıcı bilgisini eklemek için gönderilen session.
        $_SESSION['kullanici'] = $kadi;
        
        //GİRİŞ YAPILDI LOG BİLGİSİ
        $islem = "Giriş yapıldı.";
        $kullanici = $_SESSION['kullanici'];
        log_islem_uye($islem,$kullanici);

        $hosgeldin = $db->query("SELECT kullanici_adi FROM uyeler WHERE kullanici_mail = '{$kadi}'")->fetch(PDO::FETCH_ASSOC);
        echo "<script type='text/javascript'>alert('Hoşgeldiniz Sayın {$hosgeldin['kullanici_adi']}');</script>";
        Header("Refresh: 0.1; url=kisiler.php");
        exit;

    } else {
        
        echo "<script type='text/javascript'>alert('Hatalı Giriş!');</script>";
		Header("Refresh: 0.1; url=index.php");		
    }
} else {
    ?>
    <a href="index.html">Sadece post verileri ile calisan bir sayfadir. Giris sayfasina donebilirsiniz.?</a>
<?php
}
?>