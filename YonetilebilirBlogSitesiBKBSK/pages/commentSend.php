<?php 
require_once('dbconnect.php');
require_once("functions.php");

$Owner = $_SESSION['userId'];
$Content = $_SESSION['contentId'];

if($_POST){
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];


    if($baslik!="" and $icerik!=""){
        

    $Topic = $baslik;
    $Text = $icerik;
    $Time = date('d.m.Y H:i:s');  

    $query = $db->prepare("INSERT INTO comments SET
        Owner = :sahip,
        Content = :konu,
        Topic = :baslik,
        Text = :yorum,
        CreationDate = :tarih");        
    $insert = $query->execute(array(
        "sahip" => $Owner,
        "konu" => $Content,
        "baslik" => $Topic,
        "yorum" => $Text,
        "tarih" => $Time,));
    if ( $insert ){
        $last_id = $db->lastInsertId();
        echo "Yorum gönderildi. Admin onayından sonra yayınlanacaktır.";
    }
    else{
        echo "Yorum Gönderilemedi!";
    }
}


    
    else{
        echo "Lütfen Tum Alanları Doldurunuz.";
    }

}
?>