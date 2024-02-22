<?php 


Namespace App\Revêtement;


class RevêtementMurs
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

    public function mur(): void
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

}