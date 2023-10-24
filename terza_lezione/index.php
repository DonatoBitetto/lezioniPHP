<?php

//! OOP: la suddivisione del codice in blocchi dette classi che servono ad istanziare un oggetto


// utente: 
    // username
    // email
    // password

$user = [
    "username" => "Andrea",
    "email" => "andre@gmail.com",
    "password" => "12345678"
];

$user2 = [
    "username" => "Loneta",
    "email" => "loneta@gmail.com",
    "password" => "12345678"
];


$user3 = [
    "username" => "Alessio",
    "email" => "alessio@gmail.com",
    "pasword" => "12345678"
];

//dichiarazione di una classe
// descrivendo al computer come è composto un utente
class User{ // il nome deve essere: inglese, prima lettera maiuscola, deve essere al singolare
    //attributi
    public $name;
    public $email;
    private $password;
    static public $counter = 0;

    //costruttore: è un metodo che costruire l'oggetto che verrà istanziato (creato)
    public function __construct($_username,$_email,$_password){
        $this->name = $_username;
        $this->email = $_email;
        $this->password = $_password;

        self::$counter++;
    }

    //metodi
    public function printUsername(){
        echo $this->name . " " . $this->email . "\n";
    }

    static public function saluta(){
        echo "Ciao";
    }
}
//istanziamento di un oggetto (creazione di un oggetto di tipo User)
// stiamo anche automaticamente richiamando il costruttore
$user = new User('Letizia','letizia@gmail.com','12345678');
$user2 = new User('Antonio', 'antonio@gmail.com','12345678');
$user3 = new User('Angelo', 'angelo@gmail.com','12345678');

/* $user->printUsername();
$user2->printUsername();
$user3->printUsername(); */

/* var_dump($user,$user2); */


//! attributi e metodi statici: essi possono essre invocati senza l'istanza di un oggetto

/* echo User::$counter; */

//! erediterità

class Student extends User{

    public $subject;
    public function __construct($name,$email,$password,$subject){
        parent::__construct($name,$email,$password);

        $this->subject = $subject;
    }
}


class Teacher extends User{
    public $salary;

    public function __construct($name,$email,$password,$salary){
        parent::__construct($name,$email,$password);

        $this->salary = $salary;
    }

    public function printSalary(){
        echo $this->salary;
    }

    public function printPassword(){
        echo $this->password;
    }
}

$student = new Student('Mario','mario@gmail.com','12345678','Matematica');
$teacher = new Teacher('Antonio','antonio@gmail.com','12345678','1300');

$teacher->printUsername();
$teacher->printSalary();

/* $student->printSalary(); */

/* var_dump($student);
var_dump($teacher); */






// classi: servono ad istanziare un oggetto e rappresentano un insieme di dati
// class NomeClasse {
        // attributi

        // attributi statici: non dipendono dalla istanza di nessun oggetto

        //metodi
            //__costruct(parametri formali)
                //valorizziamo gli attributi


        // metodi statici
//}

// classe che erdita
//class NomeClasse extends NomeClassePadre{
    //attributi

    //metodi
        //__construct(parametri formali)
            //valorizzare gli attributi del padre
                //parent::__construct(paramtri formali)

            //valorizzare gli attributi della classe stessa
                //$this->nomeAttributo = $nomeParametroFormale
//}

//istanziamento di un oggetto
    //$nomeOggetto = new NomeClasse(parametri reali)

$teacher->printPassword();
/* echo $teacher->password; */

//! access modifiers: stabiliscono la visibilità di un attributo o metodo
//? public: l'accesso ad un attributo/metodo può avvenire in un qualisasi punto del codsice
//? protected: l'accesso ad un attributo/metodo può avvenire solo all'interno della classe stessa o delle classi figlie
//? private: l'accesso ad un attributo/metodo può avvenire solo all'interno della classe stessa