<?php

$filePath = "uploads/invoice.pdf";

if (file_exists($filePath)) {

    header("Content-Description: File Transfer");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=invoice.pdf");
    header("Content-Length: " . filesize($filePath));

    readfile($filePath);
    exit;

} else {
    echo "Invoice file not found!";
}
?>
