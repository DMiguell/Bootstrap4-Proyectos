  <?php
    $titulo = "Nosotros";
    include 'templates/header.php';
    include 'templates/navegacion.php';
    
    ?>

      <div class="container pt-4">
        <div class="row no-gutters">
          <div class="col-12 hero">
            <img src="img/nosotros.jpg" alt="" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
            
          </div>

        </div>
      </div>

      <div class="container pt-4 ">
        <div class="row">
          <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
              Nosotros
            </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ex. Necessitatibus distinctio, quod blanditiis modi porro hic consequuntur labore repudiandae adipisci sit! Accusamus consectetur voluptatum eius perferendis sunt, distinctio facilis!</p>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio distinctio a placeat consequuntur at? Amet voluptates sit, ipsa possimus quaerat voluptas, dolorem dolor nisi, blanditiis cupiditate expedita! Amet, non odit!</p>

            <h2 class="text-center text-uppercase mt-4 encabezado mt-2">
              <span class="text-lowercase d-block">Conoce nuestras</span>Instalaciones
            </h2>

            <div class="imagenes pt-4 d-flex justify-content-center ">
              <a href="" data-target="#imagen_1" data-toggle="modal">
                <img src="img/galeria_mini_01.jpg" alt="" class="img-fluid px-1">
              </a>
              <a href="" data-target="#imagen_2" data-toggle="modal">
                <img src="img/galeria_mini_02.jpg" alt="" class="img-fluid px-1">
              </a>
              <a href="" data-target="#imagen_3" data-toggle="modal">
                <img src="img/galeria_mini_03.jpg" alt="" class="img-fluid px-1 ">

              </a>
              <div class="modal fade" id="imagen_1" tabindex="1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <img src="img/galeria_grande_01.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div><!--Modal-->
              <div class="modal fade" id="imagen_2" tabindex="1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <img src="img/galeria_grande_02.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div><!--Modal-->
              <div class="modal fade" id="imagen_3" tabindex="1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <img src="img/galeria_grande_03.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div><!--Modal-->
            </div>
          </main><!--Contenido Main-->

          <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start mt-4 mt-lg-0">
            <div class="sidebar horario">
              <h2 class="text-center text-uppercase mt-4">
                Horarios
              </h2>
              <p class="text-center lead mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam minus ullam aliquam dolore voluptatem maiores vero cupiditate inventore esse, nisi animi tempora quaerat voluptatibus, molestias laborum, deserunt distinctio officiis tempore.

              </p>
              <table class="table table-hover text-center mt-3">
                <thead>
                    <tr>
                        <th class="text-center">Día</th>
                        <th class="text-center">De</th>
                        <th class="text-center">Hasta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Lunes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td>10:00</td>
                        <td>14:00</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td>Cerrado</td>
                        <td>Cerrado</td>
                    </tr>
                </tbody>
           </table>
            </div>
          </aside>
        </div>
      </div>

      

      <?php
      include 'templates/footer.php'
      ?>