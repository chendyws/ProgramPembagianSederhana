<?php

function bagi($angka1, $angka2) {
   $a = $angka1;
   $b = $angka2;
   if ($b == 0) {
   	   	$hasil="Tidak Valid";
   } else {
   		$hasil= $a/$b;
   }
   return $hasil;
}
 
echo "Pembagian 2 : 2 adalah ".bagi(2,2);
echo "<br />";
echo "Pembagian 7 : 2 adalah ".bagi(7,2);
echo "<br />";
echo "Pembagian 5 : 0 adalah ".bagi(5,0);
echo "<br />";

// EOF



