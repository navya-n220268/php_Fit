<?php

if (isset($_GET["file"])) {

    $file = $_GET["file"];
    $filePath = "uploads/" . $file;

    if (file_exists($filePath)) {
        unlink($filePath);
    }


    header("Location: proof_list.php");
    exit;
}
?>
