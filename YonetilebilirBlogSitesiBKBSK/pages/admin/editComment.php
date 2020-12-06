<?php 

require_once '../dbconnect.php';

if (isset($_POST['edit_id'])) {
	$edit_id = $_POST['edit_id'];



	$sorgu = $db->query("SELECT com.Id, com.Topic, com.Text, com.CreationDate, u.FirstName, u.LastName, ct.Topic as cTopic FROM comments com INNER JOIN users u ON com.Owner = u.Id INNER JOIN contents ct ON com.Content = ct.Id WHERE com.Id = '$edit_id'");
        
        while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
            
            $id = $veri['Id'];
            $contentName = $veri['cTopic'];
            $ownerFirstName = $veri['FirstName'];
            $ownerLastName = $veri['LastName'];
            $topic = $veri['Topic'];
            $text = $veri['Text'];
            $creationDate = $veri['CreationDate'];

	}
}
?>
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
<div class="form-group">      	
	<label>Yorum Yapılan İçerik</label>
	<input class="form-control" type="text" name="contentName" id="contentName" value="<?php echo $contentName; ?>" readonly="">
</div>


<div class="form-group">      	
	<label>Oluşturan</label>
	<input class="form-control" type="text" name="owner" id="owner" value="<?php echo $ownerFirstName." ".$ownerLastName; ?>" readonly="">
</div>

<div class="form-group">      	
	<label>Oluşturulma Tarihi</label>
	<input class="form-control" type="text" name="creatdate" id="creatdate" value="<?php echo $creationDate; ?>" readonly="">
</div>

<div class="form-group">      	
	<label>Başlık</label>
	<input class="form-control" type="text" name="top" id="top" value="<?php echo $topic; ?>">
</div>

<div class="form-group">      	
	<label>İçerik</label>
	<textarea class="ckeditor form-control" type="text" name="editText" id="editText"><?php echo $text; ?></textarea>
	<script>
    	// Ckeditor ü  ön tanımlı  ayarları  kullanarak <textarea id="editor1"> nesnesi üzerinde aktif  ediyoruz
        CKEDITOR.replace( 'editText' );
	</script>
</div>

