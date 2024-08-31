<?php
require_once('valida_session.php');
require_once('header.php');
require_once('sidebar.php');
?>

<!-- Main Content -->
<div id="content">

   <?php require_once('navbar.php');?>

   <!-- Begin Page Content -->
   <div class="container-fluid">

       <h1 class="h3 mb-4 text-gray-800">Agende um atendimento</h1>
       <p>Selecione data, horário e informe o nome do cliente para criar o agendamento</p>

       <form action="processa_agendamento.php" method="post">
           <div class="row">
               <div class="col-md-8">
                   <!-- Services Cards -->
                   <div class="card mb-4">
                       <div class="card-body">
                           <div class="row">
                               <!-- Service 1 -->
                               <div class="col-md-12 mb-3">
                                   <div class="card">
                                       <div class="row no-gutters">
                                           <div class="col-md-4">
                                               <img src="caminho/para/imagem1.jpg" class="card-img" alt="Corte de cabelo">
                                           </div>
                                           <div class="col-md-8">
                                               <div class="card-body">
                                                   <h5 class="card-title">Corte de cabelo</h5>
                                                   <p class="card-text">R$80,00</p>
                                                   <p class="card-text"><small class="text-muted">10/06/2024</small></p>
                                                   <input type="radio" name="servico" value="Corte de cabelo" required> Selecionar este serviço
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- Service 2 -->
                               <div class="col-md-12 mb-3">
                                   <div class="card">
                                       <div class="row no-gutters">
                                           <div class="col-md-4">
                                               <img src="caminho/para/imagem2.jpg" class="card-img" alt="Hidratação">
                                           </div>
                                           <div class="col-md-8">
                                               <div class="card-body">
                                                   <h5 class="card-title">Hidratação</h5>
                                                   <p class="card-text">R$35,00</p>
                                                   <p class="card-text"><small class="text-muted">10/06/2024</small></p>
                                                   <input type="radio" name="servico" value="Hidratação"> Selecionar este serviço
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- Service 3 -->
                               <div class="col-md-12 mb-3">
                                   <div class="card">
                                       <div class="row no-gutters">
                                           <div class="col-md-4">
                                               <img src="caminho/para/imagem3.jpg" class="card-img" alt="Penteado">
                                           </div>
                                           <div class="col-md-8">
                                               <div class="card-body">
                                                   <h5 class="card-title">Penteado</h5>
                                                   <p class="card-text">R$54,00</p>
                                                   <p class="card-text"><small class="text-muted">07/07/2024</small></p>
                                                   <input type="radio" name="servico" value="Penteado"> Selecionar este serviço
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-md-4">
                   <!-- Calendar and time selection -->
                   <div class="card mb-4">
                       <div class="card-body">
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
                               <!-- Adicione mais horários conforme necessário -->
                           </div>

                           <h5 class="card-title">Cliente</h5>
                           <input type="text" name="cliente" class="form-control mb-3" placeholder="Nome do cliente" required>

                           <button type="submit" class="btn btn-success btn-block">Agendar</button>
                       </div>
                   </div>
               </div>
           </div>
       </form>

   </div>
   <!-- End of Main Content -->

   <?php require_once('footer.php'); ?>

</div>

<?php require_once('footer.php'); ?>
