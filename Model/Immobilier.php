<?php
class Immobilier
{
    protected int $référence;
    protected String $propriétaire;
    protected String $localité;
    protected float $surface;
    protected int $nbPieces;
    protected String $domaineUsage;
    
    public function __construct($référence, $propriétaire, $localité, $surface, $nbPieces, $domaineUsage)
    {
        $this->référence = $référence;
        $this->propriétaire = $propriétaire;
        $this->localité = $localité;
        $this->surface = $surface;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
    }


    /**
     * Get the value of référence
     *
     * @return int
     */
    public function getRéférence(): int
    {
        return $this->référence;
    }

    /**
     * Set the value of référence
     *
     * @param int $référence
     *
     * @return self
     */
    public function setRéférence(int $référence): self
    {
        $this->référence = $référence;

        return $this;
    }

    /**
     * Get the value of propriétaire
     *
     * @return String
     */
    public function getPropriétaire(): String
    {
        return $this->propriétaire;
    }

    /**
     * Set the value of propriétaire
     *
     * @param String $propriétaire
     *
     * @return self
     */
    public function setPropriétaire(String $propriétaire): self
    {
        $this->propriétaire = $propriétaire;

        return $this;
    }

    /**
     * Get the value of localité
     *
     * @return String
     */
    public function getLocalité(): String
    {
        return $this->localité;
    }

    /**
     * Set the value of localité
     *
     * @param String $localité
     *
     * @return self
     */
    public function setLocalité(String $localité): self
    {
        $this->localité = $localité;

        return $this;
    }

    /**
     * Get the value of surface
     *
     * @return float
     */
    public function getSurface(): float
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     *
     * @param float $surface
     *
     * @return self
     */
    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of nbPieces
     *
     * @return int
     */
    public function getNbPieces(): int
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     *
     * @param int $nbPieces
     *
     * @return self
     */
    public function setNbPieces(int $nbPieces): self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get the value of domaineUsage
     *
     * @return String
     */
    public function getDomaineUsage(): String
    {
        return $this->domaineUsage;
    }

    /**
     * Set the value of domaineUsage
     *
     * @param String $domaineUsage
     *
     * @return self
     */
    public function setDomaineUsage(String $domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }
}
