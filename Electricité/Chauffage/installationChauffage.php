<?php

namespace App\Chauffage;

class InstallationChauffage
{
    protected int $surface;
    protected string $typeChauffage;
    protected bool $thermostat;
    protected bool $radiateurs;

    public function __construct()
    {
        echo "Installation de chauffage";
    }

    public function calculerSurface(int $longueur, int $largeur): int
    {
        return $longueur * $largeur;
    }

    public function installerChauffage(string $type, bool $avecThermostat, bool $avecRadiateurs): void
    {
        $this->typeChauffage = $type;
        $this->thermostat = $avecThermostat;
        $this->radiateurs = $avecRadiateurs;
        echo "Chauffage installé avec succès";
    }

    public function installerThermostat(): void
    {
        $this->thermostat = true;
        echo "Thermostat installé avec succès";
    }

    public function installerRadiateurs(): void
    {
        $this->radiateurs = true;
        echo "Radiateurs installés avec succès";
    }

    public function allumerChauffage(): void
    {
        // Code pour allumer le chauffage
        echo "Chauffage allumé";
    }

    public function eteindreChauffage(): void
    {
        // Code pour éteindre le chauffage
        echo "Chauffage éteint";
    }
}
