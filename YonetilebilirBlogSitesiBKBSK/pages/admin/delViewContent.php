<?php 

require_once '../dbconnect.php';

if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];



	$sorgu = $db->query("SELECT * FROM contents WHERE Id = '$del_id'");
        
        while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
            
            $id = $veri['Id'];
            $owner = $veri['Owner'];
            $creationDate = $veri['CreationDate'];
            $topic = $veri['Topic'];
            $text = $veri['Text'];

	}
}
?>

<input type="hidden" name="del_id" value="<?php echo $id; ?>">
<div class="form-group">      	
	<label><b>İçerik ID :</b> <?php echo $id; ?></label>
</div>


<div class="form-group">      	
	<label><b>Oluşturan Kullanıcı ID :</b> <?php echo $owner; ?></label>
</div>

<div class="form-group">      	
	<label><b>Oluşturulma Tarihi :</b> <?php echo $creationDate; ?></label>
</div>

<div class="form-group">      	
	<label><b>Başlık :</b> <?php echo $topic; ?></label>
</div>

<div class="form-group">      	
	<label><b>İçerik :</b> <?php $Bol=substr($text,0,75); echo $Bol."..."; ?></label>
</div>

