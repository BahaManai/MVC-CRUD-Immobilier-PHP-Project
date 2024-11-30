<?php
require_once "config.php";
require_once "Villa.php"; //Important pour le controlleur
class CRUD_Villa
{
    private $connexion;
    public function __construct()
    {
        $config = new config();
        $this->connexion = $config->getConnexion();
    }

    function AjouterVilla(Villa $villa)
    {
        $ref = $villa->getRéférence();
        $prop = $villa->getPropriétaire();
        $local = $villa->getLocalité();
        $surf = $villa->getSurface();
        $nb = $villa->getNbPieces();
        $du = $villa->getDomaineUsage();
        $nbetages = $villa->getNbEtages();
        $sql = "INSERT INTO Immobilier (reference,proprietaire, localite, surface, nbpieces, domaineusage, Type, NbEtages) VALUES ($ref,'$prop','$local',$surf,$nb,'$du','Villa',$nbetages)";
        $res = $this->connexion->exec($sql);
        return $res;
    }

    function RecupererVilla(int $ref)
    {
        $sql = "SELECT reference,proprietaire, localite, surface, nbpieces, domaineusage, NbEtages FROM Immobilier WHERE reference = $ref";
        $res = $this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }

    function SupprimerVilla(int $ref)
    {
        $sql = "DELETE FROM Immobilier WHERE reference = $ref";
        $res = $this->connexion->exec($sql);
        return $res;
    }

    function ModifierVilla(int $ref, Villa $villa)
    {
        $reference = $villa->getRéférence();
        $prop = $villa->getPropriétaire();
        $local = $villa->getLocalité();
        $surf = $villa->getSurface();
        $nb = $villa->getNbPieces();
        $du = $villa->getDomaineUsage();
        $nbetages = $villa->getNbEtages();
        $sql = "UPDATE Immobilier SET reference = $reference, proprietaire = '$prop', localite = '$local', surface = $surf, nbpieces = $nb, domaineusage = '$du', NbEtages = $nbetages
        where reference = $ref";
        $res = $this->connexion->exec($sql);
        return $res;
    }

    function ListerVilla()
    {
        $sql = "SELECT reference,proprietaire, localite, surface, nbpieces, domaineusage, NbEtages FROM Immobilier WHERE Type = 'Villa'";
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
            $nbetages = random_int(1, 50);
            $sql .= "INSERT INTO Immobilier (reference,proprietaire, localite, surface, nbpieces, domaineusage, Type, NbEtages) VALUES ($ref,'$prop','$local',$surf,$nb,'$du','Villa',$nbetages);";
        }
        $this->connexion->exec($sql);
    }
}
