<?php
if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    require_once "../../Model/CRUD_Villa.php";
    $crud = new CRUD_Villa();
    $res = $crud->SupprimerVilla($ref);
    if ($res) {
        header('location:../../View/Villa/Succés.php?etat=Suppression');
        exit;
    } else {
        echo "Problème de suppression";
    }
}
