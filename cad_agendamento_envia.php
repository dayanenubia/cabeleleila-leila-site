<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Recebe os dados do formulário
$cod_cliente = $_POST["cod_cliente"];
$cod_servico = $_POST["cod_servico"];
$cod_funcionario = $_POST["cod_funcionario"];
$data_servico = $_POST["data_servico"]; // Data no formato YYYY-MM-DD
$horario = $_POST["horario"]; // Horário no formato HH:MM:SS
$status = 1;
$data = date("Y-m-d"); // Formato de data YYYY-MM-DD

require_once("bd/bd_agendamento.php");

// Adiciona o horário e a data na chamada da função
$dados = cadastraAgendamento($cod_cliente, $cod_servico, $cod_funcionario, $data_servico, $horario, $status, $data);

if ($dados == 1) {
    $_SESSION['texto_sucesso'] = 'Agendamento realizado com sucesso.';
    unset($_SESSION['texto_erro']);
    header("Location:resumo_agendamento.php");
} else {
    $_SESSION['texto_erro'] = 'Os dados não foram adicionados no sistema!';
    header("Location:cad_agendamento.php");
}
?>
