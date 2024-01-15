<?php

class Category
{
    public $cats;
    public $dogs;
    public $birdsAndRodents;
    public $fish;

    public function __construct($gatti, $cani, $uccelliERoditori, $pesca)
    {
        $this->cats = $gatti;
        $this->dogs = $cani;
        $this->birdsAndRodents = $uccelliERoditori;
        $this->fish = $pesca;
    }
}
