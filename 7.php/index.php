<?php
    $nama1 = "Haikal";
    $nama2 = "Alya";
    $jumlah1 = strlen($nama1);
    $jumlah2 = strlen($nama2);
    $selisih =abs($jumlah1 - $jumlah2);
   
    if($jumlah1 > $jumlah2){
        echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $selisih kerakter";
    } else if($jumlah1 < $jumlah2) {
        echo "$nama1 memiliki jumlah karakter lebih sedikit dari $nama2 : selisih $selisih karakter";
    } else {
        echo "Kedua nya memiliki jumlah karakter yang sama : kedua nya memiliki jumlah $jumlah1";
    }
?>