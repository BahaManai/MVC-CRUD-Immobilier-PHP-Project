<?php
require_once "Immobilier.php";
class Villa extends Immobilier
{
    private float $nbEtages;

    public function __construct($référence, $propriétaire, $localité, $surface, $nbPieces, $domaineUsage, $nbEtages)
    {
        parent::__construct($référence, $propriétaire, $localité, $surface, $nbPieces, $domaineUsage);
        $this->nbEtages = $nbEtages;
    }


    /**
     * Get the value of nbEtages
     *
     * @return float
     */
    public function getNbEtages(): float
    {
        return $this->nbEtages;
    }

    /**
     * Set the value of nbEtages
     *
     * @param float $nbEtages
     *
     * @return self
     */
    public function setNbEtages(float $nbEtages): self
    {
        $this->nbEtages = $nbEtages;

        return $this;
    }
}
