<?php
require_once "config.php";
require_once "Appartement.php"; //Important pour le controlleur
class CRUD_Appartement
{
    private $connexion;
    public function __construct()
    {
        $config = new config();
        $this->connexion = $config->getConnexion();
    }

    function AjouterApp(Appartement $appartement)
    {
        $ref = $appartement->getRéférence();
        $prop = $appartement->getPropriétaire();
        $local = $appartement->getLocalité();
        $surf = $appartement->getSurface();
        $nb = $appartement->getNbPieces();
        $du = $appartement->getDomaineUsage();
        $sec = $appartement->getSurfaceEspaceCommun();
        $sql = "INSERT INTO Immobilier (reference,proprietaire, localite, surface, nbpieces, domaineusage, Type, SurfaceEspaceCommun) VALUES ($ref,'$prop','$local',$surf,$nb,'$du','Appartement',$sec)";
        $res = $this->connexion->exec($sql);
        return $res;
    }

    function RecupererApp(int $ref)
    {
        $sql = "SELECT reference,proprietaire, localite, surface, nbpieces, domaineusage, SurfaceEspaceCommun FROM Immobilier WHERE reference = $ref";
        $res = $this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }

    function SupprimerApp(int $ref)
    {
        $sql = "DELETE FROM Immobilier WHERE reference = $ref";
        $res = $this->connexion->exec($sql);
        return $res;
    }

    function ModifierApp(int $ref, Appartement $appartement)
    {
        $reference = $appartement->getRéférence();
        $prop = $appartement->getPropriétaire();
        $local = $appartement->getLocalité();
        $surf = $appartement->getSurface();
        $nb = $appartement->getNbPieces();
        $du = $appartement->getDomaineUsage();
        $sec = $appartement->getSurfaceEspaceCommun();
        $sql = "UPDATE Immobilier SET reference = $reference, proprietaire = '$prop', localite = '$local', surface = $surf, nbpieces = $nb, domaineusage = '$du', SurfaceEspaceCommun = $sec
        where reference = $ref";
        $res = $this->connexion->exec($sql);
        return $res;
    }

    function ListerApp()
    {
        $sql = "SELECT reference,proprietaire, localite, surface, nbpieces, domaineusage, SurfaceEspaceCommun FROM Immobilier WHERE Type = 'Appartement'";
        $res = $this->connexion->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    function Faker()
    {
        $sql = "delete from Immobilier;";
        $this->connexion->exec($sql);
        $sql = "";
        for ($i = 1; $i < 40; $i++) {
            $ref = $i;
            $prop = 'Baha';
            $local = 'Rades';
            $surf = random_int(100, 5000);
            $nb = random_int(1, 50);
            $du = 'Lorem ipsum dolor';
            $sec = random_int(100, 5000);
            $sql .= "INSERT INTO Immobilier (reference,proprietaire, localite, surface, nbpieces, domaineusage, Type, SurfaceEspaceCommun) VALUES ($ref,'$prop','$local',$surf,$nb,'$du','Appartement',$sec);";
        }
        $this->connexion->exec($sql);
    }
}
