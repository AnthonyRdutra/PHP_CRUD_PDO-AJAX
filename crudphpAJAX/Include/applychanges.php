<?php
include "CRUD_logic.php";

$update = new \Include\CRUD_logic();
$apply = new \Include\CRUD_logic();

$id = $_POST['id'];
$input_name = $_POST['nome'];
$input_email = $_POST['email'];

$update->Update_client($id);
$apply ->apply_changes($id,$input_name,$input_email);