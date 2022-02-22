<?php

//$products = ['age' => 1, 'name' => 2, 3, 4, 5];
//
//foreach ($products as $key => $product) {
//    echo $key . ' ' . $product."\n";
//}

// 7-mashq


// 6-mashq

$n = readline();

$son = readline();

$osishtartibida = true;
$kamayishtartibida = true;

for ($i = 2; $i <= $n; $i++) {
    $oldingison = $son;
    $son = readline();
    if ($osishtartibida && $son > $oldingison) {
        $kamayishtartibida = false;
    } elseif ($kamayishtartibida && $son < $oldingison) {
        $osishtartibida = false;
    } else {
        $osishtartibida = false;
        $kamayishtartibida = false;
    }
}

if ($osishtartibida) {
    echo 'o\'sish tartibida';
} elseif ($kamayishtartibida) {
    echo 'kamayish tartibida' ;
} else {
    echo 'na o\'sish na kamaiysh tartibida';
}

// 5-mashq

//$x = readline();
//$y = readline();
//
//if ($x > $y) {
//    $M = $x;
//    $m = $y;
//} else {
//    $M = $y;
//    $m = $x;
//}
//
//while (true) {
//    $r = $M % $m;
//    if ($r === 0) {
//        break;
//    }
//    $M = $m;
//    $m = $r;
//}
//
//echo $m;


//for ($i = 97, $j = 65; $i <= 122 || $j <= 90; $i++, $j++) {
//    echo "'" . chr($i) . "' $i '". chr($j) . "' $j\n";
//}

//$son = 213;
//
//if ($son > 0) {
//    echo 'musbat';
//} else {
//    echo 'manfiy';
//}

//$son = 0;
//$sumMusbat = 0;
//$sumManfiy = 0;

// 1,2,3,4,6
// -1,-2,-3,-4

//do {
//    $son = (int) readline();
//    if ($son > 0) {
//        $sumMusbat += $son;
//    } else {
//        $sumManfiy += $son; // -(534 + 42)
//    }
//} while ($son !== 0);
//
//echo $sumMusbat;
//echo "\n";
//echo $sumManfiy;

//$n = readline();
//
//$sum = 0;
//
//for ($i = 1; $i <= $n; $i++) {
//    $sum += readline();
//}
//echo $sum / 5;
//


//$sum += readline();
//$sum += readline();
//$sum += readline();
//$sum += readline();
//$sum += readline();
//


//$a = ['name' => 'mirafzal', 'age' => 24, 'ves' => 60];
//
//foreach ($a as $key => $iValue) {
//    echo $key .' '.$iValue ."\n";
//}

//$n = 1;
//do {
//    echo $n . "\n";
//    $n++;
//} while ($n > 10);

//$n = 1;
//$m = 50;
//
//while ($n <= 10) {
//    echo $n . ' ' . $m . "\n";
//    $n++;
//    $m -= 2;
//}

//for ($n = 1, $m = 50; $n <= 10; $n++, $m -= 2) {
//    echo $n . ' ' . $m . "\n";
//}
