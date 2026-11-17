<?php
function Transpose($a)
{
    $r = count($a);
    $c = count($a[0]);

    for ($i = 0; $i < $c; $i++) {
        for ($j = 0; $j < $r; $j++) {
            echo $a[$j][$i] . "  ";
        }
        echo "<br>";
    }
}

function printMatrix($a)
{
    $r = count($a);
    $c = count($a[0]);

    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            echo $a[$i][$j] . "  ";
        }
        echo "<br>";
    }
}

function addMatrix($a, $b)
{
    $m = count($a);
    $n = count($a[0]);
    $p = count($b);
    $q = count($b[0]);

    if ($m == $p && $n == $q) {
        $c = [];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
            }
        }
        printMatrix($c);
    } else {
        echo "Matrix addition is not possible.<br>";
    }
}

function mulMatrix($a, $b)
{
    $m = count($a);
    $n = count($a[0]);
    $p = count($b);
    $q = count($b[0]);

    if ($n == $p) {
        $c = [];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $q; $j++) {
                $c[$i][$j] = 0;
                for ($k = 0; $k < $n; $k++) {
                    $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
                }
            }
        }
        printMatrix($c);
    } else {
        echo "Matrix multiplication is not possible.<br>";
    }
}

$a = [[10, 20, 30], [40, 50, 60]];
$b = [[10, 20], [10, 20], [10, 20]];

echo "Transpose of matrix A:<br>";
Transpose($a);
echo "Transpose of matrix B:<br>";
Transpose($b);
echo "Addition of matrices:<br>";
addMatrix($a, $b);
echo "Multiplication of matrices:<br>";
mulMatrix($a, $b);
?>