<?php

// liner search
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
    // создаем гарантию что х содержится в списке
    $a[$n - 1] = $x;
    $i = 0;
    while($a[$i] != $x)
    {
        $i++;
    }
    $a[$n - 1] = $last;
    if ($i < ($n - 1) || $a[$n - 1] == $x)
    {
        return $i;
    }
    return -1;
}
$b = [1,2,3,5,7,8];
echo searchI1($b, count($b), 9);

// simple factorial from max to min and * max
function fac($n)
{
    if($n == 0)
    {
        return 1;
    }
    else
    {
      return $n * fac($n - 1);  
    }
}

// reverse count with recurse
function simple_rec($n)
{
    if($n == 1)
    {
        return "1";
    }
    ////from max to min
    // return $n .= fac($n - 1);
    ////from min to max
    return simple_rec($n - 1) . $n;
}

print_r(simple_rec(3)); // => 321

// Recursive liner search
// a - arr, n - count of arr, x - needed value, i - 
function RecursiveLinerSearch($a, $n, $x, $i)
{
    if($i > $n)
    {
        return "not found";  // -1 is not-found
    }
    elseif ($i <= $n && $a[$i] == $x)
    {
        return $i;
    }
    elseif ($i <= $n && $a[$i] != $x)
    {
        return RecursiveLinerSearch($a, $n, $x, $i + 1);
    }
    return 0;
}

$ae = [1,3,4,5,6,1,3,46];
echo RecursiveLinerSearch($ae, count($ae), 4, 6);
