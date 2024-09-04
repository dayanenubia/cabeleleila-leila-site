<?php
require_once('valida_session.php');
require_once('header.php'); 
require_once('bd/bd_servico.php'); // Inclua o arquivo que tem a função para recuperar tipos de serviço
?>

<!-- Main Content -->
<div id="content" class="container-fluid p-0">

    <?php require_once('navbar.php');?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-8">
                        <h6 class="m-0 font-weight-bold" id="title" style="color: #426B1F; font-family: 'Newsreader', serif;">
                            ADICIONAR SERVIÇO
                        </h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['texto_erro'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?= $_SESSION['texto_erro'] ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php unset($_SESSION['texto_erro']); endif; ?>
                
                <?php if (isset($_SESSION['texto_sucesso'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-check"></i>&nbsp;&nbsp;<?= $_SESSION['texto_sucesso'] ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php unset($_SESSION['texto_sucesso']); endif; ?>

                <form class="user" action="cad_servico_envia.php" method="post" >
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label style="color: #426B1F; font-family: 'Newsreader', serif;"> Nome do Serviço </label>
                            <select class="form-control" id="nome" name="nome" required>
                                <option value=""> </option>
                                <option value="Corte, lavagem e secagem">Corte, lavagem e secagem</option>
                                <option value="Coloração">Coloração</option>
                                <option value="Alisamento e relaxamento">Alisamento e relaxamento</option>
                                <option value="Permanente e ondulado">Permanente e ondulado</option>
                                <option value="Manicure e pedicure">Manicure e pedicure</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label style="color: #426B1F; font-family: 'Newsreader', serif;"> Valor </label>
                            <input type="text" class="form-control form-control-user" id="valor" name="valor" value="<?php if (!empty($_SESSION['valor'])) { echo $_SESSION['valor'];} ?>" 
                            placeholder="Ex.: 50.00" required>
                        </div>
                    </div>
                                    
                    <div class="card-footer text-muted" id="btn-form">
                        <div class="text-right">
                            <a title="Voltar" href="servico.php"><button type="button" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp;</i>Voltar</button></a>
                            <a title="Adicionar"><button type="submit" name="updatebtn" class="btn btn-primary uptadebtn"><i class="fas fa-fw fa-wrench">&nbsp;</i>Adicionar</button> </a>
                        </div>
                    </div>
                </form>  
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php
require_once('footer.php');
?>
</div>
<!-- End of Main Content -->
