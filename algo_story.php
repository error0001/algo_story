<?php

function searchI($a, $n, $x){
    foreach($a as $k => $v)
    {
      if ($v == $x)
      {
        return $k; // реализовать массив, чтобы в ответ сказать не
      }
    }
    return -1;
}

//$b = [1,2,3,5,7,8];
//echo searchI($b, count($b), 3);

// sential linear search
// $a - array, n - count of array, x needed value
function searchI1($a, $n, $x)
{
    $last = $a[$n - 1];
    $a[$n] = x;
    $i = 0;
    while($a[$i] != $x)
    {
        $i++;
    }
    $a[$n] = $last;
    if ($i < $n || $a[$n] == $x)
    {
        return $i;
    }
    return -1;
}
$b = [1,2,3,5,7,8];
echo searchI1($b, count($b), 1);
