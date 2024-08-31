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

        <div class="card shadow mb-2">
            <div class="card-header py-3">

                <div class="row">
                    <div class="col-md-8">
                        <h6 class="m-0 font-weight-bold text-primary" id="title">ORDEM DE SERVIÇO EM EXECUÇÃO</h6>
                    </div>
                    <?php 
                    if ($_SESSION['perfil'] == 1) {
                    ?>
                        <div class="col-md-4 card_button_title">
                            <a title="Adicionar nova ordem" href="cad_ordem.php">
                                <button type="button" class="btn btn-primary btn-sm card_button_title" data-toggle="modal" id="">
                                    <i class="fas fa-fw fa-clipboard-list">&nbsp;</i> Adicionar Ordem
                                </button>
                            </a>
                        </div>
                    <?php 
                    }
                    ?> 
                </div>

            </div>
            <div class="card-body">
                <?php
                if (isset($_SESSION['texto_erro'])):
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?= $_SESSION['texto_erro'] ?></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    unset($_SESSION['texto_erro']);
                endif;
                ?>

                <?php
                if (isset($_SESSION['texto_sucesso'])):
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-check"></i>&nbsp;&nbsp;<?= $_SESSION['texto_sucesso'] ?></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    unset($_SESSION['texto_sucesso']);
                endif;
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="display:none";>cod</th>
                                <th>Nome do Cliente</th>
                                <th>Funcionário</th>
                                <th>Serviço</th>
                                <th class="text-center">Data do Serviço</th>
                                <?php 
                                if ($_SESSION['perfil'] == 1) {
                                ?>
                                    <th class="text-center" data-orderable="false">Atualizar</th>
                                <?php 
                                    } elseif ($_SESSION['perfil'] == 3) {
                                ?>
                                    <th class="text-center" data-orderable="false">Atualizar</th>
                                <?php 
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        require_once ("bd/bd_ordem.php");
                        if ($_SESSION['perfil'] == 1) {
                            $ordem = listaOrdem();
                            foreach($ordem as $dados): 
                                if($dados[5] == 2): ?>
                                    <tr>
                                        <td style="display:none"><?= $dados[0] ?></td>
                                        <td><?= $dados[1] ?></td>
                                        <td><?= $dados[2] ?></td>
                                        <td><?= $dados[3] ?></td>
                                        <td class="text-center"><?= date('d/m/Y',strtotime($dados[4]))?></td>
                                        <td class="text-center">
                                            <?php if(($dados[5] == 1) or ($dados[5] == 2)):?>
                                                <a title="Atualizar" href="editar_ordem.php?cod=<?=$dados[0]; ?>" class="btn btn-sm btn-success"><i class="fas fa-edit">&nbsp;</i>Atualizar</a>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endif; endforeach; 
                            } 
                        
                        if ($_SESSION['perfil'] == 2) {
                            $ordem = listaOrdemCliente();
                            foreach($ordem as $dados): 
                                if($dados[5] == 2): ?>
                                    <tr>
                                        <td style="display:none"><?= $dados[0] ?></td>
                                        <td><?= $dados[1] ?></td>
                                        <td><?= $dados[2] ?></td>
                                        <td><?= $dados[3] ?></td>
                                        <td class="text-center"><?= date('d/m/Y',strtotime($dados[4]))?></td>
                                        
                                <?php endif; endforeach; 
                            } 
                        if ($_SESSION['perfil'] == 3) {
                            $ordem = listaOrdemFuncionario();
                            foreach($ordem as $dados): 
                                if($dados[5] == 2): ?>
                                    <tr>
                                        <td style="display:none"><?= $dados[0] ?></td>
                                        <td><?= $dados[1] ?></td>
                                        <td><?= $dados[2] ?></td>
                                        <td><?= $dados[3] ?></td>
                                        <td class="text-center"><?= date('d/m/Y',strtotime($dados[4]))?></td>
                                        <td class="text-center">
                                            <?php if($dados[5] == 2):?>
                                                <a title="Atualizar" href="editar_ordem_treceirizado.php?cod=<?=$dados[0]; ?>" class="btn btn-sm btn-success"><i class="fas fa-edit">&nbsp;</i>Atualizar</a>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endif; endforeach; 
                            } 
                                ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <?php
    require_once('footer.php');
    ?>

