<?php

// creare un carrello che contenga n prodotti e che calcoli l'importo totale

// prendiamo il carrello per andare a fare la spesa
// mettere i prodotti all'interno del carrello
// calcolare l'importo totale


class Carrello
{
    public $prodotti;
    public $importoTot = 0;

    public function __construct(Prodotto ...$prodotti) // dependency injection
    {
        $this->prodotti = $prodotti;

    }

    public function calcolaImporto(){
        foreach($this->prodotti as $prodotto){
            $this->importoTot = $this->importoTot + ($prodotto->quantità*$prodotto->prezzo);
        }
    }
}

class Prodotto
{
    public $nome;
    public $quantità;
    public $prezzo;

    public function __construct($nome, $quantità, $prezzo)
    {
        $this->nome = $nome;
        $this->quantità = $quantità;
        $this->prezzo = $prezzo;
    }
}


$prodotto = new Prodotto("Maccheroni", 4, 1.5);
$prodotto2 = new Prodotto("Panzerotto surgelato", 2, 1);
$prodotto3 = new Prodotto("Cucciolone", 4, 5);
$prodotto4 = new Prodotto("Nutella", 1, 6.5);

$carrello = new Carrello($prodotto,$prodotto2,$prodotto3,$prodotto4);
$carrello->calcolaImporto();//object composition

var_dump($carrello);
