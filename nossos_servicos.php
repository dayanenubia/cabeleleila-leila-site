<?php
require_once('valida_session.php');
require_once('header.php'); 
unset($_SESSION['nome']);
unset($_SESSION['valor']);

// Mapeamento de serviços para imagens
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
<div id="content" class="container-fluid p-0">

    <?php require_once('navbar.php');?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-2">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold" id="title" style="color: #426B1F; font-family: 'Newsreader', serif;">SERVIÇOS OFERTADOS</h6>
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

                <!-- Cards de Serviços -->
                <div class="row">
                    <?php 
                    require_once("bd/bd_servico.php");
                    $servicos = listaServicos();
                    foreach($servicos as $dados): 
                        // Verifica se o serviço tem uma imagem associada no mapeamento
                        $imagem = 'imagens_servicos/default.jpg'; // Imagem padrão caso o serviço não esteja no mapeamento
                        if (isset($mapa_imagens[$dados['nome']])) {
                            $imagem = $mapa_imagens[$dados['nome']];
                        }
                        ?>
                        <div class="col-md-4 mb-5 px-4"> <!-- Aumenta o espaço entre os cards -->
                            <div class="card h-100">
                                <!-- Imagem do Serviço -->
                                <img src="<?= $imagem; ?>" class="card-img-top" alt="Imagem do Serviço">

                                <!-- Corpo do Card -->
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Newsreader', serif;"><?= $dados['nome'] ?></h5>
                                    <p class="card-text" style="font-family: 'Newsreader', serif;">Valor: R$<?= number_format($dados['valor'], 2, ",", ".");?></p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php
    require_once('footer.php');
    ?>
</div>
