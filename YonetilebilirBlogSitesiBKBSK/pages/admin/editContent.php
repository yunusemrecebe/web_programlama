<?php 

require_once '../dbconnect.php';

if (isset($_POST['edit_id'])) {
	$edit_id = $_POST['edit_id'];



	$sorgu = $db->query("SELECT * FROM contents WHERE Id = '$edit_id'");
        
        while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
            
            $id = $veri['Id'];
            $owner = $veri['Owner'];
            $category = $veri['Category'];
            $topic = $veri['Topic'];
            $text = $veri['Text'];
            $creationDate = $veri['CreationDate'];

	}
}
?>
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<div class="form-group">      	
	<label>İçerik ID</label>
	<input class="form-control" type="text" name="edit_id" id="edit_id" value="<?php echo $id; ?>" readonly="">
</div>


<div class="form-group">      	
	<label>Oluşturan</label>
	<input class="form-control" type="text" name="owner" id="owner" value="<?php echo $owner; ?>" readonly="">
</div>

<div class="form-group">      	
	<label>Oluşturulma Tarihi</label>
	<input class="form-control" type="text" name="creatdate" id="creatdate" value="<?php echo $creationDate; ?>" readonly="">
</div>

<div class="form-group">      	
	<label >Kategori</label>
	<select class="custom-select" name="cat" id="cat">
	<option selected><?php echo $category; ?></option>
			<?php
                foreach ($db->query("SELECT DISTINCT c.Name, c.Id from categories c INNER JOIN contents ct ON c.Id = ct.Category ") as $catName ){
                    echo '<option value="'.$catName["Id"].'">'.$catName["Name"].'</option>';
                }
            ?>
		</select>
</div>

<div class="form-group">      	
	<label>Başlık</label>
	<input class="form-control" type="text" name="top" id="top" value="<?php echo $topic; ?>">
</div>

<div class="form-group">      	
	<label>İçerik</label>
	<textarea class="ckeditor form-control" type="text" name="editText" id="editText"><?php echo $text; ?></textarea>
	<script>    
        CKEDITOR.replace( 'editText' );
	</script>
</div>

