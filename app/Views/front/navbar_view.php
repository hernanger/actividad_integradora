<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
  ?> 
<!-- barra de navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" class=" navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal') ?>">
        <!--logo de la empresa-->
        <img src="assets/img/logo.jpg" alt="marca" width="80" height="80" class="img_fluid border border-light rounded" />
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (session()->perfil_id == 1):?>
      <div class="btn btn-secondary active btnuser btn-sm">
        <a href="">ADMIN: <?php echo session ('nombre');?></a>
      </div>
      <a class="navbar-brand" href="#"></a>
     <div class="container-fluid" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex= "-1" aria-disabled="true">Cerrar Sesion</a>
            </li>
          </ul>
      </div>
  <?php elseif (session()->perfil_id == 2):?>
      <div class="btn btn-secondary active btnuser btn-sm">
        <a href="">CLIENTE: <?php echo session ('nombre');?></a>
      </div>

    <a class="navbar-brand" href="#"></a>
     <div class="container-fluid" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link" href="comprar">Comprar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex= "-1" aria-disabled="true">Cerrar Sesion</a>
            </li>
          </ul>
      </div>
    <?php else:?>
                <!--- NavBar para no logueados --->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Adidas</a></li>
            <li><a class="dropdown-item" href="#">Topper</a></li>
            <li><a class="dropdown-item" href="#">Nike</a></li>
            <li><a class="dropdown-item" href="#">AddNice</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login">Ingresar</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Ej: Adidas" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    <?php endif;?>
    </div>
  </div>
</nav>
<!--fin barra de navegacion-->