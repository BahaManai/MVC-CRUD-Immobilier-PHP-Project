<?php
require_once "../../Model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
include "../../View/Appartement/Add.php";

if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['reference']);
    $prop = htmlspecialchars($_POST['proprietaire']);
    $local = htmlspecialchars($_POST['localite']);
    $surf = htmlspecialchars($_POST['surface']);
    $nb = htmlspecialchars($_POST['nbpieces']);
    $du = htmlspecialchars($_POST['domaineusage']);
    $sec = htmlspecialchars($_POST['surfaceespacecommun']);
    $appartement = new Appartement($ref, $prop, $local, $surf, $nb, $du, $sec);
    $res = $crud->AjouterApp($appartement);
    if ($res) {
        header('location:../../View/Appartement/Succés.php?etat=Insertion');
        exit;
    } else {
        echo "Problème d'ajout";
    }
}
