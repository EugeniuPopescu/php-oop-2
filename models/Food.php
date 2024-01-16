<?php

require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $typeFood;

    public function __construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, Category $category, $tipoCibo)
    {
        parent::__construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, $category);
        $this->typeFood = $tipoCibo;
    }
}
