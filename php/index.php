
<?php
$ten = "Yến";
$mon_hoc = "Deploy tự động bằng GitHub Actions";
$thoi_gian = date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Website PHP Deploy</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: #f0f4f8;
            padding: 60px 20px;
        }
        .container {
            background: white;
            max-width: 600px;
            margin: auto;
            padding: 40px;
            border-radius: 15px;
        }
        h1 { color: #2563eb; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Xin chao! Day la website PHP.</h1>

        <p>Ten sinh vien: <?php echo $ten; ?></p>

        <p>Mon hoc: <?php echo $mon_hoc; ?></p>

        <p>Thoi gian hien tai:
            <?php echo $thoi_gian; ?>
        </p>

        <h2>Lab Deploy - Bai 2</h2>
        <p>Website PHP duoc deploy bang GitHub Actions.</p>
    </div>
</body>
</html>
