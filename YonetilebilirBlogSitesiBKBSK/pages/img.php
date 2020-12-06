<?php
session_start();
/* Olusturulan kodu diger sayfalara tasiyabilmemiz icin oturum baslatiyoruz.
  0-999 araliginda bir sayi olusturup bunu md5 ile sifreliyoruz.
 */
$md5yap = md5(rand(0, 9999));

//md5 ile sifrelenen sayimizin uzunlugu 32 karakter olacaktir. Biz 6 karakterli alacagiz.
$dogrulamakodu = strtoupper(substr($md5yap, 8, 6));

//Dogrulama icin kullanicak kodumuzu acilan oturuma kaydediyoruz.
$_SESSION["dogrulamakodu"] = $dogrulamakodu;

//Resim boyutlari belirleniyor
$en = 75;
$boy = 25;

//Uzerinde calisacagimiz resim olusturuluyor.
$image = ImageCreate($en, $boy);

//Beyaz,Siyah ve Kirmizi renkler olusturuyoruz. Rakamlar renkleri ifade etmektedir.
$beyaz = ImageColorAllocate($image, 255, 255, 255);
$siyah = ImageColorAllocate($image, 0, 0, 0);
$kirmizi = ImageColorAllocate($image, 242, 0, 0);

//Arka plani beyaz yapiyoruz
ImageFill($image, 0, 0, $beyaz);

//Olusturulan dogrulama kodunu resime yaziyoruz.
ImageString($image, 6, 9, 5, $_SESSION["dogrulamakodu"], $siyah);

//Gorunumu biraz karistirmak icin cizgilerle gorunumu zorlastiriyoruz.
//Dilerseniz imageline() satirlarini kaldirarak cizgileri yok edebilirsiniz.
imageline($image, 0, 2, $en, 2, $kirmizi);
imageline($image, 0, 25, $boy, 0, $kirmizi);
imageline($image, $en, $boy, 40, 0, $kirmizi);
imageline($image, 0, 23, $en, 23, $kirmizi);

// Tarayiciya dosyamizin tipini yolluyoruz.
header("Content-Type: image/jpeg");

//Resmimizi Jpg formatinda basiyoruz.
ImageJpeg($image);

//Bir kereye mahsus kullanacagimiz icin siliyoruz.
ImageDestroy($image);
exit();
?>