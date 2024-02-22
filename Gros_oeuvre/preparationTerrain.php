<?php

Namespace App\Gros_oeuvre;

class preparationTerrain
{
    protected int $terrassement;
    protected int $canalisation;
    protected int $gros_oeuvre;
    protected int $height;
    protected int $widht;
    
    public function __construct()
    {
        echo "Terrassement";
    }

    public function creuser($profondeur = 2)
    {
        echo "Creuser";
    }

    public function terrassement()
    {
        $this->creuser();
        $this->canalisation();
        $this->terrassement = 1;
        echo "Terrassement";
    }

    public function canalisation()
    {
        $this->canalisation = 1;
        echo "canalisation";
    }

    public function gros_oeuvre()
    {
        $this->gros_oeuvre = 1;
        echo "Gros oeuvre";
    }

    public function preparePool(): void
    {
        $this->creuser(3);
        $this->height = 6;
        $this->widht = 3;
        $this->terrassement();
    }

}