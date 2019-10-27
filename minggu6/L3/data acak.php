<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
  $a = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
  echo "Sebelum Sorting :<br>";
  foreach($a as $value) {
    echo "$value";
    echo "<br>";
}
  sort($a);
  echo "Setelah Sorting :<br>";
  foreach($a as $value) {
    echo "$value";
    echo "<br>";
}
?>

</body>
</html>