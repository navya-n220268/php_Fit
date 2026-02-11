<!DOCTYPE html>
<html>
<head>
    <title>Upload Payment Proof | FitCulture</title>
    <link rel="stylesheet" href="style.css">
    <style>

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 1px 5px rgba(0,0,0,0.2);
            font-size: 12px;
        }

        input {
            margin-top: 15px;
            padding: 10px;
        }

        button {
            margin-top: 15px;
            padding: 10px 18px;
            background: #ff3f6c;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: black;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>⬆ Upload Payment Proof</h2>
    <p>Upload your receipt PDF or screenshot for verification.</p>

    <form action="uploads_proof.php" method="post" enctype="multipart/form-data">
        <input type="file" name="proof" required><br>
        <button type="submit" name="upload">Upload Proof</button>
    </form>

    <a href="proof_list.php">📂 View Uploaded Proofs</a>

     <div style="text-align:center;">
        <a href="index.php" class="back">⬅ Back</a>
    </div>
</div>

</body>
</html>
