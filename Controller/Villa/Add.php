<?php
require_once "../../Model/CRUD_Villa.php";
$crud = new CRUD_Villa();
include "../../View/Villa/Add.php";

if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['reference']);
    $prop = htmlspecialchars($_POST['proprietaire']);
    $local = htmlspecialchars($_POST['localite']);
    $surf = htmlspecialchars($_POST['surface']);
    $nb = htmlspecialchars($_POST['nbpieces']);
    $du = htmlspecialchars($_POST['domaineusage']);
    $nbe = htmlspecialchars($_POST['nbetages']);
    $villa = new Villa($ref, $prop, $local, $surf, $nb, $du, $nbe);
    $res = $crud->AjouterVilla($villa);
    if ($res) {
        header('location:../../View/Villa/Succés.php?etat=Insertion');
        exit;
    } else {
        echo "Problème d'ajout";
    }
}
