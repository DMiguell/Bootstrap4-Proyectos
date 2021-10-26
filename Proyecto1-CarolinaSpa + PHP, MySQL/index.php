
    <?php
    $titulo = "Inicio";
    include 'templates/header.php';
    include 'templates/navegacion.php';
    include 'inc/funciones.php';
    ?>

      <div class="container">
        <div id="slider-principal" class="carousel slide mt-4 " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
            <li data-target="#slider-principal" data-slide-to="1"></li>
            <li data-target="#slider-principal" data-slide-to="2"></li>
          </ol><!--El paginador del carousel-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slide_01.jpg" alt="Nuestras instalaciones">
              <div class="carousel-caption">
                <h3 class="text-uppercase">Nuevas instalaciones</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide_02.jpg" alt="Conoce nuestros servicios">
              <div class="carousel-caption">
                <h3 class="text-uppercase">Conoce nuestros servicios</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide_03.jpg" alt="Promocion">
              <div class="carousel-caption">
                <h3 class="text-uppercase">Nuevo sitio web, 2x1 en todos los servicios</h3>
              </div>
            </div>
          </div><!--carousel.item-->
          <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div><!--Carousel-->
      </div><!--container del carousel-->

      <section class="nuevo-sitio py-5">
        <h2 class="text-center text-uppercase mt-4 encabezado">
          <span class="text-lowercase d-block">Bienvenido a nuestro</span>Sitio Web
        </h2>
        <p class="text-center mt-4">Te sentiras como nuevo(a) con nuestros <br>masajistas profesionales.</p>
      </section><!--Seccion Bienvenida-->

      <div class="container mb-5">
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
              <img src="img/servicio_01.jpg" alt="" class="img-fluid">
              <div class="row no-gutters justify-content-center">
                <div class="col-md-10 servicio-info pt-4">
                  <h3 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Conoce sobre</span>nosotros
                  </h3>
                  <a href="nosotros.php" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer mas</a>
                </div>
              </div><!--row-->
            </div>
          </div><!--col-->
          <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
              <img src="img/servicio_02.jpg" alt="" class="img-fluid">
              <div class="row no-gutters justify-content-center">
                <div class="col-md-10 servicio-info pt-4">
                  <h3 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Nuestros</span>Servicios
                  </h3>
                  <a href="servicios.php" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer mas</a>
                </div>
              </div><!--row-->
            </div>
          </div><!--col-->
          <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
              <img src="img/servicio_03.jpg" alt="" class="img-fluid">
              <div class="row no-gutters justify-content-center">
                <div class="col-md-10 servicio-info pt-4">
                  <h3 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Visita nuestra</span>Tienda
                  </h3>
                  <a href="productos.php" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer mas</a>
                </div>
              </div><!--row-->
            </div>
          </div><!--col-->
        </div>
      </div><!--Seccion de la Pagina-->

      <div class="horario">
        <div class="container">
          <div class="row">
            <div class="col-md-6 p-4">
              <h2 class="text-center text-uppercase mt-5">Horarios</h2>
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
            <div class="col-md-6 bg-horario  ">
              
            </div>
          </div>
        </div>
      </div><!--Seccion de Horarios-->

      <section class="productos container py-5">
        <h2 class="encabezado text-center text-uppercase mt-4">
          <span class="text-lowercase d-block">nuestros</span>Productos
        </h2>
        <div class="row py-5">
          <?php
            $productos = obtenerProductos(4);

            while($producto = $productos->fetch_assoc() ){
              // Utilizar fecht_assoc (mas recomendable)
              /* codigo para ver el resultado 
              echo "<pre>";
              var_dump($producto);
              echo "</pre>";
              */
          ?>
          
          <div class="col-md-3 mb-4">
            <div class="card">
              <a href="producto.php?id=<?php echo $producto['id'];?>">
                <img class="card-img-top" src="img/<?php echo $producto['imagen_mini'];?>" alt="">
                <div class="card-body">
                  <h3 class="card-title text-center text-uppercase">
                  <?php echo $producto['nombre'];?>
                  </h3>
                  <p class="card-text text-uppercase">
                    <?php echo $producto['descripcion_corta'];?>
                  </p>
                  <p class="precio mb-4 text-center">
                    $<?php echo $producto['precio'];?>
                  </p>
                </div>
              </a>
            </div><!--card-->
          </div><!--cold-md-3-->
          <?php }?>
        </div>
      </section><!--Seccion de Productos-->

      

      <?php
      include 'templates/citas.php';
      include 'templates/footer.php';
      ?>

