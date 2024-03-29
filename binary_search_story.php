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

// По Корнеру, мой слишком много ветвлений
function binary_search_recursive(Array $a, $low, $high, $x)
{
    //$mid = 0;
    
    if ($low > $high)
    {
        return "Not correct";
    }
    elseif($low <= $high)
    {
        $mid = floor(($low + $high) / 2);
        if ($a[$mid] == $x)
        {
            return $mid;   
        }
        else
        {
            if ($a[$mid] > $x)
            {
                return binary_search_recursive($a, $low,$mid - 1, $x);
            }
            else
            {
                return binary_search_recursive($a, $mid + 1, $high, $x);
            }
        }
    }
}

// geekforkeeks
function binarySearch(Array $arr, $start, $end, $x){ 
    if ($end < $start) 
        return "Not found"; 
   
    $mid = floor(($end + $start)/2); 
    if ($arr[$mid] == $x)  
        return $mid; 
  
    elseif ($arr[$mid] > $x) { 
  
        // call binarySearch on [start, mid - 1] 
        return binarySearch($arr, $start, $mid - 1, $x); 
    } 
    else { 
  
        // call binarySearch on [mid + 1, end] 
        return binarySearch($arr, $mid + 1, $end, $x); 
    } 
} 

$s = array(-2,2,3,4,5);
$value = 5;
$out = binary_search_recursive($s, 0, count($s) - 1 ,$value);
//$out = binarySearch($s, 0, count($s) - 1 ,$value);
print_r($out);
