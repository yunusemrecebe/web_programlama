<?php 

require_once '../dbconnect.php';


	$edit_id = $_POST['edit_id'];
	$userFirstName = $_POST['userFirstName'];
    $userLastName = $_POST['userLastName'];
    $userEMail = $_POST['userEMail'];
    $userPassword = $_POST['userPassword'];
    $userGSM = $_POST['userGSM'];
    $userLevel = $_POST['userLevel'];

    echo $edit_id." ".$userFirstName." ".$userLastName." ".$userEMail." ".$userPassword." ".$userGSM." ".$userLevel;


$update = $db->query("UPDATE users SET FirstName = '$userFirstName', LastName = '$userLastName', Email = '$userEMail', Password = '$userPassword', GSM = '$userGSM', Level = '$userLevel' WHERE Id = '$edit_id' ");


?>
