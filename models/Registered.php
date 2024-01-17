<?php

require_once __DIR__ . "/Customer.php";

class Registered extends Customer
{
    public $typeSale;

    public function __construct($nome, $cognome, $email, $tipoSconto)
    {
        parent::__construct($nome, $cognome, $email);
        $this->typeSale = $tipoSconto;
    }
}
