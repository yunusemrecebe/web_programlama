<?php 
require_once("dbconnect.php");

	//Mail DB'de kayıtlı mı kontrolü
$mail = $_POST['mail'];
        
$mail_ara=$db->query("SELECT * from users where Email like '$mail' ");
$sonuc1=$mail_ara->rowCount();

if($mail_ara && $sonuc1>0){
	echo "<script type='text/javascript'>alert('Kullanılan bir mail adresi girdiniz!');</script>";
	//Header("Refresh: 0.1; url=index.php");
    $mail_var=true;
    }
else{$mail_var=false;}


//Telefon Numarası DB'de kayıtlı mı kontrolü

$telefon = $_POST['gsm'];

$telefon_ara=$db->query("SELECT * from users where GSM like '$telefon'");
$sonuc2=$telefon_ara->rowCount();

    if($telefon_ara && $sonuc2>0){
		echo "<script type='text/javascript'>alert('Kullanılan bir telefon numarası girdiniz!');</script>";
		//Header("Refresh: 0.1; url=index.php");
        $telefon_var=true;
        }
    else{$telefon_var=false;}

        
        if ($mail_var==false && $telefon_var==false){

	$kaydet=$db->prepare("INSERT INTO users SET FirstName=:firstName, LastName=:lastName, Email=:mail, Password=:password, GSM=:gsm, Level=:level");
	$insert=$kaydet->execute(array(
		'firstName' => $_POST['firstName'],
		'lastName' => $_POST['lastName'],
		'mail' => $_POST['mail'],
		'password' => $_POST['password'],
		'gsm' => $_POST['gsm'],
		'level' => 1
	));

	if ($insert) {

		echo "<script type='text/javascript'>alert('Kayıt Başarılı!');</script>";

	} else {

		echo "<script type='text/javascript'>alert('Hata Oluştu!');</script>";
	}
}

 ?>