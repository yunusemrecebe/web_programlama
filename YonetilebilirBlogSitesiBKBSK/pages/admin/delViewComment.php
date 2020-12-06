<?php 

require_once '../dbconnect.php';

if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];


$sorgu = $db->query("SELECT com.Id, com.Topic, com.Text, com.CreationDate, u.FirstName, u.LastName, ct.Topic as cTopic FROM comments com INNER JOIN users u ON com.Owner = u.Id INNER JOIN contents ct ON com.Content = ct.Id WHERE com.Id = '$del_id'");
        
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

<input type="hidden" name="del_id" value="<?php echo $id; ?>">
<div class="form-group">      	
	<label><b>Yorum Yapılan İçerik :</b> <?php echo $contentName; ?></label>
</div>


<div class="form-group">      	
	<label><b>Oluşturan :</b> <?php echo $ownerFirstName." ".$ownerLastName; ?></label>
</div>

<div class="form-group">      	
	<label><b>Oluşturulma Tarihi :</b> <?php echo $creationDate; ?></label>
</div>

<div class="form-group">      	
	<label><b>Başlık :</b> <?php echo $topic; ?></label>
</div>

<div class="form-group">      	
	<label><b>İçerik :</b> <?php $Bol=substr($text,0,40); echo $Bol."..."; ?></label>
</div>

