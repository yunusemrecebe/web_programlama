<?php 

if ($_GET) 
{

include("baglan.php"); 


if ($db->exec("DELETE FROM kisiler WHERE id =".(int)$_GET['id'])) 
{
	echo "<script type='text/javascript'>alert('Kişi Silme İşlemi Başarılı!');</script>";
	Header("Refresh: 0.1; url=kisiler.php");	
}
}

?>