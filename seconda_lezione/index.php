<?php

/* Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array */

// dichirazione di un array di numeri interi
// dichirtazione di una varibile che conterrà la somma
// dichirazione di una variabile media
// dichirazione di un contatore

//per ogni numero contenuto nell'array 
    // se il numero è pari
        // effettuare la somma
        // incrementare il contatore

// se il contatore è maggiore di 0
    // dividere la somma per il contatore
//altrimenti
    // stampa "Non ci sono numeri pari"



$array = [1,1,3,1,5,4,2,1,9];
$somma = 0;
$count = 0;

foreach($array as $number){ 
    if($number % 2 == 0){
        $somma += $number;
        $count++;
    }
}

if($count > 0){
    $media = $somma / $count;
    echo $media;
}else{
   echo "Non ci sono numeri pari";
}


?>