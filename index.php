<?php
$A          =   10;
$B          =   5 ;
$nasobek    =   $A * $B
$rozdil     =   $A - $B
$soucin     =   $A + $B

if ($B != 0 ){
    $podil      =   $A / $B
}

else{
    $podil = "nelze dělit nulou"
}

?>




<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p> A=<?= $A ?>
<p> B=<?= $B ?>
 <p>Součet: <?= $A ?>   +   <?= $B ?> = <?= $soucet ?>
 <p>Součin: <?= $A ?>   *   <?= $B ?> = <?= $soucin ?>
 <p>Rozdíl: <?= $A ?>   -   <?= $B ?> = <?= $rozdil ?>
 <p>Podíl: <?= $A ?>   /   <?= $B ?> =  <?= $podil  ?>
</body>
</html>