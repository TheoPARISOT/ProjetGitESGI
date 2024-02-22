<?php

Namespace App\Peinture;


class toilette
{

    protected string $couleur;
    protected string $motif;
    protected string $texture;
    protected string $rouleau;
    protected string $pinceau;
    protected string $pistolet;
    protected string $brosse;
    protected string $joint;
    protected string $couteau;
    protected string $papier;
    protected string $toile;
    protected string $ruban;


    public function __construct()
    {
        $this->materiaux($this->peinture);
        echo "Peinture";
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

    public function enduit(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Enduit";
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

    public function couleur()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Couleur";
    }

    public function motif()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Motif";
    }

    public function texture()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Texture";
    }
}