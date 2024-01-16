<?php

require_once __DIR__ . "/Product.php";

class Game extends Product
{
    public $typeGame;

    public function __construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, Category $category, $tipoGioco)
    {
        parent::__construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, $category);
        $this->typeGame = $tipoGioco;
    }
}
