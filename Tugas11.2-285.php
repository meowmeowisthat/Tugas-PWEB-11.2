<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 11.2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: palevioletred;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 400px;
            padding: 50px; 
            background: mistyrose;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background: lavenderblush;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Form Penilaian</h1>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        if ($nilai >= 60) {
            echo "<div class='result'>Nilai anda $nilai, anda lulus</div>";
        } else {
            echo "<div class='result'>Nilai anda $nilai, anda tidak lulus</div>";
        }
    }
    ?>
</div>

</body>
</html>
