<?php
require_once 'ad3.php';

$myN1 = 5;
$myN2 = 3;

echo "Sum: ".(($myN1 + $myN2) * $myN2);
echo "<br>";

++$myN1;
echo $myN1;
echo "<br>";

$myN1*= 4;
echo "Value: ".$myN1;
echo "<br>";

$myN2/= 2;
echo "Value: ".$myN2;
echo "<br>";

?>