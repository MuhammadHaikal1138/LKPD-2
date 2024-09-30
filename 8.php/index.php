<?php
    $data = [80,90,75,100,85,100,65,100,100,100];
    $cari = 100;

    $jumlah = array_count_values($data);
    $hasil = $jumlah[$cari] ?? 0;

    echo "jumlah angka $cari = $hasil";
?>