<?php 

if ($_GET) 
{

include("baglan.php"); 

if ($db->exec("DELETE FROM gruplar WHERE ad = '{$_GET['ad']}'")) 
{
	echo "<script type='text/javascript'>alert('Grup Silme İşlemi Başarılı!');</script>";
	Header("Refresh: 0.1; url=gruplar.php");	
}
}

?>