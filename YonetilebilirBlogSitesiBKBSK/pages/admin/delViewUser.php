<?php 

require_once '../dbconnect.php';

if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];


$sorgu = $db->query("SELECT * FROM users WHERE Id = $del_id");
        
        while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
            
            $userId = $veri['Id'];
            $userFirstName = $veri['FirstName'];
            $userLastName = $veri['LastName'];
            $userEMail = $veri['Email'];
            $userPassword = $veri['Password'];
            $userGSM = $veri['GSM'];
            $userLevel = $veri['Level'];
            
	}
}
?>

<input type="hidden" name="del_id" value="<?php echo $userId; ?>">
<div class="form-group">      	
	<label><b>Kullanıcı ID :</b> <?php echo $userId; ?></label>
</div>


<div class="form-group">      	
	<label><b>Ad :</b> <?php echo $userFirstName; ?></label>
</div>

<div class="form-group">      	
	<label><b>Soyad :</b> <?php echo $userLastName; ?></label>
</div>

<div class="form-group">      	
	<label><b>E-Mail :</b> <?php echo $userEMail; ?></label>
</div>

<div class="form-group">      	
	<label><b>Şifre :</b> <?php echo $userPassword; ?></label>
</div>

<div class="form-group">      	
	<label><b>GSM :</b> <?php echo $userGSM; ?></label>
</div>

<div class="form-group">      	
	<label><b>Yetki Seviyesi :</b> <?php echo $userLevel; ?></label>
</div>