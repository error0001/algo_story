<?php 
// проблема с диапозоном поиска.
function bin_srch($a,$n,$x)
{
    $p = 1;
    $r = $n;
    $q = 0;
    //r5
    while ($p <= $r)
    {
        //r5
        //r4
        $q = floor(($p+$r)/2) + 1;
        //print_r($a[$q]);
        //q3    
        //aq4   3
        //if ($q > $n || $r > $n)
        //{return "za predel";}
        if ($a[$q] == $x)
        {
            print_r("\n");
            return $q;
        }
        //q3
        //aq4 > 3
        elseif($a[$q] > $x)
        {
            //r2
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
