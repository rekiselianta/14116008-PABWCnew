<!DOCTYPE html>
<html>
<body>

<?php
function panjangNM($panjang, $kata, $warna){
  if($panjang <11 && $panjang !=0){
      $harga = 300*$panjang;
      echo "<font color=$warna>$kata</font> <br>";
      echo "Harga = $harga";	
  }
  else if($panjang <20){
      $harga = 500*$panjang;
      echo "<font color=$warna>$kata</font> <br>";
      echo "Harga = $harga";	
  }
  else{
  	  $harga = 700*$panjang;
    echo "<font color=$warna>$kata</font> <br>";
      echo "Harga = $harga";
  }
}
$x = "Makan-Makan ES";
 $warna = "red";
$harga = 0;
$panjang = strlen($x);
panjangNM($panjang, $x, $warna);
?>  

</body>
</html>
