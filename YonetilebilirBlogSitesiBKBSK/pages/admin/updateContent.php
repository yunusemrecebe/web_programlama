<?php 

require_once '../dbconnect.php';


	$edit_id = $_POST['edit_id'];
    $category = $_POST['cat'];
    $topic = $_POST['top'];
    $text = $_POST['editText'];
   


$update = $db->query("UPDATE contents SET Topic = '$topic', Category = '$category', Text = '$text' WHERE Id = '$edit_id' ");


?>
