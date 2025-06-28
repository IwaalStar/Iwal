<?php
    $nama_anda = $_POST["nama-anda"] ??".";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome, <?php echo $nama_anda ?></title>
    </head>
    <body>
        <h2>
            Welcome to the junggle, <?php echo $nama_anda ?>!
        </h2>
    </body>
