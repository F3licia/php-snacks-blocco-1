<!--Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà
contenere lo stesso numero più di una volta-->
<?php

$numbers=[];

for($i=1; $i <= 15; $i++){
    $randomNo = rand(1, 15);
    if(!in_array($randomNo, $numbers)){
        $numbers[] = $randomNo;
    } else {
        $i--;
    }
}

var_dump($numbers)

?>