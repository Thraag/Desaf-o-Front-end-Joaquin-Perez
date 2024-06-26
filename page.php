<?php
/*
Template Name:EJ
*/
get_header();
?>


<!-- navbar -->


<div class="container-fluid mx-0 px-0 ">
  <div class="container px-0 align-items-center">
    <nav class="navbar navbar-expand-lg navbar-light mx-0 px-0 my-0 py-0">
      <button class="navbar-toggler mb-3 ml-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ml-3 mb-3">
          <li class="nav-item active">
            <a class="nav-link text-white textobanner" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white textobanner" href="#">Ventajas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white textobanner" href="#">Precios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white textobanner" href="#">Registrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>



<!-- TITULO CHALLENGE -->

<div class="container-fluid text-white ">
    <div class="container  px-0 ">
        <div class="col-12 mx-0 px-0 ">
            <div class="divchallenge">
                <h1 class="challenge-title mt-0 pt-0 fade-in-card">CHALLENGE</h1>
            </div>
        </div>
    </div>
</div>



<!-- LLAMADA AL GRUPO DE WORDPRESS Y BANNER PRODUCIDO POR EL LOOP -->

<?php
get_template_part('loop');
?>

<!-- BANNER CON LOGO -->



<!-- VENTAJAS -->
<div class="container-fluid py-5 mx-0">
    <div class="container px-0">
        <h2 class="text-center mb-5 text-white">Tu aprendizaje sin límites</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 col-12 mb-4 fade-in-card d-flex">
                <div class="card gradient-bg text-white zoom-on-hover w-100">
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title">Código</h5>
                        <p class="card-text flex-grow-1">
                            Escribe código optimizado con precisión y elegancia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4 fade-in-card d-flex">
                <div class="card gradient-bg text-white zoom-on-hover w-100">
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title">Prácticas</h5>
                        <p class="card-text flex-grow-1">
                            Aprende las prácticas más eficaces para tu carrera.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4 fade-in-card d-flex">
                <div class="card gradient-bg text-white zoom-on-hover w-100">
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title">Compañerismo</h5>
                        <p class="card-text flex-grow-1">
                            Desenvuélvete en un ambiente laboral que potenciara.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- VIDEO -->
<div class="container-fluid">
  <div class="container px-0">
    <div class="embed-responsive embed-responsive-16by9 video-container">
      <iframe class="embed-responsive-item"
              src="https://www.youtube.com/embed/8ZjFAhQjGzY?rel=0&start=12"
              allowfullscreen
              title="YouTube video"
              style="width: 100%; height: 90%;">
      </iframe>
    </div>
  </div>
</div>


<!-- PLANES -->
<div class="container-fluid mx-0">
    <div class="container px-0">
        <h2 class="text-center mb-5 text-white">Planes para todos los gustos</h2>
        
        <div class="row justify-content-sm-center">
            <div class="col-md-4 col-12 mb-4 fade-in-card">
                <div class="card precio gradient-bg text-white zoom-on-hover mx-auto mx-md-0">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text text-left mb-3">Simple</p>
                        <h5 class="card-title mb-3 h2 font-weight-bold">$10/Men</h5>
                        <div class="separacionprecios">
                            <p>• Funciones básicas</p>
                            <p>• Corretor de código</p>
                            <p>• Avances mensuales</p>
                            <p>• Tutela parcial</p>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-light btn-block">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12 mb-4 fade-in-card">
                <div class="card precio gradient-bg text-white zoom-on-hover mx-auto">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text text-left mb-3">Plus</p>
                        <h5 class="card-title mb-3 h2 font-weight-bold">$20/Men</h5>
                        <div class="separacionprecios">
                            <p>• Funciones básicas</p>
                            <p>• Corretor de código</p>
                            <p>• Avances mensuales</p>
                            <p>• Tutela parcial</p>
                            <p>• Proyectos grupales</p>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-light btn-block">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12 mb-4 fade-in-card">
                <div class="card precio gradient-bg text-white zoom-on-hover mx-auto mx-md-0 ml-md-auto">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text text-left mb-3">Premium</p>
                        <h5 class="card-title mb-3 h2 font-weight-bold">$30/Men</h5>
                        <div class="separacionprecios">
                            <p>• Funciones básicas</p>
                            <p>• Corretor de código</p>
                            <p>• Avances mensuales</p>
                            <p>• Tutela proporcional</p>
                            <p>• Clases diarias</p>
                            <p class="itemsprecios">• Proyectos reales</p>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-light btn-block">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>




<!-- PARA LAS FUNCIONES DE BOOTSTRAP> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<?php get_footer(); ?>