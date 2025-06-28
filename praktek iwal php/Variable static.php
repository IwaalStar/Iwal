<?php

function varStatic() {
    static $x = 1;
    echo $x;
    $x++;
    echo "</br>";
}

varStatic();
varStatic();
varStatic();

?>
