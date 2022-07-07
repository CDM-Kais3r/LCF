<!DOCTYPE html>
<html lang="pt-BR">
  <head>
	<?php include("inc/favIcon.php");?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Vagas</title>
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
      <div class="container d-lg-flex justify-content-between py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap text-decoration-none" href="index.php"><i class="bi bi-home-fill"></i>Início</a></li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Vagas disponíveis</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-dark mb-0"><strong>Vagas Disponíveis</strong></h1>
        </div>
      </div>
    </div>
    <!-- Categorias -->

    <!-- sidebar e conteudo -->
    <div class="container px-4 pb-4">
        <div class="row">
            <div class="col-xl-12 bg-white shadow-lg rounded">
                <div class="row">
                    <div class="col-lg-2 p-3">
                        <div class="d-grid gap-2">
                            <a class="btn btn-outline-dark" href="#categoriaVagas" data-bs-toggle="collapse" aria-expanded="false"><i class="bi bi-funnel"></i> Filtros</a>
                        </div>
                    </div>
                    <div class="col-lg-8 p-3">
                        <input type="text" name="searchJob" id="searchJob" class="form-control bg-light" class="" placeholder="Laravel, Design, Back-end...">
                    </div>
                    <div class="col-lg-2 p-3 text-center">
                        <div class="mt-lg-0 mt-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-dark">Procurar</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="collapse pb-3" id="categoriaVagas">
                    <div class="row">
                        <div class="col-lg-4 pb-2 px-3">
                            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#backEndFilter" role="button" aria-expanded="false" aria-controls="backEndFilter" >
                                <div class="bg-light rounded-top p-3">
                                    <h6 class="mb-0 text-muted d-flex">Back-End <span class="ms-auto"><i class="bi bi-arrow-down-square-fill text-danger"></i></span></h6>
                                </div>
                            </a>
                            <div class="collapse fs-sm" id="backEndFilter">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">432</span> Especialização em Laravel</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">752</span> Especialização em PHP 7</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">211</span> Especialização em JavaScript</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">525</span> Especialização em Python</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">103</span> Especialização em Ruby</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-danger btn-sm">34</span> Especialização em Delphi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-2 px-3">
                            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#frontEndFilter" role="button" aria-expanded="false" aria-controls="frontEndFilter" >
                                <div class="bg-light rounded-top p-3">
                                    <h6 class="mb-0 text-muted d-flex">Front-End <span class="ms-auto"><i class="bi bi-arrow-down-square-fill text-danger"></i></span></h6>
                                </div>
                            </a>
                            <div class="collapse fs-sm" id="frontEndFilter">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">432</span> Especialização em Laravel</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">752</span> Especialização em PHP 7</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">211</span> Especialização em JavaScript</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">525</span> Especialização em Python</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">103</span> Especialização em Ruby</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-danger btn-sm">34</span> Especialização em Delphi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-2 px-3">
                            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#fullStackFilter" role="button" aria-expanded="false" aria-controls="fullStackFilter" >
                                <div class="bg-light rounded-top p-3">
                                    <h6 class="mb-0 text-muted d-flex">Full-stack <span class="ms-auto"><i class="bi bi-arrow-down-square-fill text-danger"></i></span></h6>
                                </div>
                            </a>
                            <div class="collapse fs-sm" id="fullStackFilter">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">432</span> Especialização em Laravel</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">752</span> Especialização em PHP 7</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">211</span> Especialização em JavaScript</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">525</span> Especialização em Python</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">103</span> Especialização em Ruby</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-danger btn-sm">34</span> Especialização em Delphi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-2 px-3">
                            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#designFilter" role="button" aria-expanded="false" aria-controls="designFilter" >
                                <div class="bg-light rounded-top p-3">
                                    <h6 class="mb-0 text-muted d-flex">Design <span class="ms-auto"><i class="bi bi-arrow-down-square-fill text-danger"></i></span></h6>
                                </div>
                            </a>
                            <div class="collapse fs-sm" id="designFilter">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">432</span> Especialização em Laravel</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">752</span> Especialização em PHP 7</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">211</span> Especialização em JavaScript</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">525</span> Especialização em Python</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">103</span> Especialização em Ruby</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-danger btn-sm">34</span> Especialização em Delphi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-2 px-3">
                            <a class="text-decoration-none text-black" data-bs-toggle="collapse" href="#companyFilter" role="button" aria-expanded="false" aria-controls="companyFilter" >
                                <div class="bg-light rounded-top p-3">
                                    <h6 class="mb-0 text-muted d-flex">Para Empresas <span class="ms-auto"><i class="bi bi-arrow-down-square-fill text-danger"></i></span></h6>
                                </div>
                            </a>
                            <div class="collapse fs-sm" id="companyFilter">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">432</span> Especialização em Laravel</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">752</span> Especialização em PHP 7</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">211</span> Especialização em JavaScript</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-success btn-sm">525</span> Especialização em Python</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-warning btn-sm">103</span> Especialização em Ruby</a></li>
                                    <li class="list-group-item"><a href="#" class="text-decoration-none"><span class="btn btn-danger btn-sm">34</span> Especialização em Delphi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="container pb-4">
      <div class="row">          
        <section class="col-xl-12">
          <div class="row pt-3 pt-sm-0">
          <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logoMac.png" alt="">
              <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                <h3 class="h5 mb-2">McDonald's</h3>
                <div class="fs-ms border-bottom py-2" class="rounded"><button class="btn btn-primary text-white"><strong>6</strong></button> Vagas para Front-end</div>
                <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
              </div>
            </div>
            <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logoMicrosoft.png" alt="">
              <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                <h3 class="h5 mb-2">Microsoft</h3>
                <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-danger text-white"><strong>2</strong></button> Vaga para Back-end</div>
                <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
              </div>
            </div>
            <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="">
              <div class="card-body text-center shadow-sm bg-white bg-white rounded pt-3 pb-4 mb-3">
                <h3 class="h5 mb-2">Meta</h3>
                <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-warning text-white"><strong>3</strong></button> Vagas para Full-stack</div>
                <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
              </div>
            </div>
            <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="">
              <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                <h3 class="h5 mb-2">Apple</h3>
                <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-warning text-white"><strong>7</strong></button> Vagas para Mobile</div>
                <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
              </div>
            </div>
            <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="">
                <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                  <h3 class="h5 mb-2">Apple</h3>
                  <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-warning text-white"><strong>8</strong></button> Vagas para Mobile</div>
                  <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
                </div>
              </div>
              <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="">
                <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                  <h3 class="h5 mb-2">Apple</h3>
                  <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-warning text-white"><strong>11</strong></button> Vagas para Mobile</div>
                  <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
                </div>
              </div>
              <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="">
                <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                  <h3 class="h5 mb-2">Microsoft</h3>
                  <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-danger text-white"><strong>9</strong></button> Vaga para Back-end</div>
                  <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
                </div>
              </div>
              <div class="rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 250px;"><img class="rounded-circle img-thumbnail" src="img/logo.jpeg" alt="">
                <div class="card-body text-center bg-white shadow-sm rounded pt-3 pb-4 mb-3">
                  <h3 class="h5 mb-2">Microsoft</h3>
                  <div class="fs-ms text-muted border-bottom py-2"><button class="btn btn-danger text-white"><strong>7</strong></button> Vaga para Back-end</div>
                  <div class="pt-3"><a href="#" class="btn btn-dark text-white">Visualizar</a></div>
                </div>
              </div>
			  
          </div>
        </section>
        </div> 
      </div>
    </container>
    
    <?php include("inc/footer.inc.php");?>
  </body>
</html>
