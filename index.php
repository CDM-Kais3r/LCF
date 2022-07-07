<!DOCTYPE html>
<html lang="pt-BR">
  <head>
	<?php include("inc/favIcon.php");?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicial</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css" />
  </head>
  <body class="fontMontserrat">
    <header>
      <?php include("inc/navbar.inc.php");?>
    </header>

    <container>
      <!-- Painel escuro do topo -->
      <div class="" style="background-color: #fff">
        <div class="container py-5">
         <div class="row">
            <div class="col-lg-4 borda">
              <div class="p-4 rounded">
                <div class="fs-5 text-center pb-3">
                  Conectamos Profissionais e Empresas de uma maneira descomplicada
                  e rápida.
                </div>
                <div class="text-center py-3 border-top">Fazemos o match dos melhores profissionais de tecnologia <b>on-demand</b> e integramos na sua empresa, garantindo a sinergia do time, com segurança e velocidade.</div>
                <div class="border-top pb-3"></div>
                <div class="p-2"><a href="#" class="btn d-grid" style="background-color: #000"><FONT COLOR="#fff">Sou Profissional</FONT></a>
				<br>
				<a href="#" class="btn btn-outline-dark d-grid">Sou Empresa</a></div>
              </div>    
              </div>										
              <div class="col-lg-8 text-end py-3">
                <img src="img/undraw_proud_coder.svg" class="img-fluid" alt="" />
              </div>
            </div> 
          </div>
        </div>
    <!-- sidebar e conteudo -->
   <div class="bg-light">
    <div class="container py-5">
      <div class="bg-white rounded-3 p-3 shadow-lg">
        <div class="row">
          <div class="col-lg-12"><img src="img/empresa-logo/tenaris-confab.png" height="80" alt=""> <img src="img/empresa-logo/tenaris-confab.png" height="80" alt=""></div>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="bg-white rounded-3 p-3 shadow-lg">
        <div class="row">
          <div class="col-lg-12">
          <p>Links rápidos</p>
          <ul class="list-group list-group-flush fs-sm">
            <li class="list-group-item py-3"><a class="nav-link-style d-flex align-items-center link-primary text-decoration-none" href="empresa.php"><i class="bi bi-postcard"></i>&nbsp;Empresa</a></li>
            <li class="list-group-item py-3"><a class="nav-link-style d-flex align-items-center link-primary text-decoration-none" href="perfil.php"><i class="bi bi-person"></i>&nbsp;Perfil</a></li>
            <li class="list-group-item py-3"><a class="nav-link-style d-flex align-items-center link-primary text-decoration-none" href="contato.php"><i class="bi bi-envelope"></i>&nbsp;Contato</a></li>
            <li class="list-group-item py-3"><a class="nav-link-style d-flex align-items-center link-primary text-decoration-none" href="listagem.php"><i class="bi bi-list"></i>&nbsp;Listagem de vagas</a></li>
            <li class="list-group-item py-3"><a class="nav-link-style d-flex align-items-center link-primary text-decoration-none" href="pagina.php"><i class="bi bi-card-heading"></i>&nbsp;Pagina da vaga</a></li>
          </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
	
    </container>
	
    <?php include("inc/footer.inc.php");?>

  </body>
</html>
