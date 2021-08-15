<?php
include '../connectionuju.php';
if(!empty($_GET['file'])){
    $fileName= basename($_GET['file']);
    $filePath= "IMAGE/".$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // header('Content-Description: File Transfer');
        //     header('Content-Type: application/octet-stream');
        //     header('Content-Disposition: attachment; filename="'.basename($filePath).'"');
        //     header('Expires: 0');
        //     header('Cache-Control: must-revalidate');
        //     header('Pragma: public');
        //     header('Content-Length: ' . filesize($filePath));
        //     flush(); // Flush system output buffer
        //     readfile($filePath);
        //     die();

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filePath);
        exit;
    }
    else{
        echo 'file not exists!';
    }
}
?>