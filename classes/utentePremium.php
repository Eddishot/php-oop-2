<?php

    require_once __DIR__ . "/utente.php";

    class UtentePremium extends Utente{


        protected $deliveryCost;
  
  function __construct($dataUtente)
  {
    parent::__construct($dataUtente);
    
    $this->setDeliveryCost($dataUtente);
   
    echo $this->getUserPrimeData($dataUtente);
  }
  // setter
  protected function setDeliveryCost($dataUtente)
  {
    if ($dataUtente["prime"]) {
      $this->setDeliveryCost = 0;
    } else {
      $this->setDeliveryCost = 35;
    }
  }
  // getter
  protected function getUserPrimeData($dataUtente)
  {
    return  "<h2>Utente Prime</h2>
             <h3>Name = </strong>$dataUtente[name]</h3> 
             <h3> Surname = </strong>$dataUtente[surname]</h3> 
             <h3>Age = </strong>$dataUtente[age]</h3> 
             <h3>Payment = </strong>$dataUtente[payment]</h3>
             <h3>Delivery = </strong>$this->setDeliveryCost</h3><hr>";
  }




    }
    //     public $discount;
    //     public $fastShipment;
      

    //     public function __construct($_discount,$_fastShipment)
    //     {
    //        $this->discount = $_discount;
    //        $this->fastShipment = $_fastShipment;
    //     }


       
    // }


    // $pippo = new UtentePremium("40%","2");
    // $pippoDati->  setName("giovanni");
    // $pippoEmail -> setEmail("treqgamil.it");
    // var_dump($pippo);



    

    

?>