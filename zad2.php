<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
/* U "array" ubacit 10 "random" brojeva i sve ih medusobno pozbrajati.
 */
$brojevi = array();
$suma = 0;
$broj = rand(-1000,1000);
for ($i = 0;$i<10;$i++){
    $suma += $broj;
    $brojevi[$i] = $broj;
    $broj = rand(-1000,1000);
};
echo "Zbroj brojeva u 'array'-u je : $suma";
?>
</body>
</html>

