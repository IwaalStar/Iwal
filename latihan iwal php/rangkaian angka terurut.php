<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5a - Angka Menurun</title>
    <style>
        body { font-family: Arial; }
        .angka { font-family: monospace; line-height: 1.5em; }
    </style>
</head>
<body>

<h2>Deret Angka Menurun</h2>

<?php

if (isset($_GET['angka'])) {
    $n = (int)$_GET['angka'];

    echo "<div class='angka'>";
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
    echo "</div>";
} else {
    echo "<p>Silakan tambahkan parameter angka pada URL, misalnya <>?angka=10</</p>";
}
?>

</body>
</html>
