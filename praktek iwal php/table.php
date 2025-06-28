<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2 - latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>kolom 1</th>
            <th>kolom 2</th>
            <th>kolom 3</th>
            <th>kolom 4</th>
            <th>kolom 5</th>
        </tr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>baris $i kolom $j</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>

</body>
</html>
