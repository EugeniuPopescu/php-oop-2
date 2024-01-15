<?php

require_once __DIR__ . "/Category.php";

class Product
{
    public $petClothes;
    public $petBowls;
    public $petSnak;
    public $games;
    public $carriers;
    public $cleaning;
    public $category;

    public function __construct($vestiti, $ciotole, $crocchette, $giochi, $trasportini, $pulizia, Category $category)
    {
        $this->petClothes = $vestiti;
        $this->petBowls = $ciotole;
        $this->petSnak = $crocchette;
        $this->games = $giochi;
        $this->carriers = $trasportini;
        $this->cleaning = $pulizia;
        $this->category = $category;
    }
}
