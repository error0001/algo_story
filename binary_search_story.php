<?php 
// найти индекс значения
function binary_srch_basic($a,$n,$x)
{
    $low = 0;
    $high = $n - 1;
    $mid = 0;
    while ($low <= $high)
    {
        // floor убирает десятичную часть в меньшую сторону
        $mid = floor(($low+$high)/2);
        if ($a[$mid] == $x)
        {
            return $mid;
        }
        // значит идем влево
        if($a[$mid] > $x)
        {
            $high = $mid - 1;
        }
        // значит идем вправо
        else //if($a[$q] < $x)
        {
            $low = $mid + 1;
        }
    }
    return "Not found";
}

$s = array(-2,2,3,4,5);
$out = bin_srch($s, count($s), -2);
print_r($out);
