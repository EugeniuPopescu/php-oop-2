<?php

require_once __DIR__ . "/Customer.php";

class NotRegistered extends Customer
{
    public $noSale;

    public function __construct($nome, $cognome, $email, $noSconto)
    {
        parent::__construct($nome, $cognome, $email);
        $this->noSale = $noSconto;
    }
}
