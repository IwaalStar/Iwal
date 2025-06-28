<?php

echo"looping menggunakan for : </br>";
for ($i = 1; $i <= 10 ; $i++) {
    echo "<li>urutan ke-$i</li>";
}

echo "</br>";
echo "looping menggunakan while : </br>";
$i = 1;
while ($i <= 10) {
    echo "<li>urutan ke-$i</li>";
    $i++;
}

?>
