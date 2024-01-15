<?php

require_once __DIR__ . "/Category.php";

class Product
{
    public $productName;
    public $productPrice;
    public $productImg;
    public $productDescription;
    public $category;

    public function __construct($nomeProdotto, $prezzoProdotto, $imgProdotto, $descrizioneProdotto, Category $category)
    {
        $this->productName = $nomeProdotto;
        $this->productPrice = $prezzoProdotto;
        $this->productImg = $imgProdotto;
        $this->productDescription = $descrizioneProdotto;
        $this->category = $category;
    }
}
