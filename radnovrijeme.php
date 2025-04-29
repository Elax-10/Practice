<?php

$dan = 1;
$sat = 10;

if (
    ($dan > 0 and $dan < 6 and $sat >= 9 and $sat < 17) or // Ponedjeljak - Petak
    ($dan == 6 and $sat >= 10 and $sat < 20) or           // Subota
    ($dan == 7 and $sat >= 9 and $sat < 12)               // Nedjelja
) {
    echo 'otvoreno';
} else {
    echo 'zatvoreno';
}
?>