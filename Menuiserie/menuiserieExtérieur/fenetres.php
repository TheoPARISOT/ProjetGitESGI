<?php 

namespace App\Menuiserie;

class fenetres
{
    protected string $alu;
    protected string $bois;
    protected string $pvc;
    protected int $hauteur;
    protected int $largeur;
    protected int $hauteurToit;
    protected int $longueurToit;

    public function __construct()
    {
        $this->materiaux($this->alu);
        echo "Fenêtres";
    }

    public function assemblage($profondeur = 2)
    {
        echo "Assemblage";
    }

    public function porteFenetre(): void
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre";
    }


    public function fenêtre()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Fenêtre";
    }

    public function porte()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte";
    }

    public function poignée(): void
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Poignée";
    }

    public function serrure()
    {
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Serrure";
    }

    public function materiaux($alu)
    {
        $this->alu = "alu";
        $this->bois = "bois";
        $this->pvc = "pvc";
    }


    public function toit()
    {
        $this->hauteurToit = 6;
        $this->longueurToit = 3;
        echo "Toit";
    }

    public function porteGarage()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Garage";
    }


    public function porteCoulissante()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Coulissante";
    }

    public function portePlacard()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Placard";
    }

    public function porteIntérieur()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Intérieur";
    }

    public function porteExtérieur()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Extérieur";
    }

    public function porteSalleBain()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Salle de Bain";
    }


    public function porteChambre()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Chambre";
    }

    public function porteCuisine()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Cuisine";
    }

    public function porteSalon()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Salon";
    }


    public function porteEntree()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Entrée";
    }


    public function porteService()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Service";
    }

    public function porteFenetreCoulissante()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre Coulissante";
    }

    public function porteFenetreOscilloBattante()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre Oscillo Battante";
    }


    public function porteFenetreBattante()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre Battante";
    }

    public function porteFenetreFixe()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre Fixe";
    }

    public function porteFenetreAvecSerrure()
    {
        $this->poignée();
        $this->serrure();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre Avec Serrure";
    }


    public function porteFenetreAvecPoignée()
    {
        $this->poignée();
        $this->hauteur = 6;
        $this->largeur = 3;
        echo "Porte Fenêtre Avec Poignée";
    }
}