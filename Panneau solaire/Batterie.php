<?php

namespace App\Energie;

class BatteriePanneauxSolaires
{
    protected int $capacite;
    protected string $type;

    public function __construct(int $capacite, string $type)
    {
        $this->capacite = $capacite;
        $this->type = $type;
    }

    public function charger(): void
    {
        echo "La batterie de type {$this->type} est en train de se charger...\n";
        // Ajoutez ici les étapes nécessaires pour charger la batterie
    }

    public function decharger(): void
    {
        echo "La batterie de type {$this->type} est en train de se décharger...\n";
        // Ajoutez ici les étapes nécessaires pour décharger la batterie
    }

    public function verifierEtat(): void
    {
        echo "Vérification de l'état de la batterie de type {$this->type}...\n";
        // Ajoutez ici les étapes nécessaires pour vérifier l'état de la batterie
    }

    public function remplacer(): void
    {
        echo "Remplacement de la batterie de type {$this->type}...\n";
        // Ajoutez ici les étapes nécessaires pour remplacer la batterie
    }
}

// Exemple d'utilisation
$batterie = new BatteriePanneauxSolaires(5000, "Li-ion");
$batterie->charger();
$batterie->decharger();
$batterie->verifierEtat();
$batterie->remplacer();

?>
