<?php
require_once('valida_session.php');
require_once('header.php'); 
require_once('sidebar.php'); 
require_once('bd/bd_agendamento.php'); // Supondo que você tenha um arquivo para gerenciar a conexão e as consultas ao banco de dados
require_once('bd/bd_cliente.php'); 
require_once('bd/bd_servico.php'); 
// Obtendo clientes e serviços do banco de dados
$clientes = listaClientes(); // Função que retorna a lista de clientes
$servicos = listaServicos(); // Função que retorna a lista de serviços
?>


<!-- Main Content -->
<div id="content">

    <?php require_once('navbar.php');?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h3 mb-0 font-weight-bold text-primary">Agende um atendimento</h1>
            </div>
            <div class="card-body">
                <p>Selecione data, horário e informe o nome do cliente para criar o agendamento</p>

                <form action="cad_agendamento_envia.php" method="post">
    <div class="row">
        <!-- Seção de Serviços -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Serviço</h5>
                    <select name="servico" class="form-control mb-3" required>
                        <option value="">Selecione um serviço</option>
                        <?php foreach($servicos as $servico): ?>
                            <option value="<?= $servico['id'] ?>"><?= $servico['nome'] ?> - R$<?= $servico['preco'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Seção de Clientes -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cliente</h5>
                    <select name="cliente" class="form-control mb-3" required>
                        <option value="">Selecione um cliente</option>
                        <?php foreach($clientes as $cliente): ?>
                            <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <!-- Data e Horário -->
                    <h5 class="card-title">Data</h5>
                    <input type="date" name="data" class="form-control mb-3" required>

                    <h5 class="card-title">Horários</h5>
                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="horario" value="09:00" autocomplete="off" required> 09:00
                        </label>
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="horario" value="10:00" autocomplete="off"> 10:00
                        </label>
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="horario" value="11:00" autocomplete="off"> 11:00
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Agendar</button>
                </div>
            </div>
        </div>
    </div>
</form>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php
    require_once('footer.php');
    ?>
</div>
