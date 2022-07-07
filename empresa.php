<!DOCTYPE html>
<html lang="pt-BR">
  <head>
	<?php include("inc/favIcon.php");?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Minha Empresa</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css">
  </head>
  <body class="fontMontserrat" id="body">
    <header>
      <?php include("inc/navbar.php");?>
    </header>
 
    <container>
    <div class="page-title-overlap pt-3" style="background-color: #C2C2C2">
      <div class="container d-lg-flex justify-content-between py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap text-decoration-none" href="index.php"><i class="bi bi-home-fill"></i>Início</a></li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Minha Empresa</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-dark mb-0"><strong>Minha Empresa</strong></h1>
        </div>
      </div>
    </div>

    <!-- sidebar e conteudo -->
    <div class="container pb-3 mb-0">
      <div class="row">
        <?php include("inc/sidebar.empresa.php");?>

      <section class="col-xl-8 pt-4 pt-lg-0 pe-xl-0">
        <div class="bg-white rounded-3 shadow-lg mb-5 mb-lg-0 p-3">
            <div class="bg-light rounded p-2 d-flex fs-5 text-dark"><strong>Informações</strong></div>
            <div class="p-2 border-bottom">
                
                <div class="row px-5 py-3">
                    <div class="col-lg-12 py-2">
                        <label for="nomeEmpresa" class="text-muted"><b>Nome da empresa</b></label>
                        <input type="text" class="form-control text-capitalize bg-light border-light">
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="razaoSocialEmpresa" class="text-muted"><b>Razão Social</b></label>
                        <input type="text" class="form-control text-capitalize bg-light border-light">
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="cnpjEmpresa" class="text-muted"><b>CNPJ</b></label>
                        <input type="text" class="form-control text-capitalize bg-light border-light cnpjEmpresa" id="cnpjEmpresa" placeholder="__.___.___/____-__">
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="inscricaoMunicipalEmpresa" class="text-muted"><b>Inscrição Municipal</b></label>
                        <input type="text" class="form-control text-capitalize bg-light border-light">
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="cepEmpresa" class="text-muted"><b>CEP</b></label>
                        <input type="text" class="form-control text-capitalize bg-light border-light cepEmpresa" id="cepEmpresa" size="10" maxlength="9"
                        onblur="pesquisacep(this.value);" onkeyup="errorCEPVerify()" placeholder="_____-___" required> <small class="fs-sm text-muted">Não sabe o CEP? <a href="https://buscacepinter.correios.com.br/app/endereco/index.php" target="_blank" class="text-decoration-none">Pesquise clicando aqui</a></small>
                    </div>
					<div class="col-lg-6 py-2">
                        <label for="estadoEmpresa" class="text-muted"><b>Estado</b></label>
                        <input type="text" name="estadoEmpresa" id="estadoEmpresa" class="form-control text-capitalize bg-light border-light">
                    </div>
					<div class="col-lg-6 py-2">
                        <label for="cidadeEmpresa" class="text-muted"><b>Cidade</b></label>
                        <input type="text" name="cidadeEmpresa" id="cidadeEmpresa" class="form-control text-capitalize bg-light border-light">
                    </div>
					 <div class="col-lg-6 py-2">
                        <label for="bairroEmpresa" class="text-muted"><b>Bairro</b></label>
                        <input type="text" name="bairroEmpresa" id="bairroEmpresa" class="form-control text-capitalize bg-light border-light">
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="ruaEmpresa" class="text-muted"><b>Rua</b></label>
                        <input type="text" name="ruaEmpresa" id="ruaEmpresa" class="form-control text-capitalize bg-light border-light">
                    </div>
					<div class="col-lg-6 py-2">
                        <label for="complementoEnderecoEmpresa" class="text-muted"><b>Complemento</b></label>
                        <input type="text" name="complementoEmpresa" id="complementoEmpresa"  class="form-control text-capitalize bg-light border-light">
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="numeroEmpresa" class="text-muted"><b>Número</b></label>
                        <input type="text" name="numeroEmpresa" id="numeroEmpresa" class="form-control text-capitalize bg-light border-light">
                    </div>
                    <div class="col-lg-6 py-2">
                      <label for="rgResponEmpresa" class="text-muted"><b>RG</b></label>
                      <input type="text" name="rgRespEmpresa" maxlength="12" onkeyup="maskRG()" id="rgRespEmpresa" placeholder="" class="form-control text-capitalize bg-light border-light" required>
                    </div>
                    <div class="col-lg-6 py-2">
                      <label for="cpfResponEmpresa" class="text-muted"><b>CPF</b></label>
                      <input type="text" name="cpfRespEmpresa" maxlength="14" onkeyup="maskCPF()" id="cpfRespEmpresa" class="form-control text-capitalize bg-light border-light" required>
                    </div>
                </div>
            </div>
            <div class="text-center pt-3"><button class="btn btn-dark">Salvar alterações</button></div>
        </div>
     </section>
    </div>
    </div>
    </container>

    <?php 
      include("inc/footer.inc.php");
      include("inc/modal.php");
    ?>

  </body>
</html>
