<?php

Namespace App\Gros_oeuvre;


class infrastructure
{
    protected int $height;
    protected int $widht;
    protected string $mur;
    
    public function __construct()
    {
        echo "Infrestructure";
    }

    public function soubassement(): void
    {
        $this->elevation_mur();
        $this->dalle_sol();
        echo "Soubassement";
    }

    public function elevation_mur()
    {
        $this->mur = "Mur";
        echo "Mur";
    }   

    public function dalle_sol()
    {
        $this->height = 6;
        $this->widht = 3;
        echo "Dalle";
    }

    public function assainissement(): void
    {
        $this->canalisation();
        $this->terrassement();
        $eau = "Eau";
        $evacuation = "Evacuation";
        echo "Assainissement";
    }
}