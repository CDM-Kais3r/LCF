<!DOCTYPE html>
<html lang="pt-BR">
  <head>
	<?php include("inc/favIcon.php");?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaga Disponível</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css" />
  </head>
  <body class="fontMontserrat">
    <header>
      <?php include("inc/navbar.php");?>
    </header>

    <container>
      <!-- Painel escuro do topo -->
      <div class="page-title-overlap pt-3" style="background-color: #C2C2C2">
        <div class="container d-lg-flex justify-content-between py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol
                class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start"
              >
                <li class="breadcrumb-item">
                  <a class="text-nowrap text-decoration-none" href="index.php"
                    ><i class="bi bi-home-fill"></i>Início</a
                  >
                </li>
                <li class="breadcrumb-item">
                  <a class="text-nowrap text-decoration-none" href="listagem.php"
                    ><i class="bi bi-home-fill"></i>Vagas disponíveis</a
                  >
                </li>
                <li
                  class="breadcrumb-item text-nowrap active"
                  aria-current="page"
                >
                  Microsoft
                </li>
              </ol> 
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-dark mb-0"><strong>Microsoft</strong></h1>
          </div>
        </div>
      </div>
      <!-- Categorias -->

      <!-- sidebar e conteudo -->
      <div class="container px-4 pb-4">
        <div class="row">
          <div class="col-xl-4">
            <div class="bg-white rounded-3 shadow-lg mb-4">
              <div class="bg-light p-3 d-flex">
            <h3 class="fs-6 text-dark fw-bold">Titulo da Vaga</h3>
            <span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalTituloVaga"><i class="bi bi-pencil-square"></i> Editar</button></span>
        </div>
			  
			  <li class="list-group-item d-flex" >
                    <span class="text-primary">&nbsp;Programador</span>
                    
                    </li>
			  
			    <div class="bg-light p-3 d-flex">
            <h3 class="fs-6 text-dark fw-bold">Requisitos</h3>
            <span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalRequisitos"><i class="bi bi-pencil-square"></i> Editar</button></span>
        </div>
			  
              <div class="p-0">
                <ul class="list-group list-group-flush fs-sm">
                  <li class="list-group-item">
                    <i class="bi bi-hash text-primary"></i> Developer Front-End
                    Junior
                  </li>
                  <li class="list-group-item">
                    <i class="bi bi-hash text-primary"></i> Inglês Intermediário
                  </li>
                  <li class="list-group-item">
                    <i class="bi bi-hash text-primary"></i> Residir em
                    Pindamonhangaba
                  </li>
                  <li class="list-group-item">
                    <i class="bi bi-hash text-primary"></i> Requisito #3
                  </li>
                  <li class="list-group-item">
                    <i class="bi bi-hash text-primary"></i> Requisito #4
                  </li>
                  <li class="list-group-item">
                    <i class="bi bi-hash text-primary"></i> Requisito #5
                  </li>
                </ul>
              </div>
				 <div class="bg-light p-3 d-flex">
					<h3 class="fs-6 text-dark fw-bold">Contratação</h3>
					<span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalContratacao"><i class="bi bi-pencil-square"></i> Editar</button></span>
				</div>
			  
					<li class="list-group-item d-flex">
                    Vaga:
                    <span class="text-success">&nbsp;CLT</span>
                    </li>
					<li class="list-group-item d-flex">
                    Salário:
                    <span class="text-success">&nbsp;R$ 3.000,00</span>
                    </li>
				<div class="bg-light p-3 d-flex">
					<h3 class="fs-6 text-dark fw-bold">Beneficios</h3>
					<span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalBeneficios"><i class="bi bi-pencil-square"></i> Editar</button></span>
				</div>
              <div class="p-0">
                <ul class="list-group list-group-flush fs-sm">
                  <li class="list-group-item d-flex">Vale Transporte &nbsp;<i class="bi bi-x-square-fill text-danger"></i></li>
                  <li class="list-group-item">Vale Refeição &nbsp;<i class="bi bi-check-square-fill text-success"></i></li>
                </ul>
              </div>
				<div class="bg-light p-3 d-flex">
					<h3 class="fs-6 text-dark fw-bold">Contato</h3>
					<span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalContatoEmpresa"><i class="bi bi-pencil-square"></i> Editar</button></span>
				</div>
              <div class="p-3 text-center">
                <div class="pb-3">Envie seu currículo via:</div>
                <div class="row">
                  <div class="col-sm-12" >
                    <a
                      href="empresa@email.com"
                      class="btn btn-outline-info d-grid btn-bg"
                      ><i class="bi bi-envelope-fill"></i>E-mail</a
                    >
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="bg-white rounded-3 shadow-lg">
              <div class="p-3">
              <center> <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="" data-bs-toggle="modal" data-bs-target="#modalImageEmpresa"></div>
			  </center>
			  <br>
			  <br>
                <div class="bg-light p-3 d-flex">
					<h3 class="fs-6 text-dark fw-bold">Descrição da Vaga</h3>
					<span class="ms-auto"><button class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalDescricaoVaga"><i class="bi bi-pencil-square"></i> Editar</button></span>
				</div>
				<br>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Aliquam finibus leo sit amet nulla bibendum, quis mattis urna
                  ultricies. Pellentesque eget velit feugiat, gravida nisi at,
                  dignissim metus. Maecenas imperdiet non metus a auctor.
                  Vivamus mattis luctus elit a pretium. Maecenas lacus elit,
                  elementum vel sodales sodales, fringilla id ipsum. Suspendisse
                  feugiat consequat eros, a finibus quam luctus in. In ipsum
                  sem, condimentum eu consequat nec, consequat in neque. Sed
                  eget nibh et tellus maximus sollicitudin nec ac enim. Vivamus
                  sodales vel nulla vel mollis. Cras et dolor eget odio suscipit
                  condimentum at vitae turpis. Donec a nisi eget mi iaculis
                  porta a sit amet nibh. Cras scelerisque gravida felis, in
                  efficitur eros pellentesque eget. Nulla facilisi. Quisque
                  hendrerit accumsan nunc, ac malesuada tellus commodo vel.
                </p>         
			   <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Aliquam finibus leo sit amet nulla bibendum, quis mattis urna
                  ultricies. Pellentesque eget velit feugiat, gravida nisi at,
                  dignissim metus. Maecenas imperdiet non metus a auctor.
                  Vivamus mattis luctus elit a pretium. Maecenas lacus elit,
                  elementum vel sodales sodales, fringilla id ipsum. Suspendisse
                  feugiat consequat eros, a finibus quam luctus in. In ipsum
                  sem, condimentum eu consequat nec, consequat in neque. Sed
                  eget nibh et tellus maximus sollicitudin nec ac enim. Vivamus
                  sodales vel nulla vel mollis. Cras et dolor eget odio suscipit
                  condimentum at vitae turpis. Donec a nisi eget mi iaculis
                  porta a sit amet nibh. Cras scelerisque gravida felis, in
                  efficitur eros pellentesque eget. Nulla facilisi. Quisque
                  hendrerit accumsan nunc, ac malesuada tellus commodo vel.
                </p>
				<br>	          
              </div>
            </div>
          </div>
        </div>
      </div>
    </container>

    <?php include("inc/footer.inc.php"); ?>
	<?php include("inc/modal.php"); ?>
  </body>
</html>
