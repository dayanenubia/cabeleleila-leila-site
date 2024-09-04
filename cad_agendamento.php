<?php
require_once('valida_session.php');
require_once('header.php');
require_once('bd/bd_servico.php');
require_once('bd/bd_cliente.php');
require_once('bd/bd_funcionario.php');

// Obtendo clientes, serviços e funcionários do banco de dados
$clientes = listaClientes();
$servicos = listaServicos();
$funcionarios = listaFuncionarios();

// Nome do serviço e foto correspondente
$mapa_imagens = [
    'Corte, lavagem e secagem' => 'imagens_servicos/corte_lavagem_e_secagem.jpg',
    'Coloração' => 'imagens_servicos/coloracao.jpg',
    'Tratamentos' => 'imagens_servicos/tratamentos.jpg',
    'Alisamento e relaxamento' => 'imagens_servicos/alisamento_e_relaxamento.jpg',
    'Permanente e ondulado' => 'imagens_servicos/permanente_e_ondulado.png',
    'Manicure e pedicure' => 'imagens_servicos/manicure_e_pedicure.png',
    // Adicione outros serviços e imagens aqui
];
?>

<!-- Main Content -->
<div id="content" class="container-fluid p-0" style="font-family: 'Newsreader', serif;">
   <?php require_once('navbar.php');?>

   <!-- Begin Page Content -->
   <div class="container-fluid">

       <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h1 class="h3 mb-0 font-weight-bold" style="color: #426B1F;">Adicionar Agendamento de Serviço</h1>
           </div>
           <div class="card-body">
               <p>Preencha os dados abaixo para agendar um novo serviço.</p>

               <!-- Exibindo Mensagens de Sucesso e Erro -->
               <?php if (isset($_SESSION['texto_erro'])): ?>
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?= $_SESSION['texto_erro'] ?></strong>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <?php unset($_SESSION['texto_erro']); ?>
               <?php endif; ?>
               
               <?php if (isset($_SESSION['texto_sucesso'])): ?>
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong><i class="fas fa-check"></i>&nbsp;&nbsp;<?= $_SESSION['texto_sucesso'] ?></strong>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <?php unset($_SESSION['texto_sucesso']); ?>
               <?php endif; ?>

               <!-- Formulário de Agendamento -->
               <form action="cad_agendamento_envia.php" method="post">
                   <div class="row">
                       <!-- Coluna dos Serviços -->
                       <div class="col-md-7 mb-5">
                           <div class="row">
                               <?php foreach($servicos as $servico): ?>
                                   <div class="col-md-4 mb-5 px-4">
                                       <div class="card h-100" style="border: none;">
                                           <img class="card-img-top" src="<?= $mapa_imagens[$servico['nome']] ?>" alt="<?= $servico['nome'] ?>">
                                           <div class="card-body">
                                               <h5 class="card-title"><?= $servico['nome'] ?></h5>
                                               <p class="card-text">R$ <?= number_format($servico['valor'], 2, ',', '.') ?></p>
                                               <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="cod_servico" value="<?= $servico['cod'] ?>" required>
                                                   <label class="form-check-label" for="servico_<?= $servico['cod'] ?>">
                                                       Selecionar
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               <?php endforeach; ?>
                           </div>
                       </div>

                       <!-- Coluna dos Campos de Data, Horário e Cliente -->
                       <div class="col-md-5">
                           <div class="card h-100" style="border: none;">
                               <div class="card-body">
                                   <h5 class="card-title" style="color: #426B1F;">Data do Serviço</h5>
                                   <input type="date" name="data_servico" class="form-control mb-3" required>
                                   
                                   <h5 class="card-title" style="color: #426B1F;">Horários</h5>
                                   <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                       <!-- Adicione os horários aqui -->
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="08:00" autocomplete="off" required> 08:00
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="09:00" autocomplete="off" required> 09:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="10:00" autocomplete="off"> 10:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="11:00" autocomplete="off"> 11:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="12:00" autocomplete="off"> 12:00
                                       </label>
                                    </div>
                                    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="13:00" autocomplete="off"> 13:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="14:00" autocomplete="off"> 14:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="15:00" autocomplete="off"> 15:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="16:00" autocomplete="off"> 16:00
                                       </label>
                                       <label class="btn btn-outline-secondary">
                                           <input type="radio" name="horario" value="17:00" autocomplete="off"> 17:00
                                       </label>
                                       <!-- Adicione mais horários conforme necessário -->
                                   </div>
                                   
                                   <h5 class="card-title" style="color: #426B1F;">Cliente</h5>
                                   <select name="cod_cliente" class="form-control mb-3" required>
                                       <option value="">Selecione um cliente</option>
                                       <?php foreach($clientes as $cliente): ?>
                                           <option value="<?= $cliente['cod'] ?>"><?= $cliente['nome'] ?></option>
                                       <?php endforeach; ?>
                                   </select>

                                   <h5 class="card-title" style="color: #426B1F;">Funcionário</h5>
                                   <select name="cod_funcionario" class="form-control mb-3" required>
                                       <option value="">Selecione um funcionário</option>
                                       <?php foreach($funcionarios as $funcionario): ?>
                                           <option value="<?= $funcionario['cod'] ?>"><?= $funcionario['nome'] ?></option>
                                       <?php endforeach; ?>
                                   </select>
                                   
                                   <button type="submit" class="btn btn-success btn-block" style="background-color: #426B1F; border-color: #426B1F;">Adicionar</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- /.container-fluid -->
<?php require_once('footer.php'); ?>
</div>
<!-- End of Main Content -->
