<?php

class Customer
{
    public $fName;
    public $sName;
    public $email;

    public function __construct($nome, $cognome, $email)
    {
        $this->fName = $nome;
        $this->sName = $cognome;
        $this->fName = $email;
    }
}
