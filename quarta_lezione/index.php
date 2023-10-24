<?php

//! classi astratte: esse hanno la funzione di dettare regole alle classi figlie e non possono essere utilizzate per istanziare oggetti
//! esse vengono usate per rappresentare il concetto più astratto

abstract class User{
    //attributi
    public $name;
    public $email;
    public $password;
    static public $counter = 0;

    //costruttore: è un metodo che costruire l'oggetto che verrà istanziato (creato)
    public function __construct($_username,$_email,$_password){
        $this->name = $_username;
        $this->email = $_email;
        $this->password = $_password;

        self::$counter++;
    }

    //metodi
    abstract public function presentati();

    public function test(){
        echo "test";
    }
}

class Student extends User{

    public $subject;
    public function __construct($name,$email,$password,$subject){
        parent::__construct($name,$email,$password);

        $this->subject = $subject;
    }

    public function presentati(){
        echo "Ciao, sono ". $this->name . " e studio " . $this->subject . "\n";
    }
}


class Teacher extends User{
    public $salary;

    public function __construct($name,$email,$password,$salary){
        parent::__construct($name,$email,$password);

        $this->salary = $salary;
    }

    public function presentati(){
        echo "Buongiorno, sono ". $this->name . " e guadagno " . $this->salary . "\n";
    }
}



/* $student = new Student("Letizia","letizia@gmail.com","12345678","Matematica");
$docente = new Teacher("Marco","marco@gmail.com","12345678","130000");
$student->presentati();
$docente->presentati(); */

//! dependency injection (igniezione di dipendenze): ci permette di rendere il funzionamento di una classe dipendende 
//! dal funzionamento di unáltra classe

class Manichino{
    public $arti_superiori;
    public $arti_inferiori;

    public function __construct(Braccia $arti_superiori, Gambe $arti_inferiori){ // dependency injection
        $this->arti_inferiori = $arti_inferiori;
        $this->arti_superiori = $arti_superiori;
    }
}

abstract class Braccia{
    abstract public function attacca(); // il metodo abstarct serve a obbligare tutte le classi figle ad implementare il metodo attacca
                                        // un metodo astratto può esistere solo in una classe astratta
}

class Carezza extends Braccia{
    public function attacca(){
        echo "Ti tiro una carezza";
    }
}

class Pizzicotto extends Braccia{
    public function attacca(){
        echo "Ti tiro un pizzicotto";
    }
}

class Pugno extends Braccia{
    public function attacca(){
        echo "Ti tiro un pizzicotto";
    }
}
class Schiaffo extends Braccia{

}
class Pacca extends Braccia{
    
}
class Calata extends Braccia{
    public function attacca(){
        echo "Ti tiro un pizzicotto";
    }
}

class Gambe{
    public function muoviti(){
        echo "Mi sto per muovere";
    }
}

$carezza = new Carezza();
$pizzicotto = new Pizzicotto();
$gambe = new Gambe();
$pugno = new Pugno();
$pacca = new Pacca();

$pinocchio = new Manichino($pacca,$gambe);// object composition: al costruttore di un oggetto gli passo altri oggetti

$pinocchio->arti_superiori->attacca();