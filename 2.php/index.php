<?php
    $lama_kerja = 14;
    $jam_kerja = 8;
    $kompensasi1 = 50000;
    $kompensasi2 = 25000;

    if($lama_kerja > $jam_kerja){
       $jam_lebih = $lama_kerja - $jam_kerja;
        $total =  ($kompensasi2 * ($jam_lebih - 1)) + $kompensasi1;
        echo "Lama Kerja : $lama_kerja jam<br>" . "Jam Lebih : $jam_lebih jam<br>" . "Jumlah Kompensasi : Rp. $total" ;
    } 
?>