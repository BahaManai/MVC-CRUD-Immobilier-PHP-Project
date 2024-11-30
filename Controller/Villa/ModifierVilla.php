<?php
require_once "../../Model/CRUD_Villa.php";
$crud = new CRUD_Villa();

$ref = htmlspecialchars($_GET['ref']);
$VillaInit = $crud->RecupererVilla($ref);
include "../../View/Villa/ModifierVilla.php";

if (isset($_POST['OK'])) {
    $reference = htmlspecialchars($_POST['reference']);
    $prop = htmlspecialchars($_POST['proprietaire']);
    $local = htmlspecialchars($_POST['localite']);
    $surf = htmlspecialchars($_POST['surface']);
    $nb = htmlspecialchars($_POST['nbpieces']);
    $du = htmlspecialchars($_POST['domaineusage']);
    $nbe = htmlspecialchars($_POST['nbetages']);
    $villa = new Villa($reference, $prop, $local, $surf, $nb, $du, $nbe);
    $res = $crud->ModifierVilla($ref, $villa);

    if ($res) {
        header('location:../../View/Villa/Succés.php?etat=Modification');
        exit;
    } else {
        echo "Problème de modification";
    }
}
