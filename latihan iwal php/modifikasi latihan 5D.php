<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5d</title>
</head>
<body>

<h3>Masukkan angka:</h3>
<form action="" method="POST">
    <input type="number" name="angka" required>
    <button type="submit">Tampilkan!</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST["angka"];

    echo "<h4>Output:</h4>";
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
}
?>

</body>
</html>
