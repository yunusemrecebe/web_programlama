<?php 

require_once '../dbconnect.php';

if (isset($_POST['edit_id'])) {
	$edit_id = $_POST['edit_id'];



	$sorgu = $db->query("SELECT * FROM users WHERE Id = $edit_id");
        
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
<script src="../../plugins/ckeditor/ckeditor.js"></script>

<div class="form-group">      	
	<label>Kullanıcı ID</label>
	<input class="form-control" type="text" name="edit_id" id="edit_id" value="<?php echo $userId; ?>" readonly="">
</div>


<div class="form-group">      	
	<label>Ad</label>
	<input class="form-control" type="text" name="userFirstName" id="userFirstName" value="<?php echo $userFirstName; ?>">
</div>

<div class="form-group">      	
	<label>Soyad</label>
	<input class="form-control" type="text" name="userLastName" id="userLastName" value="<?php echo $userLastName; ?>">
</div>

<div class="form-group">      	
	<label>E-Mail</label>
	<input class="form-control" type="text" name="userEMail" id="userEMail" value="<?php echo $userEMail; ?>" >
</div>

<div class="form-group">      	
	<label>Şifre</label>
	<input class="form-control" type="text" name="userPassword" id="userPassword" value="<?php echo $userPassword; ?>">
</div>

<div class="form-group">      	
	<label>GSM</label>
	<input class="form-control" type="text" name="userGSM" id="userGSM" value="<?php echo $userGSM; ?>">
</div>

<div class="form-group">      	
	<label >Yetki Seviyesi</label>
	<select class="custom-select" name="userLevel" id="userLevel">
		<option selected><?php echo $userLevel; ?></option>
		<option value="1">Kullanıcı - 1</option>
		<option value="2">Editör - 2</option>
		<option value="3">Admin - 3</option>	
	</select>
</div>


