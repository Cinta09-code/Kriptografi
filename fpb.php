<?php

    function fpb($m,$n){
        while($n != 0){
            $kali = floor ($m / $n);
            $sisa = $m % $n;

            // 80 = 6 x 12 + 8
            echo $m . " = " . $kali . " x " . $n . " + " . $sisa . "<br>";
            $temp = $n;
            $n = $m % $n;
            $m = $temp;
        }
        return $m;
    }
$m = 20;
$n = 3;
$hasil = fpb($m,$n);
if($hasil == 1){
    echo "FPB dari ".$m." dan ".$n." adalah relatif prima ".$hasil;
}else{
    echo "FPB dari ".$m." dan ".$n." adalah bukan relatif prima ".$hasil;
}

?>