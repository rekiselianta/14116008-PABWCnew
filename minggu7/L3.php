<!DOCTYPE html>
<html>
<body>

<?php
function faktorial($angka){
  if ($angka > 1) {
    return $angka * faktorial($angka-1);
  }elseif ($angka == 1) {
    return $angka;
  }
}
echo "faktorial dari 3 = " ,faktorial(3), "<br>";
echo "faktorial dari 4 = " ,faktorial(4), "<br>";
?>