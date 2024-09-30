<?php
    $teks = "selamat ulang tahun 17";

   $bersih = filter_var($teks, FILTER_SANITIZE_NUMBER_INT); //mengsanitize sesuai dengan sintaks yang kita inginkan
    
   if($bersih){
    echo "Teks mengandung angka ";
    echo implode(",", str_split($bersih));
   } else {
    echo "teks tidak mengandung angka";
   }
?>