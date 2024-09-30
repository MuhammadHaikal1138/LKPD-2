<?php
$umur = [12,15,17,20,25,30,35,40,45,50];

$dewasa = 0;
$anak_anak = 0;
foreach ($umur as $usia)
if ($usia >= 17){
    $dewasa = $dewasa + 1;
} else{
    $anak_anak = $anak_anak + 1;
}
echo "jumlah kategori dewasa : $dewasa <br>";
echo "jumlah kategori anak-anak : $anak_anak <br>";

?>  