<?php
require_once("valida_session.php");
require_once("bd/bd_agendamento.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$codigo = $_POST["cod"];
$cod_funcionario = $_POST["cod_funcionario"];
$data_servico = $_POST["data_servico"];
$status = $_POST["status"];
$data = date("y/m/d");

$dados = editarAgendamento($codigo, $cod_funcionario, $data_servico, $status, $data);
if ($dados == 1){
    $_SESSION['texto_sucesso'] = 'Os dados do agendamento de serviço foram alterados no sistema.';
    header("Location: agendamento.php");
} else {
    $_SESSION['texto_erro'] = 'Os dados do agendamento de serviço não foram alterados no sistema!';
    header("Location: agendamento.php");
}
?>
