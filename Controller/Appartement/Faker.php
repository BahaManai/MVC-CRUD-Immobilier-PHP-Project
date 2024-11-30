<?php
require_once "../../Model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
$crud->Faker();
header('location:ListerAppartement.php');
exit;
