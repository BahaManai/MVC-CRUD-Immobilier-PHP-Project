<?php
if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    require_once "../Model/CRUD_Appartement.php";
    $crud = new CRUD_Appartement();
    $res = $crud->SupprimerApp($ref);
    if ($res) {
        header('location:../View/Succés.php?etat=Suppression');
        exit;
    } else {
        echo "Problème de suppression";
    }
}
