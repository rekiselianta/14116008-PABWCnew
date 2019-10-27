<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
function cekPrime(int $n){
  $m=0;
  $flag=0;
  $m=$n/2;
  for($i = 2; $i <= $m; $i++){
      if($n % $i == 0){
          $flag=1;
          break;
      }
  }
  if ($flag==0) echo "$n, ";
}
  echo "Bilangan Prima dari 1 - 37 Adalah : <br>";
  for($a = 1; $a<38; $a++){
  cekPrime($a);
}
?>

</body>
</html>