<?php


Namespace App\Toitures;


class couverture extends toiture
{
    protected int $hauteur;
    protected int $largeur;
    protected int $couverture;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        echo "Couverture";
    }

    public function creuser($profondeur = 2)
    {
        echo "Creuser";
    }

    public function couverture()
    {
        $this->toiture();
        $this->creuser();
        $this->couverture = 1;
        echo "Couverture";
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