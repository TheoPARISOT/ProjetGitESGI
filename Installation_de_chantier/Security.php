<?php

Namespace App\Installation_de_chantier;


class Security
{
    protected int $sécurité;
    protected int $protection;
    protected int $chantier;
    protected string $echafaudage;
    
    public function __construct()
    {
        echo "Sécurité";
    }

    public function sécurité()
    {
        $this->sécurité = 1;
        echo "Sécurité";
    }

    public function protection()
    {
        $this->protection = 1;
        echo "Protection";
    }

    public function chantier()
    {
        $this->chantier = 1;
        echo "Chantier";
    }

    public function echafaudage()
    {
        $this->echafaudage = "Echafaudage";
        echo "Echafaudage";
    }

}