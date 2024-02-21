<?php


namespace App\Electricité;

class installationGénéral
{
    protected int $hauteur;
    protected int $largeur;
    protected int $tableauElectrique;
    protected string $compteursElectrique;
    protected string $disjoncteur;
    protected string $gaines;


    
    public function __construct()
    {
        echo "Installation Général";
    }

    public function creuser(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Creuser";
    }

    public function compteurElectrique()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Compteur Electrique";
    }

    public function disjoncteur()
    {
        $this->hauteur = 26;
        $this->largeur = 03;
        echo "Disjoncteur";//Le bug vient d'ici
    }

    public function gaines()
    {
        $this->creuser();
        $this->cablage();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Gaines";
    }


    public function tableauElectrique()
    {
        $this->câblage();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Tableau Electrique";
    }
}