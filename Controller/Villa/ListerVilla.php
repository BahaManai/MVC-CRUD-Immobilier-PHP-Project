<?php
require_once "../../Model/CRUD_Villa.php";
$crud = new CRUD_Villa();
$Villas = $crud->ListerVilla();
include "../../View/Villa/ListerVilla.php";
