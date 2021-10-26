// Add Your Scripts here

(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            
            event.stopPropagation();
          }else{

            // OBtener valores del formulario
            var nombre = document.getElementById('nombre').value;
            var email =  document.getElementById('email').value;
            var mensaje = document.getElementById('mensaje').value;

            // Ejecutar ajax (Son cuatro pasos)
            var xhr = new XMLHttpRequest(); // primer paso (crear el objeto)

            // Abrir la conexion
            xhr.open('POST','http://localhost/proyecto1/inc/enviar.php',true);// Toma 3 parametros

            // Siempre q utilizas un formulario se debe agregar un header
              xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            // Revisar el estado
            xhr.onload = function(){
              if(xhr.status === 200){
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                if(respuesta.respuesta === true){
                  var div = document.createElement('div');
                  div.appendChild(document.createTextNode('Se evio correctamente'));
                  div.classList.add('alert','alert-success','mt-4','text-center')
                  document.querySelector('form').appendChild(div);
                  setTimeout(function(){
                    document.querySelector('alert').remove();
                  },3000);

                  
                }
                else{
                  console.log("No se envio...");
                }
              }
            }
            // Enviar el request
            xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);

          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();