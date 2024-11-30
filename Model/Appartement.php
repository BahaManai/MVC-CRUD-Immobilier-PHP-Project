<?php
require_once "Immobilier.php";
class Appartement extends Immobilier
{
    private float $surfaceEspaceCommun;

    public function __construct($référence, $propriétaire, $localité, $surface, $nbPieces, $domaineUsage, $surfaceEspaceCommun)
    {
        parent::__construct($référence, $propriétaire, $localité, $surface, $nbPieces, $domaineUsage);
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;
    }


    /**
     * Get the value of surfaceEspaceCommun
     *
     * @return float
     */
    public function getSurfaceEspaceCommun(): float
    {
        return $this->surfaceEspaceCommun;
    }

    /**
     * Set the value of surfaceEspaceCommun
     *
     * @param float $surfaceEspaceCommun
     *
     * @return self
     */
    public function setSurfaceEspaceCommun(float $surfaceEspaceCommun): self
    {
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;

        return $this;
    }
}
