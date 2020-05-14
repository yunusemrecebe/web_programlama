<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
    

<?php

 include("baglan.php");
 
 $log_sayisi = 1; 
 $log_sayfasi= 'log_islem';
$log_getir = $db->prepare("SELECT * FROM $log_sayfasi");
 $log_getir->execute();
 
 $log_say = $log_getir->rowCount();
 print("$log_say Adet Log var \n");

 $toplam_sayfa = ceil($log_say / $log_sayisi);
 echo "<br>Gerekli Sayfa: ".$toplam_sayfa;

$sayfa_noayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa_noayfa < 1) $sayfa_noayfa = 1; 
 

if($sayfa_noayfa > $toplam_sayfa) $sayfa_noayfa = $toplam_sayfa; 


$limit = ($sayfa_noayfa - 1) * $log_sayisi;
 

?>
<div class="col my-5">
    <h1 class="text-center text-primary">Görüntülenen Log Dosyası: Üye Giriş/Çıkış İşlemleri</h1>
<table class="table my-4">
	
	<tr>
		<th>Yapılan İşlem</th>
		<th>İşlemi Yapan Kişi</th>
        <th>İşlem Zamanı</th>
        <th>Yapan Kişinin IP Adresi</th>
    </tr>
<?php


    $sayfa_noorgu = $db->query('SELECT * FROM log_islem LIMIT ' . $limit . ', ' . $log_sayisi);

    while ( $sayfa_noonuc = $sayfa_noorgu->fetch(PDO::FETCH_ASSOC) ){ 
        $rehber_islem_tip = $sayfa_noonuc['islem_tipi'];
        $rehber_islem_kisi = $sayfa_noonuc['islem_kisi'];
        $rehber_islem_zaman = $sayfa_noonuc['islem_zaman'];
        $rehber_islem_ip = $sayfa_noonuc['islem_ip'];
?>
        
        <tr>
            <td><?php echo $rehber_islem_tip; ?></td>
            <td><?php echo $rehber_islem_kisi ?></td>
            <td><?php echo $rehber_islem_zaman; ?></td>
            <td><?php echo $rehber_islem_ip; ?></td>
        </tr>

<?php
    }
?>
</table>
</div>
</div>
    <div class="" style="font-size:28px;">
        <div class="row">
            <div class="col-xl-4 offset-xl-4 bg-primary text-center w-auto text-white font-weight-bold text-decoration-none" style="border-radius:10px; letter-spacing: 4px;  ">
        <?php
        for($sayfa_no = 1; $sayfa_no <= $toplam_sayfa; $sayfa_no++) {
            if($sayfa_noayfa == $sayfa_no) { 
            echo $sayfa_no . ' '; 
                } 
            
            
            else {
            echo '<a class="text-dark font-weight-normal" href="?sayfa=' . $sayfa_no . '">' . $sayfa_no . '</a> ';
            }
        }
        

        ?>
            </div>
        </div>  
    </div>



</body>
</html>