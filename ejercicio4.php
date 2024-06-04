<?php

// Escribe una función llamada "mayorDelArreglo" que reciba un arreglo de números y devuelva el mayor número que contiene.
// Si el arreglo está vacío la función deberá devolver -1.


// Aquí tu código
function mayorDelArreglo (int $numeros){
    if (empty($numeros)) {
    return -1;
    } else {
    return max($numeros);
    }
}

// TESTS
assert(mayorDelArreglo([1, 2, 3, 4, 5]) == 5);
assert(mayorDelArreglo([5, 4, 3, 2, 1]) == 5);
assert(mayorDelArreglo([1, 2, 3, 4, 5, 5]) == 5);
assert(mayorDelArreglo([1, 2, 3, 4, 5, 5, 5]) == 5);
assert(mayorDelArreglo([]) == -1);
