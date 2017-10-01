<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
/* "For" petljom trebamo povečati
iznos varijable za 10 dok pritom sve
brojeve između (i zadani) moramo zbrojiti.
 */
$broj = rand(-100,100);
$suma = $broj;
echo "Zadani broj iznosi: $broj<br>";
echo "Trenutna suma je: $suma<br><br>";
for ($i = 0;$i<10;$i++){
    $broj++;
    $suma += $broj;
    echo "Trenutni broj iznosi: $broj<br>";
    echo "Trenutna suma je: $suma<br><br>";
}
echo "<br>Konačan broj je: $broj<br>";
echo "Konačna suma je: $suma<br>";
?>
</body>
</html>

