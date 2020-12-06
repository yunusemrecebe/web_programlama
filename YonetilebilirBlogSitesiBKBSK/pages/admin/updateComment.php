<?php 

require_once '../dbconnect.php';


	$edit_id = $_POST['edit_id'];
    $topic = $_POST['top'];
    $text = $_POST['editText'];
   


$update = $db->query("UPDATE comments SET Topic = '$topic', Text = '$text' WHERE Id = '$edit_id' ");


?>
