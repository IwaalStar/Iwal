<?php
$nama_presiden = $_GET['nama']??".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salam, pak <?php echo $nama_presiden; ?></title>
</head>
<body>
    <h1><?php echo $nama_presiden; ?> adalah salah satu mantan Presiden Indonesia</h1>
</body>
</html>
