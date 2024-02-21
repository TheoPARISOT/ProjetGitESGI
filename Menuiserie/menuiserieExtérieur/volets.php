<?php

Namespace App\Menuiserie;


class volets
{
    public string $alu;
    public string $bois;
    public string $pvc;
    protected int $hauteur;
    protected int $largeur;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        $this->materiaux($this->alu);
        echo "Volets";
    }

    public function assemblage($profondeur = 2)
    {
        echo "Assemblage";
    }

    public function porteFenetre(): void
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre";
    }

    public function fenêtre()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Fenêtre";
    }

    public function porte()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte";
    }

    public function poignée(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Poignée";
    }

    public function serrure()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Serrure";
    }
}