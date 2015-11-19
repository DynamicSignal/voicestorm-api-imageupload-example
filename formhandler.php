<?php

require_once "functions.php";
if(count($_FILES) && isset($_POST['postId']))
{ 
    $postId = $_POST['postId'];
    $file = $_FILES['image'];
    $response = voicestormApiRequest("PUT", "/post/".$postId."/image", array('image' => $file));
    if($response['code'] == "success")
    {
        echo "Success image uploaded";
    }
}
else
{
    header('Location: index.php'); die(); //No image or postId received
}
?>