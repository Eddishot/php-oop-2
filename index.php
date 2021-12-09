<?php

include_once __DIR__ . "/data/Users.php";
include_once __DIR__ . "/data/Products.php";
include_once __DIR__ . "/classes/UtentePremium.php";
include_once __DIR__ . "/classes/Prodotto.php";


foreach ($usersData as $Users){
// qui non sono riuscito a mettere il valore prime uguale a true
//e quindi tolgo questa chiave all'array degli users
    if (array_key_exists("prime", $Users)){
        $singleUserPrime = new UtentePremium($Users);

    } else{

        $singleUser = new Utente($Users);

        echo $singleUser-> getDataUtente($Users);
    }
}


foreach($products as $key => $value){
    $singleProduct = new Prodotto();


    $singleProduct ->setProdottoData($key, $value[`description`], [`size`]);

    var_dump($singleProduct);
}




?>