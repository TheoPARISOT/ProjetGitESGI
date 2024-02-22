<?php

Namespace App\Revêtement;


class RevêtementPlafonds
{
    public string $peinture;
    public string $papierPeint;
    public string $enduit;
    protected int $hauteur;
    protected int $largeur;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        $this->materiaux($this->peinture);
        echo "Revêtement";
    }

    public function assemblage($profondeur = 2)
    {
        echo "Assemblage";
    }

    public function plafond(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Plafond";
    }

    public function mur()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Mur";
    }

    public function sol()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Sol";
    }

    public function peinture()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Peinture";
    }

    public function papierPeint()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Papier Peint";
    }

    public function enduit()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Enduit";
    }
    
    public function materiaux($peinture)
    {
        $this->peinture = "Peinture";
        $this->papierPeint = "Papier Peint";
        $this->enduit = "Enduit";
    }
    
    public function dimensions($hauteur, $largeur)
    {
        $this->hauteur = $hauteur;
        $this->largeur = $largeur;
    }
    
    public function toit($hauteurToit, $longueurToit)
    {
        $this->hauteurToit = $hauteurToit;
        $this->longueurToit = $longueurToit;
    }
    
    public function __destruct()
    {
        echo "Fin Revêtement";
    }
}