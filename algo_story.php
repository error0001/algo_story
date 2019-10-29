<?php

function serachI($a, $n, $x){
    foreach($a as $k => $v)
    {
      if ($v == $x)
      {
        return $k; // реализовать массив, чтобы в ответ сказать не
      }
    }
    return -1;
}

$b = [1,2,3,5,7,8];
echo serachI($b, count($b), 3);
