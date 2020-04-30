<?php 

if ($_GET) 
{
include("baglan.php"); 
if ($db->exec("DELETE FROM gruplar WHERE ad = '{$_GET['ad']}'")) 
{
		
}
}



$query = $db->prepare("UPDATE kisiler SET grup = :grup_adi WHERE id = :id");
$update = $query->execute(array(
     "grup_adi" => "Yok",
     "id" => "{$_GET['id']}'"
));
if ( $update ){
    echo "<script type='text/javascript'>alert('Gruptan Çıkarma İşlemi Başarılı!');</script>";
    Header("Refresh: 0.1; url=gruplar.php");

    
    
}

?>