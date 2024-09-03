<?php
    require_once('valida_session.php');
    require_once('header.php'); 
    require_once("bd/bd_agendamento.php");
?>

<!-- Main Content -->
<div id="content" class="container-fluid p-0">
    <?php require_once('navbar.php');?>

    <!-- Begin Page Content -->
    <div class="container-fluid p-5">
        <!-- Hero Section -->
        <div class="text-center">
            <h1 class="display-4" style="font-family: 'Newsreader', serif; color: black;">
                "Cabeleleila Leila. Cabelos, unhas, hidratação e unhas. Cabeleleila Leila. Venha fazer suas unhas e seus cabelos."
            </h1>
            <br><br>
            <a href="servico.php" class="btn btn-success mt-4" style="background-color: #426B1F;">Conheça nossos serviços</a>
        </div>

        <br><br><br>

        <!-- Image Section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="img/salao1.jpg" class="img-fluid" alt="Imagem do salão" style="border-radius: 8px;">
                <p class="text-center mt-2">Imagem 1: Ambiente interno do salão</p>
            </div>
            <div class="col-md-6">
                <img src="img/salao2.jpg" class="img-fluid" alt="Imagem do salão" style="border-radius: 8px;">
                <p class="text-center mt-2">Imagem 2: Espaço para cuidados com o cabelo e unhas</p>
            </div>
        </div>

        <br><br><br>

        <!-- About Section -->
        <div class="row mt-5">
            <div class="col-md-3">
                <h2 class="text-center" style="font-family: 'Inter', sans-serif; color: black; font-size: 1.5rem;">QUEM SOMOS</h2>
            </div>
            <div class="col-md-9">
                <p class="text-justify mt-4" style="font-family: 'Inter', sans-serif; font-size: 1.2rem; line-height: 1.5; color: black;">
                    O Salão Cabeleileila Leila foi fundado em 2005 por Leila Martins, uma 
                    apaixonada por beleza e bem-estar, com o objetivo de proporcionar uma 
                    experiência única e personalizada a cada cliente. A missão do salão é 
                    "Transformar a beleza de cada cliente, elevando sua autoestima e promovendo 
                    o bem-estar, através de serviços inovadores e atendimento personalizado." 
                </p>
                <p class="text-justify mt-4" style="font-family: 'Inter', sans-serif; font-size: 1.2rem; line-height: 1.5; color: black;">
                    Com o passar dos anos, o salão alcançou reconhecimento e prêmios, 
                    tornando-se uma referência na cidade. Leila e sua equipe são conhecidos pela 
                    excelência em cortes de cabelo, coloração, tratamentos capilares e penteados.
                    O salão continua a crescer, investindo em cursos de aperfeiçoamento para a 
                    equipe e mantendo um ambiente acolhedor para todos os clientes.
                </p>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php require_once('footer.php');?>
</div>
