<?php

class Installation
{
    protected int $vitesse;
    protected string $emplacement;

    public function __construct(string $emplacement, int $vitesse)
    {
        echo "Installation du ventilateur\n";
        $this->emplacement = $emplacement;
        $this->vitesse = $vitesse;
    }

    public function demarrer()
    {
        echo "Le ventilateur démarre à la vitesse " . $this->vitesse . "\n";
    }

    public function arreter()
    {
        echo "Le ventilateur s'arrête\n";
    }

    public function changerVitesse(int $nouvelleVitesse)
    {
        $this->vitesse = $nouvelleVitesse;
        echo "La vitesse du ventilateur est réglée à " . $this->vitesse . "\n";
    }
}

// Exemple d'utilisation
$installation = new Installation("Salon", 3);
$installation->demarrer();
$installation->changerVitesse(5);
$installation->arreter();
