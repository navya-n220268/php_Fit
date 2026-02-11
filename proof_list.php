<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Proofs | FitCulture</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            padding: 20px;
            font-size: 16px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #ff3f6c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #eee;
        }

        a {
            text-decoration: none;
            padding: 6px 14px;
            color: white;
            border-radius: 5px;
        }

        .download {
            background: green;
        }

        .delete {
            background: red;
        }

        .back {
            background: black;
            padding: 10px 18px;
            display: inline-block;
            margin-top: 20px;
            border-radius: 6px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>📂 Uploaded Payment Proofs</h2>

    <table>
        <tr>
            <th>File Name</th>
            <th>Size (KB)</th>
            <th>Uploaded Date</th>
            <th>Download</th>
            <th>Delete</th>
        </tr>

        <?php
        $folder = "uploads/";
        $files = scandir($folder);
        $found = false;

        foreach ($files as $file) {

            if ($file != "." && $file != "..") {

                if (strpos($file, "Proof_") === 0) {

                    $found = true;
                    $filePath = $folder . $file;

                    $size = round(filesize($filePath) / 1024, 2);
                    $date = date("d-m-Y h:i A", filemtime($filePath));

                    echo "<tr>";
                    echo "<td>$file</td>";
                    echo "<td>$size</td>";
                    echo "<td>$date</td>";
                    echo "<td><a class='download' href='proof_download.php?file=$file'>Download</a></td>";
                    echo "<td><a class='delete' href='proof_delete.php?file=$file'>Delete</a></td>";
                    echo "</tr>";
                }
            }
        }

        if (!$found) {
            echo "<tr><td colspan='5'>No proofs uploaded yet.</td></tr>";
        }
        ?>

    </table>

    <div style="text-align:center;">
        <a href="upload_proof.php" class="back">⬅ Back</a>
    </div>

</div>

</body>
</html>
