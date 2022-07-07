<!DOCTYPE html>
<html lang="pt-BR">
  <head>
	<?php include("inc/favIcon.php");?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu Perfil</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css">
  </head>
  <body class="fontMontserrat">
    <header>
      <?php include("inc/navbar.php");?>
    </header>
    
    
    
    <container>
    <!-- Painel escuro do topo -->
    <div class="page-title-overlap pt-3" style="background-color: #C2C2C2">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap text-decoration-none" href="index.php"><i class="ci-home"></i>Início</a></li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Meu Perfil</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-dark mb-0"><strong>Meu Perfil</strong></h1>
        </div>
      </div>
    </div>

    <!-- sidebar e conteudo -->
    <div class="container pb-3 mb-0">
      <div class="row">
      <?php include("inc/sidebar.inc.php"); ?>

     <section class="col-xl-8 pt-4 pt-lg-0 pe-xl-5">
       <div class="bg-white rounded-3 shadow-lg mb-5 mb-lg-0 p-3">
        <div class="bg-light rounded p-2 d-flex fs-5 text-dark">Informações <span class="ms-auto"><button class="btn btn-outline btn-sm linha" style="color:#000000" data-bs-toggle="modal" data-bs-target="#modalInfo"><i class="bi bi-plus-square-fill"></i> Adicionar</button></span></div>
        <div class="p-2 fs-sm">
          Conte um resumo sobre você, sobre sua carreira e seus objetivos.<br>
          <p class="bg-light text-center fst-italic text-muted p-2 rounded">Você ainda não possui um resumo.</p>
          <div class="text-center text-muted bg-light p-4 rounded">
          <div class="row">
            <div class="col-lg-4"><b><small>Gênero</small></b><br><small>Masculino</small></div>
            <div class="col-sm-4"><b><small>E-mail</small></b><br><small>tainan.rezende@email.com</small></div>
            <div class="col-sm-4"><b><small>Cidade</small></b><br><small><i class="bi bi-x-square-fill text-danger"></i> Cidade não informada</small></div>
          </div>
          <div class="row">
            <div class="col-sm-4"><b><small>Idade</small></b><br><small>25 anos</small></div>
            <div class="col-sm-4"><b><small>Celular</small></b><br><small>+55 (12) 99142-2047</small></div>
            <div class="col-sm-4"><b><small>País</small></b><br><small><i class="bi bi-x-square-fill text-danger"></i> País não informado</small></div>
          </div>
          </div>
        </div>
        </div>

        <div class="bg-white rounded-3 shadow-lg mt-4 mb-5 mb-lg-0 p-3">
        <div class="bg-light rounded p-2 d-flex fs-5 text-dark">Suas skills <span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalSkills"><i class="bi bi-plus-square-fill"></i> Adicionar</button></span></div>
        <div class="p-2 fs-sm">
          <p><b>Habilidades</b></p>
          <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhuma habilidade adicionada</p>
          
          <p><b>Softwares</b></p>
          <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhum software adicionado</p>

          <p><b>Metodologias</b></p>
          <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhuma metodologia adicionada</p>

          <p><b>Linguagens ou Frameworks</b></p>
          <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhuma linguagem ou framework adicionada</p>

          <p><b>Database</b></p>
          <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhuma database adicionada</p>
        </div></div>
        <div class="bg-white rounded-3 shadow-lg mt-4 mb-5 mb-lg-0 p-3">
        <div class="bg-light rounded p-2 d-flex fs-5 text-dark">Experiências profissionais <span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalExperiencia"><i class="bi bi-plus-square-fill"></i> Adicionar</button></span></div>
          <div class="p-2 fs-sm">
            <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhuma expêriencia profissional adicionada</p>
          </div>
        <div class="bg-light rounded p-2 d-flex fs-5 text-dark">Educação<span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalEducacao"><i class="bi bi-plus-square-fill"></i> Adicionar</button></span></div>
          <div class="p-2 fs-sm">
            <p class="bg-light p-2 text-muted rounded"><i class="bi bi-x-square-fill text-danger"></i> Nenhuma educação adicionada</p>
          </div>
        <div class="bg-light rounded p-2 d-flex fs-5 text-dark">Dados Bancarios <span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalDadosBancarios"><i class="bi bi-plus-square-fill"></i> Adicionar</button></span></div>
          <div class="p-2 fs-sm">
            <div class="row">
              <div class="col-6 text-center p-2 text-muted">Tipo de chave pix<br><small class="bg-light rounded p-2"><i class="bi bi-x-square-fill text-danger"></i> Não preenchido</small></div>
              <div class="col-6 text-center p-2 text-muted">Tipo de chave pix<br><small class="bg-light rounded p-2"><i class="bi bi-x-square-fill text-danger"></i> Não preenchido</small></div>
            </div>
          </div>
        </div></div>
     </section>
    </div>
    </div>
    </container>
      
    <?php 
      include("inc/footer.inc.php");
      include("inc/modal.inc.php");
    ?>
  </body>
</html>
