<?php 
// найти индекс значения
// вход расписан по Кормену, для большего понимания
// a - array, n - count from array, x - needed value
function binary_srch_basic($a,$n,$x)
{
    // по Томасу Кормену, должно 1
    $low = 0;
    // по Кормену Т. здесь должно быть без -1 
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

//$s = array(-2,2,3,4,5);
//$out = bin_srch($s, count($s), -2);
//print_r($out);

function binary_search_recursive($a, $x)
{
    $low = 0;
    $high = count($a);
    $mid = 0;
    
    if($low <= $high)
    {
        $mid = floor(($low + $high) / 2);
        if ($a[$mid] != $x)
        {
            if ($a[$mid] > $x)
            {
                binary_search_recursive($a, $low,$mid - 1, $x);
            }
            else
            {
               binary_search_recursive($a, $mid + 1, $high, $x);
            }
        }
        return $mid;
    }   
    return "Not found";
}
