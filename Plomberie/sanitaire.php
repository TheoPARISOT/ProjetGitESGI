<?php


Namespace App\Plomberie;


class sanitaire
{
    protected int $sanitaire;
    protected int $hauteur;
    protected int $largeur;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        echo "Sanitaire";
    }

    public function assemblage($profondeur = 2)
    {
        echo "Creuser";
    }

    public function douche(): void
    {
        $this->levier();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Douche";
    }

    public function toilette()
    {
        $this->siphon();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Pose Toilette";
    }

    public function baignoire()
    {
        $this->siphon();
        $this->tuyaux();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Pose Baignoire";
    }

    public function levier(): void
    {
        $this->robinetterie();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Levier";
    }

    public function siphon()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->sanitaire = 1;
        echo "Siphon";
    }

    public function robinetterie()
    {
        $this->assemblage();
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->sanitaire = 1;
        echo "Robinetterie";
    }

}