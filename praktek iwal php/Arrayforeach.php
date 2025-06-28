<?php

$nama = ["ahmad","budi","chika","dhini","erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>looping for array</title>
</head>
<body>
    <?php
    
        foreach ($nama as $absen) {
            echo "<li>$absen</li>";
        }

    ?>
</body>
</html>
