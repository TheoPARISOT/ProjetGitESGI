<?php

Namespace App\Toitures;

class charpente extends couverture
{
    protected int $hauteur;
    protected int $largeur;
    protected int $charpente;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        $this->assemblage();
    }

    public function assemblage(): void
    {
        $couverture = new couverture();
        $couverture->couverture();
        $toi = new toiture();
        $toi->toiture();
    }
    public function charpente()
    {
        $this->toiture();
        $this->creuser();
        $this->charpente = 1;
        echo "Charpente";
    }

    public function toiture()
    {
        $this->hauteurToit = 6;
        $this->longueurToit = 3;
        echo "Toiture";
    }

    public function Nivellement()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Nivellement";
    }

}