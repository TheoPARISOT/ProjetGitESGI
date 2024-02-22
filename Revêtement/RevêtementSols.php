<?php


namespace App\Revêtement;


class RevêtementSols
{
    public string $carrelage;
    public string $parquet;
    public string $moquette;
    protected int $hauteur;
    protected int $largeur;
    protected int $hauteurToit;
    protected int $longueurToit;
    
    public function __construct()
    {
        $this->materiaux($this->carrelage);
        echo "Revêtement";
    }

    public function assemblage($profondeur = 2)
    {
        echo "Assemblage";
    }

    public function sol(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Sol";
    }

    public function mur()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Mur";
    }

    public function plafond()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Plafond";
    }

    public function carrelage()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Carrelage";
    }

    public function parquet()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Parquet";
    }

    public function moquette()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Moquette";
    }

    public function materiaux($carrelage)
    {
        $this->carrelage = "Carrelage";
        $this->parquet = "Parquet";
        $this->moquette = "Moquette";
    }

    public function dimensions($hauteur, $largeur)
    {
        $this->hauteur = $hauteur;
        $this->largeur = $largeur;
    }




}