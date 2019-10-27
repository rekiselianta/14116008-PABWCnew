<!DOCTYPE html>
<html>
<body>

<?php
function swap (&$a, &$b){
  	$a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
}
$x = 10;
$y = 5;
echo "Sebelum ditukar <br> X: $x <br> Y: $y <br>";
swap($x, $y);
echo "Setelah Ditukar <br> X: $x <br> Y: $y <br>";
?>  

</body>
</html>