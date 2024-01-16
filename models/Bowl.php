<?php

require_once __DIR__ . "/Product.php";

class Bowl extends Product
{
    public $typeBowl;

    public function __construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, Category $category, $tipoCiotola)
    {
        parent::__construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, $category);
        $this->typeBowl = $tipoCiotola;
    }
}
