<?php

$GLOBALS['varGlobal'] =18;

function testVar(): int {
    $varlokal = 1;
    echo "<p>Test variabel di dalam function</p>";
    echo "variabel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    echo "variabel lokal : $varlokal";
    echo "<br>";
    return $varlokal;
}

$varlokal = testVar();

echo "<p>Test variabel di luar function.<p>";
echo "variabel global : ".$GLOBALS['varGlobal'];
echo "<br>";
echo "variabel lokal : $varlokal";
echo "<br>";
?>
