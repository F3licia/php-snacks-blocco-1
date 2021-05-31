<!--Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60-->
<?php

$matches = [
    [
    "home-team" => " Treviso Basket",
    "ht-score" => 84,
    "visiting-team" => "Germani Brescia",
    "vt-score" => 80,
    ],

    [
    "home-team" => "Umana Reyer Venezia",
    "ht-score" => 72,
    "visiting-team" => "Pallacanestro Trieste",
    "vt-score" => 74,
    ],

    [
    "home-team" => "Umana Reyer Venezia",
    "ht-score" => 85,
    "visiting-team" => "Fortitudo Bologna",
    "vt-score" => 71,
    ]
];


for ($i = 0; $i < count($matches); $i++) {
echo $matches[$i]["home-team"]." - ".$matches[$i]["visiting-team"].
" | ".$matches[$i]["ht-score"]."-" .$matches[$i]["vt-score"] ."<br>";
}

?>