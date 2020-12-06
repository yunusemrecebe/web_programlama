<?php
require_once '../dbconnect.php';
require_once '../functions.php';
error_reporting(0);
$userLevel = $_SESSION['userLevel'];

if ($userLevel > 1){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/dashboardStyle.css">
    <script src="../../plugins/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />



    <title>Document</title>
</head>
<body">
<div class="adminSayfa">
	<div class="adminmenu">

        <ul>
            <ul>
                <li><a id="anasayfa" href="../index.php">Anasayfaya Dön</a></li>
            </ul>

            <li><a>Konular</a>
                <ul>
                    <li><a data-toggle="modal" data-target="#addEmpModal">İçerik Oluştur</a></li>
                    <li><a href="icerikYonetimi.php">İçerik Yönetimi</a></li>
                    <li><a href="onayBekleyenIcerikler.php">Onay Bekleyen İçerikler</a></li>

                </ul>
            </li>

            <li><a>Yorumlar</a>
                <ul>
                    <li><a href="yorumYonetimi.php">Yorum Yönetimi</a></li>
                    <li><a href="onayBekleyenYorumlar.php">Onay Bekleyen Yorumlar</a></li>
                </ul>
            </li>
            <?php
            if($userLevel==3){
                ?>
                <li><a>Üyeler</a>
                    <ul>
                        <li><a href="hesapYonetimi.php">Hesap Yönetimi</a></li>
                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>

	</div>

	<table style="margin-right: 80px; class="table table-striped" id="contentTable">
	<thead>
		<tr>
			<th>Başlık</th>
			<th>İçerik</th>
			<th>Oluşturulma Tarihi</th>
			<th>Oluşturan</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$userList = $db->query("SELECT com.Id, com.Topic, com.Text, com.CreationDate, u.FirstName, u.LastName FROM comments com INNER JOIN users u ON com.Owner = u.Id WHERE com.Confirm = 1");
        
        while ( $contentListView = $userList->fetch(PDO::FETCH_ASSOC) ){
            
            $contentId = $contentListView['Id'];
            $contentTopic = $contentListView['Topic'];
            $contentText = $contentListView['Text'];
            $contentCreatDate = $contentListView['CreationDate'];
            $contentOwnerName = $contentListView['FirstName'];
            $contentOwnerSurname = $contentListView['LastName'];
            
		?>
		<tr>
			<td><?php echo $contentTopic; ?></td>
			<td><?php $Bol=substr($contentText,0,100); echo $Bol."..."; ?></td>
			<td><?php echo $contentCreatDate; ?></td>
			<td><?php echo $contentOwnerName." ".$contentOwnerSurname; ?></td>
			<td>
				<button class="btn btn-secondary btn-xs removeCommentConfirm" id="<?php echo $contentId; ?>">Yayından Kaldır</button> | 
				<button class="btn btn-warning btn-xs editComment" id="<?php echo $contentId; ?>">Düzenle</button> | 
				<button class="btn btn-danger btn-xs delComment" id="<?php echo $contentId; ?>">Sil</button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</div>



<!-- Yeni İçerik Oluştur Modal -->
<div class="modal fade bd-example-modal-lg" id="addEmpModal" tabindex="-1" aria-labelledby="createNewContent" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="fupForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="createNewContent">Yeni İçerik Oluştur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" name="newCategory" id="newCategory" required>
                            <?php
                            foreach ($db->query("SELECT * FROM categories") as $ncategory ){
                                echo '<option value="'.$ncategory["Id"].'">'.$ncategory["Name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" type="text" name="newTopic" id="newTopic" placeholder="Enter Name" required>
                    </div>

                    <div class="form-group">
                        <label for="file">Kapak Görseli</label>
                        <input type="file" class="form-control" id="file" name="file" required />
                    </div>

                    <div class="form-group">
                        <label>İçerik</label>
                        <textarea class="ckeditor form-control" type="text" name="newText" id="newText" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" name="save" class="btn btn-primary submitBtn" id="save" value="Yayınla"/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- Yeni İçerik Oluştur Modal Bitimi -->

<!-- Update Modal -->
<div class="modal fade" id="editEmpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    	<form action="" method="post" id="updateForm">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">İçerik Düzenle</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title" id="myModalLabel"></h4>
	      </div>
	      <div class="modal-body" id="update_details">

	 

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" id="update">Kaydet</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
	      </div>
      </form>
    </div>
  </div>
</div><!-- Update Modal End -->


<!-- View Deleting Data Modal -->
<div class="modal fade" id="delViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
    	<form action="" method="post" id="deleteForm">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Silinecek Yorumun Bilgileri</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="delete_details">

	 

	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-danger" id="delete">Sil</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
	      </div>
      </form>
    </div>
  </div>
</div><!-- View Deleting Data Modal End -->

</body>
</html>

<script>
$(document).ready(function(){
	$("#contentTable").dataTable();
});

CKEDITOR.replace( 'newText', {
    filebrowserBrowseUrl: '../../plugins/ckfinder/ckfinder.html',
    filebrowserUploadUrl: '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserWindowWidth: '1000',
    filebrowserWindowHeight: '700'
} );

//Create New Content
$(document).ready(function(e){

    $("#fupForm").on('submit', function(e){
        CKEDITOR.instances['newText'].updateElement();
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'createNewContent.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){ //console.log(response);
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#fupForm')[0].reset();
                    alert("İçerik kaydedildi. Admin onayından sonra paylaşılacaktır.");
                    $("#createNewContent").modal('hide');
                    location.reload();
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                    alert('Bir Hata Oluştu!');
                }
            }
        });
    });
});

	//Remove Confirm Comment
	$(document).on('click','.removeCommentConfirm',function(){


		var edit_id = $(this).attr('id');

		$.ajax({
					url:"removeCommentConfirm.php",
					type:"post",
					data:{edit_id:edit_id},
					success:function(data){
						alert("Yorum onayı kaldırıldı ve yayından alındı.");
						location.reload();
					}
				});

	});

	//Edit Comment
	$(document).on('click','.editComment',function(){


		var edit_id = $(this).attr('id');

		$.ajax({
					url:"editComment.php",
					type:"post",
					data:{edit_id:edit_id},
					success:function(data){
						$("#update_details").html(data);
						$("#editEmpModal").modal('show');
					}
				});

	});


	//Update Comment
	$(document).on('click','#update',function(){
		CKEDITOR.instances['editText'].updateElement();
		$.ajax({
					url:"updateComment.php",
					type:"post",
					data:$("#updateForm").serialize(),
					success:function(data){
						alert("Yorum başarıyla güncellendi!");
						$("#editEmpModal").modal('hide');
						location.reload();
					}
				});

	});

//View Deleting Comment
	$(document).on('click','.delComment',function(){
		var del_id = $(this).attr('id');
		$.ajax({
					url:"delViewComment.php",
					type:"post",
					data:{del_id:del_id},
					success:function(data){
						$("#delete_details").html(data);
						$("#delViewModal").modal('show');
					}
				});

	});

	//Delete Comment
	$(document).on('click','#delete',function(){
		
		$.ajax({
					url:"deleteComment.php",
					type:"post",
					data:$("#deleteForm").serialize(),
					success:function(data){
						alert("Seçilen yorum başarıyla silindi!");
						$("#delViewModal").modal('hide');
						location.reload();
					}
				});

	});

</script>
    <?php
}
else
    echo "<script type='text/javascript'>alert('Bu sayfayı görüntülemek için yeterli yetkiye sahip değilsiniz!');</script>";
Header("Refresh: 0.1; url=../index.php");
?>