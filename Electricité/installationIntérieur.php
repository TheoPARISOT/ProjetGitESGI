<?php


namespace App\Electricité;

class InstallationIntérieur
{
    protected int $interrupteur;
    protected int $luminaire;
    protected int $câblage;
    protected int $priseElectrique;


    protected function __construct()
    {
        echo "Installation Intérieur";
    }

    public function tranchée(): void
    {
        $this->creuser();
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->câblage();
        echo "Tranchée";
    }

    public function interrupteur()
    {
        $this->câblage();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Interrupteur";
    }

    public function luminaire()
    {
        $this->câblage();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Luminaire";
    }


    public function câblage(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Câblage";
    }

    public function priseElectrique()
    {
        $this->câblage();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Prise Electrique";
    }   


    public function creuser(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Creuser";
    }
}