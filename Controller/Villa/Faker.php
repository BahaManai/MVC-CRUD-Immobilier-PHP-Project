<?php
require_once "../../Model/CRUD_Villa.php";
$crud = new CRUD_Villa();
$crud->Faker();
header('location:ListerVilla.php');
exit;
