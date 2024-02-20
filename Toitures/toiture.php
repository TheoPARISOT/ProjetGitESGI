<?php


Namespace App\Toitures;


class toiture extends charpente
{
    protected int $hauteur;
    protected int $largeur;
    protected int $toiture;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        echo "Toiture";
    }

    public function toiture(): void
    {
        $this->isolationComble();
    }

    public function isolation(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Isolation";
        echo "pose de la laine de verre";
    }

    public function isolationComble(): void
    {
        $this->isolation();
        echo "Isolation des combles";
        echo "pose de la laine de verre";
    }

    
    public function reparationsFuite(): void
    {
        $this->charpente();
        echo "Reparations Fuite";
    }
}