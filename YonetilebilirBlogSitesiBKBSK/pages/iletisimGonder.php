<?php
require_once('dbconnect.php');
require_once("functions.php");

if($_POST){
    $name = $_POST['name'];
    $eMail = $_POST['eMail'];
    $message = $_POST['message'];


    if($name!="" and $eMail!="" and $message!=""){

        $Time = date('d.m.Y H:i:s');

        $query = $db->prepare("INSERT INTO contact SET
        Name = :name,
        EMail = :email,
        Message = :mesage,
        SendDate = :date");
        $insert = $query->execute(array(
            "name" => $name,
            "email" => $eMail,
            "mesage" => $message,
            "date" => $Time,));
        if ( $insert ){
            $last_id = $db->lastInsertId();
            echo "Mesajınız gönderildi. Yetkililer size en kısa süre içerisinde dönüş sağlayacaklardır.";
        }
        else{
            echo "Mesaj Gönderilemedi!";
        }
    }



    else{
        echo "Lütfen Tüm Alanları Doldurunuz.";
    }

}
?>