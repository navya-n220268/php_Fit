<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}


if (isset($_POST['upload'])) {
    $fileName = basename($_FILES["myfile"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "<p style='color:green;'>File Uploaded Successfully!</p>";
    } else {
        echo "<p style='color:red;'>File Upload Failed!</p>";
    }
}


if (isset($_GET['delete'])) {
    $deleteFile = $uploadDir . $_GET['delete'];
    if (file_exists($deleteFile)) {
        unlink($deleteFile);
        echo "<p style='color:red;'>File Deleted Successfully!</p>";
    }
}


if (isset($_GET['download'])) {
    $downloadFile = $uploadDir . $_GET['download'];

    if (file_exists($downloadFile)) {
        header("Content-Disposition: attachment; filename=" . basename($downloadFile));
        header("Content-Type: application/octet-stream");
        header("Content-Length: " . filesize($downloadFile));
        readfile($downloadFile);
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
</head>
<body>

<h2> Mini File Manager</h2>

<form method="POST" enctype="multipart/form-data">
    Select File:
    <input type="file" name="myfile" required>
    <button type="submit" name="upload">Upload</button>
</form>

<hr>

<h3> Uploaded Files List</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>File Name</th>
        <th>Size (Bytes)</th>
        <th>Last Modified</th>
        <th>Actions</th>
    </tr>

    <?php
    $files = scandir($uploadDir);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $filePath = $uploadDir . $file;
            echo "<tr>";
            echo "<td>$file</td>";
            echo "<td>" . filesize($filePath) . "</td>";
            echo "<td>" . date("d-m-Y H:i:s", filemtime($filePath)) . "</td>";
            echo "<td>
                    <a href='filemanager.php?download=$file'>Download</a> |
                    <a href='filemanager.php?delete=$file' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>";
            echo "</tr>";
        }
    }
    ?>

</table>

</body>
</html>
