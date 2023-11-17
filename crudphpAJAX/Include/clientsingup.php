<?php

include "CRUD_logic.php";

$input_name = $_POST['nome'];
$input_email = $_POST['email'];

$logic_process = new \Include\CRUD_logic();
$logic_process->Create_client($input_name, $input_email);

echo "Dados recebidos com sucesso!"; // Resposta para o AJAX
