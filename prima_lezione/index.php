<?php

/* <!-- PHP è un linguaggio di programmazione che è interpretato, lato server e 
    di basa sull'OOP.
--> */

//! variabili: locazioni di memoria che contengono dati

//? dichirazione
$x;
//? assegnazione
$x = 5;
//? inizializzazione: dichiarazione e l'assegnazione fatte con un unica istruzione
$nomeutente = "Loneta";
$nomeUtente = "Loris";

/* echo $nomeUtente; */


//! tipi di dati primitivi
//? interi
$integer = -10;
//? float (decimali)
$float = -5.5;
//? bool: i booleani possono assumere solo due valori: true o false\
$vero = true;
$falso = false;

//? stringhe: insieme di caratteri 
$string = "Ciao"; //supportano la string interpolation
$string2 = 'Ciao';

$age = 26;

$frase = "Ciao sono Donato \n e ho $age anni.";

$temperatura = 15;
$frase2 = 'Oggi ci sono ' . $temperatura . ' gradi a Bari';

/* echo $frase2; */

//! tipi di dati composti
//? array: lista di valori
// array omogeneo: tutti gli elementi dono dello stesso tipo
//array eterogeneo: ci possono essere valori di diverso tipo

$array = [1, 2, 3, 4];
$array2 = [1, "ciao", false];

/* echo $array2[0]; *///per accedere ad un singolo elementoi dell'array devo usare gli indici
//gli indici sono 0 based

/* var_dump($array2); */
/* var_dump($array2[1]); */

//? array associativi
$user = ['Paperino19', '12345678', 'ciao@gmail.com'];

$user2 = [
    "password" => '12345678',
    "email" => 'ciao@gmail.com',
    "username" => 'Paperino19',
];



/* var_dump($user2["username"]); */

//? oggetti



//! operatori: ci consentono di effettuare delle operazioni
//? matematici: +,-,*,/,%
$x = 6;
$y = '6';

$mod = $x % $y;
/* var_dump($mod); */

//? confronto: <,>,==,!=,===,!==,>=,<=
$uguaglianza = $x !== $y; // il risultato degli operatori di confronto è un booleano
/* var_dump($uguaglianza); */
//? logici: AND, OR, NOT
$maggiore = 7 > 6; //true
$minore = 5 < 5;

$result = !$maggiore;
//l'AND restiruisce true se entrambi gli operandi sono true
//l'OR restiruisce true se almeno uno degli operandi è true
/* var_dump($result); *///false



//! teorema di bohm e jacopini: 
// ogni problema può essere risolto con i seguenti costrutti:

//? sequenza 
$num1 = 5;

/* $sum = $num1 + $num2; */


$num2 = 11;
/* var_dump($num2);
var_dump($sum); */


//? selezione

/* $age = 18;

if($age >= 18){
    echo "Puoi guidare";
}else{
    echo "Non puoi guidare";
} */

$color = "verde";

/* if ($color === "rosso") {
    echo "Il tuo colore preferito è il rosso.";
} else if ($color == "nero") {
    echo "Il tuo colore preferito è il nero.";
} else if ($color == "viola") {
    echo "Il tuo colore preferito è il viola.";
} else {
    echo "Colore non valido";
} */

/* switch ($color) {
    case 'rosso':
        echo "Il tuo colore preferito è il rosso.";
        break;
    case 'nero':
        echo "Il tuo colore preferito è il nero.";
        break;
    case 'viola':
        echo "Il tuo colore preferito è il viola.";
        break;
    default:
        echo "Colore non valido";
}
 */



//? iterazione: ripetizione di una porzione di codice fino a quando una condizione è verificata (true)

$array = [1,2,3,4,"ciao",6,7];

// for
    /* echo $array[0];
    echo $array[1];
    echo $array[2];
    echo $array[3];
    echo $array[4];
    echo $array[5];
    echo $array[6]; */
/* for(
    //contatore
    //condizione
    //incremento
){
    //istruzioni
} */

for($i=0; $i < count($array); $i++){
    echo $array[$i];
}
//while
/* $i=0;
while($i < count($array)){
    echo $array[$i];
    $i++;
} */

// do while

//foreach (array)
foreach($array as $el){
    echo $el;
}

















?>