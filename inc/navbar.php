<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <div class="pe-3">
     <a href="index.php"><img src="img/LogoLCFRetangulo.png" class="img-fluid" width="200" /></a>
    </div>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
        Menu principal
      </h5>
      <button
        type="button"
        class="btn-close text-reset"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      ></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="listagem.php">
            <i class="bi bi-person-workspace text-dark"></i> Buscar vagas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">
            <i class="bi bi-person-bounding-box text-dark"></i> Meu perfil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">
            <i class="bi bi-envelope-fill text-dark"></i> Contato
          </a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-envelope-fill text-primary"></i> Link #4
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-box-arrow-right text-danger"></i> Sair
          </a>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>