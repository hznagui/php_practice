<?php
// require_once('../library.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    print_r($_FILES);
    foreach ($_FILES['avatars']['error'] as $key => $error)
    {
        if  ($error == UPLOAD_ERR_OK)
        {
            $source = $_FILES['avatars']['tmp_name'][$key];
            $destination = 'images/'.$_FILES['avatars']['name'][$key];
            move_uploaded_file($source,$destination);
        }
    }
}
?>