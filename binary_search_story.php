<?php 
// проблема с диапозоном поиска.
// уточ. скорее всего уходит в бесконечный луп.
function bin_srch($a,$n,$x)
{
    $p = 1;
    $r = $n;
    $q = 0;
    while ($p <= $r)
    {
        $q = floor(($p+$r)/2) + 1;
        if ($a[$q] == $x)
        {
            print_r("\n");
            return $q;
        }
        elseif($a[$q] > $x)
        {
            $r = $q - 1;
        }
        elseif($a[$q] < $x)
        {
            $r = $q + 1;
        }
    }
    return -1;
}

$s = array(1,2,3,4,5);
$out = bin_srch($s, count($s), 6);
print_r($out);
