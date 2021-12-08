<?php

class Prodotto{

    protected $prodottoName;
    protected $prodottoDescription;
    protected $prodottoSize;


    public function setProdottoData($_prodottoName, $_prodottoDescription,  $_prodottoSize){
        $this-> prodottoName = $_prodottoName;
        $this-> prodottoDescription = $_prodottoDescription;
        $this-> prodottoSize = $_prodottoSize;
    }
}

?>