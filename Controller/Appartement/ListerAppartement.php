<?php
require_once "../../Model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
$Appartements = $crud->ListerApp();
include "../../View/Appartement/ListerAppartement.php";
