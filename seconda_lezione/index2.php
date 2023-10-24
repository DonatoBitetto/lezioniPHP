<?php

//built-in

/* var_dump()
count() */

// users function



$x = 5;

//definito una funzione
function saluta($peppino){
    //istruzioni
    $peppino++;
    return $peppino;
}

//invocazione


$y = saluta($x);



$somma = $y + 10;


// passaggio per valore
// valore di default
// parametro variabile
// callback

$number = 5;
$number1 = 10;
$number2 = 40;
$number3 = 22;
$number4 = 12;
$number5 = 10;
$number6 = 1;
$number7 = 10;
$number8 = 17;
$number9 = 22;
$number10 = 20;
function somma(...$numbers){
    $somma =array_reduce($numbers,function ($sum,$number){
        return $sum + $number;
    });

    return $somma;
}

echo somma($number,$number1,$number2,$number3,$number4,$number5,$number6,$number7,$number8,$number9,10,30,40);




