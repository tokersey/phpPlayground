<?php
$a = [3, 1, 2, 4];

$arr_count = count($a);
$swaps = 0;

for($i=0; $i<=$arr_count; $i++){
    for($j=0; $j < $arr_count-1; $j++){
        if ($a[$j] > $a[$j + 1]) {
            swap($a, $j, $j + 1);
            $swaps++;
        }
    }
}

function swap(&$arr, $a1, $b1) {
    $tmp = $arr[$a1];
    $arr[$a1] = $arr[$b1];
    $arr[$b1] = $tmp;
}

echo "Array is sorted in " . $swaps . " swaps.\n";
echo "First Element: " . $a[0] . "\n";
echo "Last Element: " . $a[count($a)-1] . "\n";

?>