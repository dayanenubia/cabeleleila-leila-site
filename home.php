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
            <h1 class="display-4" style="font-family: 'Newsreader', serif; color: #426B1F;">
                "Cabeleleila Leila. Cabelos, unhas, hidratação e unhas. Cabeleleila Leila. Venha fazer suas unhas e seus cabelos".
            </h1>
            <a href="servicos.php" class="btn btn-success mt-4" style="background-color: #426B1F;">Conheça nossos serviços</a>
        </div>

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

        <!-- About Section -->
        <div class="mt-5">
            <h2 class="text-center" style="font-family: 'Newsreader', serif; color: #426B1F;">Sobre Nós</h2>
            <p class="text-justify mt-4" style="font-size: 1.2rem; line-height: 1.5;">
                O salão Cabeleleila Leila foi fundado em 2005 por Leila Martins, uma apaixonada por beleza e bem-estar, com o objetivo de proporcionar uma experiência única e transformadora a cada cliente. A missão do salão é oferecer cuidados de qualidade, com profissionais experientes e técnicas de ponta. Trabalhamos para atender cada cliente com dedicação, garantindo sua satisfação e promovendo o bem-estar, através de serviços estéticos personalizados e especializados.
            </p>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php require_once('footer.php');?>
</div>
