<?php

require_once '../dbconnect.php';
require_once '../functions.php';
$user = $_SESSION['userId'];

$uploadDir = '../../uploads/';
$response = array(
    'status' => 0,
    'message' => 'Form iletilemedi, lütfen tekrar deneyin.'
);

$contentCategoryId = $_POST['newCategory'];
$contentTopic = $_POST['newTopic'];
$contentText = $_POST['newText'];
$time = date('d.m.Y H:i:s');
$uploadStatus = 1;


$uploadedFile = '';

$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $uploadDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
if(in_array($fileType, $allowTypes)){
    // Upload file to the server
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        $uploadedFile = $fileName;
        $uploadedFile = "../uploads/".$uploadedFile;
    }else{
        $uploadStatus = 0;
        $response['message'] = 'Bir Hata Oluştu!';
    }
}else{
    $uploadStatus = 0;
    $response['message'] = 'Yalnızca PDF, DOC, JPG, JPEG, & PNG formatlı öğeler yüklenebilir.';
}

if($uploadStatus == 1){

    $query = $db->prepare("INSERT INTO contents SET Owner = :Owner, Category = :Category, Topic = :Topic, Text = :Text, Pictures = :Picture, CreationDate = :CreationDate, Confirm = :Confirm");
    $insert = $query->execute(array("Owner" => $user,
        "Category" => $contentCategoryId,
        "Topic" => $contentTopic,
        "Text" => $contentText,
        "CreationDate" => $time,
        "Picture" => $uploadedFile,
        "Confirm" => "0",
    ));

    if($insert){
        $response['status'] = 1;
        $response['message'] = 'Form data submitted successfully!';
    }
}

echo json_encode($response);

?>

