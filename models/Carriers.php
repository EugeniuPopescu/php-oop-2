<?php

require_once __DIR__ . "/Product.php";

class Carriers extends Product
{
    public $typeCarriers;

    public function __construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, Category $category, $tipoLettiera)
    {
        parent::__construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, $category);
        $this->typeCarriers = $tipoLettiera;
    }
}
