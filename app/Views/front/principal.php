<br>
<div class="content">
  <!-- inicio del carrusel-->

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>

  <main>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <img src="assets/img/wzapa1.jpg" class="w-100" alt="zapatillas">
            <div class="carousel-caption text-start">
              <h2 >No se es un perdedor hasta que se deja de intentarlo.</h2>
              <p class="opacity-75">Nunca pares, nunca te conformes, hasta que lo bueno sea mejor y lo mejor excelente. </p>
              <p><a class="btn btn-lg btn-primary" href="login">Inicia hoy</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/wzapa2.jpg" class="w-100" alt="zapatillas">
          <div class="container text-end fw-bolder">
            <div class="carousel-caption">
              <p class="fs-3 text-black">El dolor es temporal, la satisfacción es para siempre.</p>
              <p><a class="btn btn-lg btn-primary" href="comprar">Es Ahora</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/wzapa3.jpg" class="w-100" alt="zapatillas">
          <div class="container">
            <div class="carousel-caption text-end">
              <h2>Hagas lo que hagas, hazlo intensamente.</h2>
              <p>La distancia entre el querer y el poder se acorta con el entrenamiento. </p>
              <p><a class="btn btn-lg btn-primary" href="comprar">No te Detengas</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- fin carrusel-->
    <br>
    <!-- Tres columnas de texto debajo del carrusel -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img src="assets/img/adidas1.jpg" class="d-block w-50 " class="img_fluid rounded" alt="zapatillas">
          <h2 class="fw-normal">Adidas</h2>
          <p>Creadas para quienes crean, para quienes rompen las reglas. Descubrílas.</p>
          <p><a class="btn btn-secondary" href="comprar">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="assets/img/adidas2.jpg" class="d-block w-50 " class="img_fluid rounded" alt="zapatillas">
          <h2 class="fw-normal">Adidas</h2>
          <p>Un Triple Seguro. Solo para ganadores.</p><br>
          <p><a class="btn btn-secondary" href="comprar">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="assets/img/adidas3.jpg" class="d-block w-50 " class="img_fluid rounded" alt="zapatillas">
          <h2 class="fw-normal">Adidas</h2>
          <p>La facha no tiene limites. Probalas.</p><br>
          <p><a class="btn btn-secondary" href="comprar">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- INICIA LAS CARACTERÍSTICAS -->
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">No mires el reloj, sigue adelante. <span class="text-body-secondary"><br><br>No cuentes los días, haz que los días cuenten.</span></h2>
          <p class="lead"></p>
          <br>
          <p><a class="btn btn-secondary" href="comprar">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="assets/img/bg-zapa4.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
          </img>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Si quieres algo que nunca has tenido, tienes que hacer algo que nunca has hecho. <span class="text-body-secondary"><br><br>Sigue Adelante.</span></h2>
          <br>
          <p><a class="btn btn-secondary" href="comprar">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="assets/img/bg-zapa1.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
          </img>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">La fuerza no viene de la capacidad física, sino de la voluntad indomable. <span class="text-body-secondary"><br><br>No se trata de ser el mejor, se trata de ser mejor que ayer.</span></h2>
          <br>
          <p><a class="btn btn-secondary" href="comprar">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="assets/img/bg-zapa2.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
          </img>
        </div>
      </div>

      <hr class="featurette-divider">


    </div><!-- /.container -->

    <!-- fin -->