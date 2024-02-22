<?php

namespace App\Plomberie;


class tuyauterie
{
    protected int $tuyauterie;
    protected int $hauteur;
    protected int $largeur;
    protected int $profondeur;
    
    public function __construct()
    {
        $this->tranchée();
    }

    public function creuser($profondeur = 2)
    {
        echo "Creuser";
    }

    public function tuyauterie()
    {
        $this->creuser();
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->profondeur = 2;
        $this->tuyauterie = 1;
        echo "Tuyauterie";
    }

    public function canalisations()
    {
        $this->tuyauterie();
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->profondeur = 2;
        echo "Canalisations";
    }

    public function evacutaiton()
    {
        $this->tuyauterie();
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->profondeur = 2;
        echo "Evacuation";
    }

    public function tranchée(): void
    {
        $this->creuser(3);
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->profondeur = 2;
        $this->tuyauterie();
    }

    public function reparePipe(): variant_mod
    {
        $this->creuser(3);
        $this->hauteur = 6;
        $this->largeur = 3;
        $this->profondeur = 2;
        $this->tuyauterie();
    }
}