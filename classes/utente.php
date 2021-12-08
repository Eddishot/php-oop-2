<?php

class Utente {
    public $email;
    public $name;
    public $payment;
    public $age;
    public $surname;



    function __construct($dataUtente)
    {
        $this->email = $dataUtente["email"];
        $this->name = $dataUtente["name"];
        $this->payment = $dataUtente["payment"];
        $this -> age = $dataUtente["age"];
        $this ->surname = $dataUtente["surname"];

    }


    public function getDataUtente($dataUtente){
        return "
                <h2>Name: $dataUtente[name]
                <h2>Surname: $dataUtente[surname]
                <h2>Email: $dataUtente[email]
                <h2>Age: $dataUtente[age]
                <h2>Payment: $dataUtente[payment]"
                ;
    }

}


;
?>