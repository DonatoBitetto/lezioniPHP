<?php

/* Rivedere la lezione
Recap per Aula studio 1
Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
Automobile
SUV
Utilitaria
Sportiva

Tenere il conto degli oggetti creati per ogni classe */


// classe Car
//marchio
//modello
//prezzo
//porte

// classe Suv estende Car
// target
// consumo
// guida()

// classe Sport estende Car
// target
// accessori
// guida()

// classe Utilitaria estende Car  
// target
// bagagliai
// guida()


class Car
{
    public $marchio;
    public $modello;
    public $prezzo;
    public $porte;

    static public $totCar = 0;

    public function __construct($marchio, $modello, $prezzo, $porte)
    {
        $this->marchio = $marchio;
        $this->modello = $modello;
        $this->prezzo = $prezzo;
        $this->porte = $porte;

        self::$totCar++;
    }

    public function guida(){
        echo "Puoi guidare \n";
    }
}

class Suv extends Car{
    public $target;
    public $consumo;
    static public $counter = 0;

    public function __construct($marchio, $modello, $prezzo, $porte,$target,$consumo){
        parent::__construct($marchio, $modello, $prezzo, $porte);

        $this->target = $target;
        $this->consumo = $consumo;

        self::$counter++;
    }

    public function guida(){// effettuiamo un override del metodo ereditato
        echo "Puoi guidare sullo sterrato \n";
    }
}

class Sport extends Car{
    public $target;
    public $consumo;

    public function __construct($marchio, $modello, $prezzo, $porte,$target,$consumo){
        parent::__construct($marchio, $modello, $prezzo, $porte);

        $this->target = $target;
        $this->consumo = $consumo;
    }

}

$suv = new Suv('RangeRover','XGT25','70000','5','ricchi','8');
$suv = new Suv('RangeRover','XGT25','70000','5','ricchi','8');
$suv = new Suv('RangeRover','XGT25','70000','5','ricchi','8');
$sport = new Sport('Lamborghini','Aventador','70000000000000000','2','multi miliardari','100');

$suv->guida();
$sport->guida();

echo Car::$totCar . "\n";
echo Suv::$counter;