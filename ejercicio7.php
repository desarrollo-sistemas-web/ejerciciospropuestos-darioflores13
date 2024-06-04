<?php

// Desarrolla una función llamada "puntuacion" que simule un sistema de puntuaciones almacenando puntuaciones en un array. Calcula y muestra la puntuación promedio, la más alta y la más baja.
// La función devolverá un array con los siguientes valores:
// - promedio
// - max
// - min


// La función recibirá 2 arrays (uno a la vez) que se escriben a continuación, por lo que te ahorrarás esta parte. 😉

$puntuaciones = [
    "Juan" => 5,
    "María" => 9,
    "Pedro" => 3,
    "Ana" => 7,
    "Luis" => 6,
    "Laura" => 8,
    "David" => 4,
    "Carmen" => 2,
    "Raquel" => 10,
    "Jorge" => 1
];

$puntuaciones2 = [
    "Juan" => 3,
    "María" => 7,
    "Pedro" => 2,
    "Ana" => 5,
    "Luis" => 4,
    "Laura" => 6,
    "David" => 1,
    "Carmen" => 8,
    "Raquel" => 10,
    "Jorge" => 9
];

// Aquí tu código
function puntuacion($notas){
$suma = array_sum($notas);
$cantidad = count($notas);
$promedio = $suma / $cantidad;


$maximo = max($notas);
$minimo = min($notas);

return[
    "Promedio"=> $promedio,
    "Máxima Nota" => $maximo,
    "Minima Nota" => $minimo
];



}
//Puntuaciones
puntuacion ($puntuaciones);
$res1=puntuacion ($puntuaciones);
print_r($res1);

//Puntuaciones 2
puntuacion($puntuaciones2);
$res2=puntuacion ($puntuaciones2);
print_r($res2);

// TESTS
assert(puntuacion($puntuaciones) == [
    "promedio" => 5.5,
    "max" => 9,
    "min" => 1,
    "max_users" => ["Raquel"],
    "min_users" => ["Jorge"]
]);
assert(puntuacion($puntuaciones2) == [
    "promedio" => 5.5,
    "max" => 10,
    "min" => 1,
    "max_users" => ["Raquel"],
    "min_users" => ["David"]
]);

















