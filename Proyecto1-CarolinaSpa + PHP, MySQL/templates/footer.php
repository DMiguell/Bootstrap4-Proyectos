<footer class="footer-sitio pt-3 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti nihil dicta assumenda praesentium officia fugit dignissimos iure dolores! Est porro excepturi dicta, molestias assumenda mollitia omnis asperiores magnam amet rerum?</p>
            </div>
            <div class="col-md-4 text-center">
              <h3 class="text-uppercase text-center pb-4">Horario</h3>
              <p>Lun-Vie: 9 Am - 7 PM</p>
              <p>Sabado: 10 AM - 2PM</p>
              <p>Domingo: Cerrado</p>
            </div><!--Col-md-4-->
            <div class="col-md-4 text-center">
              <h3 class="text-uppercase text-center pb-4">Contacto</h3>
              <p>66 East Sunnyslope Avenue</p>
              <p>Lansdowne, PA 19050</p>
              <nav class="sociales text-center text-center ">
                <ul>
                    <li><a href="http://facebook.com"><span class="sr-only">Facebook</span></a></li>
                    <li><a href="http://twitter.com"><span class="sr-only">Twitter</span></a></li>
                    <li><a href="http://instagram.com"><span class="sr-only">Instagram</span></a></li>
                    <li><a href="http://pinterest.com"><span class="sr-only">Pinterest</span></a></li>
                    <li><a href="http://youtube.com"><span class="sr-only">Youtube</span></a></li>
                </ul>
            </nav>
            </div><!--Col-md-4-->
            <hr class="w-100">
            <p class="text-center copyright w-100">Carolina Spa & Salon 2018. Todos los derechos reservados</p>
          </div><!--Row-->
          
        </div>
      </footer><!--Pie de Pagina-->

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
?>