<?php

Namespace App\Gros_oeuvre;


class fondation
{
    protected int $profondeur;
    protected int $largeur;
    protected int $fondation;
    protected int $hauteur;
    protected int $longueur;
    
    public function __construct()
    {
        echo "Fondation";
    }

    public function creuser($profondeur = 2)
    {
        echo "Creuser";
    }

    public function fondation()
    {
        $this->soubassement();
        $this->creuser();
        $this->fondation = 1;
        echo "Fondation";
    }

    public function Nivellement()
    {
        $this->hauteur = 6;
        $this->longueur = 3;
        echo "Nivellement";
    }
}