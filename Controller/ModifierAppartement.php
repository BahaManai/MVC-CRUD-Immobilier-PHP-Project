<?php
require_once "../Model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();

$ref = htmlspecialchars($_GET['ref']);
$AppInit = $crud->RecupererApp($ref);
include "../View/ModifierAppartement.php";

if (isset($_POST['OK'])) {
    $reference = htmlspecialchars($_POST['reference']);
    $prop = htmlspecialchars($_POST['proprietaire']);
    $local = htmlspecialchars($_POST['localite']);
    $surf = htmlspecialchars($_POST['surface']);
    $nb = htmlspecialchars($_POST['nbpieces']);
    $du = htmlspecialchars($_POST['domaineusage']);
    $sec = htmlspecialchars($_POST['surfaceespacecommun']);
    $appartement = new Appartement($reference, $prop, $local, $surf, $nb, $du, $sec);
    $res = $crud->ModifierApp($ref, $appartement);

    if ($res) {
        header('location:../View/Succés.php?etat=Modification');
        exit;
    } else {
        echo "Problème de modification";
    }
}
