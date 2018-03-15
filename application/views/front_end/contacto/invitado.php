    <div id="page-content" class="pt50">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 page-content">
                <div class="row">
                    <div class="col-sm-6"><div id="contact-page-map" class="white-container"></div></div>
                    <div class="col-sm-6"><div id="jobs-page-map" class="white-container"></div></div>
                </div>                
              <div class="white-container mb0">
                <div class="row">
                  <div class="col-sm-6">
                    <h5 class="bottom-line mt10">Santiago</h5>

                    <address>
                      Padre Alonso de Ovalle 868 <br>
                      Piso 10, Oficina 1011 <br>
                      Santiago Centro
                    </address>

                    <p>
                      Teléfono: <a href="tel:+56951232527">+569 51232527</a> <br>
                      Email: <a href="mailto:email@example.com">david.plaza@sigesco.cl</a>
                    </p>
                  </div>

                  <div class="col-sm-6">
                    <h5 class="bottom-line mt10">Copiapó</h5>

                    <address>
                      Av Alameda, <br>
                      Manuel Antonio Matta 219 <br>
                      Copiapó
                    </address>

                    <p>
                      Teléfono: <a href="tel:+11234567890">+569 71387712</a> <br>
                      Email: <a href="mailto:email@example.com">alejandro.pulgar@sigesco.cl</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4 page-sidebar">
              <aside>
                <div class="widget sidebar-widget white-container contact-form-widget">
                  <h5 class="widget-title">Envienos su Mensaje</h5>

                  <div class="widget-content">
                    <p>Complete el siguiente formulario y envienos su mensaje. <br> Nuestro equipo se contactará a la brevedad con usted.</p>

                    <form id="form_mensaje" class="mt30">
                      <div class="form-group">
                        <input id="nombre_mensaje" name="nombre_mensaje" type="text" class="form-control" placeholder="Nombre">
                      </div>

                      <div class="form-group">
                        <input id="email_mensaje" name="email_mensaje" type="text" class="form-control" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <input id="telefono_mensaje" name="telefono_mensaje" type="text" class="form-control" placeholder="Celular">
                      </div>

                      <div class="form-group">
                        <textarea id="cuerpo_mensaje" name="cuerpo_mensaje" class="form-control" rows="5" placeholder="¿En que podemos ayudar?"></textarea>
                      </div>

                      <button id="enviar_mensaje" type="button" class="btn btn-default"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>
                    </form>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div> <!-- end .container -->

        <!-- end .container -->
      </div>
<!-- SOLO EN ESTA PAGINA -->
    <script src="<?=base_url()?>js/maplace.min.js"></script>
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&sensor=false&libraries=geometry&v=3.7"></script>
<!-- FINAL SOLO EN ESTA PAGINA -->

<script>
$( document ).ready(function() {
    
    $('#telefono_mensaje').mask('+56A-ZZZZZZZZ', {translation: {A: {pattern: '9'}, Z: {pattern: /[0-9]/}} });
    
    $( "#enviar_mensaje" ).click(function( event ) {
      if($("#nombre_mensaje").val() != ''){
          $( "#nombre_mensaje" ).css( "border-color","#ccc" );
      if($("#email_mensaje").val() != ''){
          $( "#email_mensaje" ).css( "border-color","#ccc" );
      if($("#telefono_mensaje").val() != ''){
          $( "#telefono_mensaje" ).css( "border-color","#ccc" );
         
          if($("#cuerpo_mensaje").val() != ''){
          $( "#cuerpo_mensaje" ).css( "border-color","#ccc" );
          
            $.ajax({                
                type: 'POST',
                url: '<?=base_url()?>contacto/enviar_mensaje',
                data: { 
                    nombre_mensaje : $("#nombre_mensaje").val().toUpperCase(), 
                    email_mensaje : $("#email_mensaje").val().toUpperCase(),
                    telefono_mensaje : $("#telefono_mensaje").val().toUpperCase(), 
                    cuerpo_mensaje : $("#cuerpo_mensaje").val().toUpperCase(), 
                },
                success: function(data){                       
                    if(data == true){
                        $("#nombre_mensaje").val('');
                        $("#email_mensaje").val('');
                        $("#telefono_mensaje").val('');
                        $("#cuerpo_mensaje").val('');
                        Command: toastr["success"]("Su <strong>'Mensaje'</strong> ha sido enviado Correctamente.", "Mensaje Enviado");
                    }else{
                        Command: toastr["error"]("Ocurrio un <strong>'Problema'</strong> por favor, intente nuevamente.", "Error")
                    }
                }
            });
          
      }else{
        $( "#cuerpo_mensaje" ).css(  "border-color","red" );
        $( "#cuerpo_mensaje" ).focus();
        Command: toastr["error"]("Ingrese el campo <strong>'Mensaje'</strong> por favor.", "Mensaje")
        } 
          
      }else{
        $( "#telefono_mensaje" ).css(  "border-color","red" );
        $( "#telefono_mensaje" ).focus();
        Command: toastr["error"]("Ingrese el campo <strong>'Teléfono'</strong> por favor.", "Teléfono")
        }   
          
      }else{
        $( "#email_mensaje" ).css(  "border-color","red" );
        $( "#email_mensaje" ).focus();
        Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
        }    
      }else{
        $( "#nombre_mensaje" ).css(  "border-color","red" );
        $( "#nombre_mensaje" ).focus();
        Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
        }
    });
});
</script>