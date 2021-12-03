<?php

class Utente {
    public $email;
    public $name;
    public $payment;



    public function __construct($_email, $_name, $_payment)
    {
        $this->email = $_email;
        $this->name = $_name;
        $this->setPayment($_payment);
    }

    public function setPayment($_value){
        $this->payment = $_value;
    }
    public function getPayment(){
        return $this->payment;
    }

    public function setName($_value){
        $this->name = $_value;
    }
    public function setEmail($_value){
        $this->email = $_value;
    }

    
}


$pippo2 = new Utente("tre@gmail.it", "giovanni", "paypal");
    // var_dump($pippo2);
?>