<?php 
// hitung total volume2 kubus
// sisi kubus a = 9, sisi kubus b = 4

// $sisi_a = 9;
// $sisi_b = 4;
// $luas_a = $sisi_a * $sisi_a * $sisi_a;
// $luas_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $luas_a + $luas_b;
// echo $total;

function total_volume_dua_kubus($a, $b) 
{
return $a * $a * $a + $b * $b * $b;
}

echo "Total volume kubus A dan B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume kubus C dan D = " . total_volume_dua_kubus(10, 15);
?>