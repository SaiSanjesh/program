<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$count = 0;
$num = 2;
while ($count < 5) {
    if (isPrime($num)) {
        echo $num . " ";
        $count++;
    }
    $num++;
}
?>
