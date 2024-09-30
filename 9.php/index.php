<?php
    $uang = 140500;

    $lembar_100 = intdiv($uang, 100000);
    $modul_100 = $uang % 100000;
    $lembar_20 = intdiv($modul_100, 20000);
    $modul_20 = $uang % 20000;
    $lembar_5 = intdiv($modul_20, 500);

    echo "Rp. 100.000 : $lembar_100 <br>" . "Rp. 20.000 : $lembar_20 <br>" . "Rp. 500 : $lembar_5";
?>