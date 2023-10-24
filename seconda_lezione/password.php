<?php

//validare una password
// la password deve avere una lunghezza minima di 8 caratteri
// la password deve contenere almeno un numero
// la password deve contenere almeno una maiuscola
// la password deve contenere almeno un carattere speciale

//! paradigma procedurale

//? la password deve avere una lunghezza minima di 8 caratteri

// chiedere la password all'utente
// se la password ha almeno 8 caratteri
    // la password è valida
// altrimenti
 // la password non è valida




/* $checkLenght = false;
if (strlen($password) >= 8){
   $checkLenght = true;
}

var_dump($checkLenght); */


//? la password deve contenere almeno un numero
// dichiarazione di una varibile di controllo
// per ogni carattere prensente nella password
    // se la password ha almeno un numero all'interno
        // la password è valida
    //altrimenti 
        // la password non è valida

/* $checkNumber = false;
for($i = 0;  $i < strlen($password); $i++){
    if (is_numeric($password[$i])){
        $checkNumber = true;
    }
}

var_dump($checkNumber); */

//!paradigma funzionale

//? estrapolamento, incapsulamento ed astrazione

function checkLenght($string, $lenght){
    if (strlen($string) >= $lenght){
       return true;
    }
    return false;
}


function checkNumber($string){
    for($i = 0;  $i < strlen($string); $i++){
        if (is_numeric($string[$i])){
            return true;
        }
    }
    return false;
}

// dichiarazione di un array contenente tutti i caratteri speciali
// dichiarazione di una variabile di controllo

//per ogni carattere contenuto nell'array
    // per ogni carattere presente nella password
        // se il carattere della password è uguale al carattere dell'array
            // la password è valida

// paradigma funzionale
function checkSpecial($string){
    $specialChars = ['!','@','#','$','%','^','&','*','(',')'];
    
    foreach ($specialChars as $char){
        for($i=0; $i < strlen($string); $i++){
            if($string[$i] == $char){
                return true;
            }
        }
    }
    return false;
}

function checkPassword(){
    $password = readline("Inserisci la password: ");
    if(checkLenght($password, 8) && checkNumber($password) && checkSpecial($password)){
        echo "La password è valida";
    }else{
        echo "La password non è valida";
    }
}

checkPassword();