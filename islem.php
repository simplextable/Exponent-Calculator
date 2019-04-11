<?php

$_POST['base'];
$_POST['exponent'];

$fresult = pow($_POST['base'], $_POST['exponent'] );
//echo $fresult;

header('location: index.php?fresult='.$fresult.'&base='.$_POST['base'].'&exponent='.$_POST['exponent'].'');

?>