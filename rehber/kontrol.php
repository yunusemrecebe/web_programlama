<?php
include("baglan.php");
session_start();

if (isset($_POST['kadi']) and isset($_POST['sifre'])) {

$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
}

else {
	echo 'Kullanıcı adı veya şifre girişi yapılmamış!';
}

    $sorgula=$db->prepare("select * from uyeler where kullanici_mail=:mail  and kullanici_sifre=:password ");
    $sorgula->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));

    $islem_ok=$sorgula->rowCount();

// Eger form doldurulmussa
if (isset($_POST['kod'])) {
    if ((strtoupper($_POST['kod']) == $_SESSION['dogrulamakodu']) and $islem_ok==1 ) {
        $_SESSION['userkullanici_mail']=$kadi;

        header("Location:panel.php");
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