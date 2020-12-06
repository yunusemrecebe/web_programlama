<?php
require_once("dbconnect.php");

if (isset($_POST['kadi']) and isset($_POST['sifre'])) {

$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
$_SESSION['durum']=0;
}

else {
	echo 'Kullanıcı adı veya şifre girişi yapılmamış!';
}
//girilen k.adı ve şifreyi dbden çekmeyi dene varsa dönen satır sayısını yaz kontrolü sağla 
    $sorgula=$db->prepare("SELECT * FROM users WHERE Email=:mail AND Password=:password");
    $sorgula->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));

    $islem_ok=$sorgula->rowCount();


if (isset($_POST['kod'])) {
    if ((strtoupper($_POST['kod']) == $_SESSION['dogrulamakodu']) and $islem_ok==1 ) {
        $_SESSION['OturumDurumu']=1;

        $hosgeldin = $db->query("SELECT Id,FirstName, Level FROM users WHERE Email = '{$kadi}'")->fetch(PDO::FETCH_ASSOC);

        $_SESSION['userId'] = $hosgeldin['Id'];
        $_SESSION['userLevel']=$hosgeldin['Level'];
        
        echo "<script type='text/javascript'>alert('Hoşgeldiniz Sayın {$hosgeldin['FirstName']}');</script>";
        Header("Refresh: 0.1; url=index.php");
        exit;

    } else {
        
        echo "<script type='text/javascript'>alert('Hatalı Giriş!');</script>";
		Header("Refresh: 0.1; url=login.php");		
    }
} else {
    ?>
    <a href="index.html">Sadece post verileri ile calisan bir sayfadir. Giris sayfasina donebilirsiniz.?</a>
<?php
}
?>