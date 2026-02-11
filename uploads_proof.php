<?php

if (isset($_POST["upload"])) {

    $folder = "uploads/";

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $fileName = basename($_FILES["proof"]["name"]);
    $fileTmp = $_FILES["proof"]["tmp_name"];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    

    $newFileName = "Proof_" . time() . "." . $fileType;
    $filePath = $folder . $newFileName;

    if (move_uploaded_file($fileTmp, $filePath)) {
        header("Location: proof_list.php");
        exit;
    } else {
        echo "<h3 style='color:red;text-align:center;'>Upload Failed!</h3>";
        echo "<a href='upload_proof.php'>Go Back</a>";
    }
}
?>
