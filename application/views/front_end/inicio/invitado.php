<style>
    #modal_registro {
        /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
        width:inherit;
        height:inherit;
        /* To center horizontally */
        margin: 0 auto;
        width:60%;
    }
    
    #modal_login {
        /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
        width:inherit;
        height:inherit;
        /* To center horizontally */
        margin: 0 auto;
    }
    
    .color_blanco{
      color:ghostwhite;

    }

</style>  

<!-- Page Content -->
      <div id="page-content">

        <div class="index-page-search-content">
          <div id="owl-demo" class="owl-carousel owl-theme">

            <div class="item"
              style="background: url('./img/home-bg.jpg') center center no-repeat; background-size: cover;"></div>
            <div class="item"
              style="background: url('./img/home-bg2.jpg') center center no-repeat; background-size: cover;"></div>
            <div class="item"
              style="background: url('./img/home-bg3.jpg') center center no-repeat; background-size: cover;"></div>


          </div>
          <div class="container">
            <div class="search-holder">
              <h1 style="font-size:40px">Sistema de Gestion de Contratos</h1>
              <h2 style="font-size:25px">Busca, Selecciona y Contrata!!!</h2>

              <div id="header-search">
                <div class="header-search-bar">
                  <div class="">
                    <form>
                      <div class="basic-form clearfix"> <a href="#" class="toggle"><span></span></a>
                        <div class="hsb-input-1">
                          <input type="text" class="form-control" placeholder="Palabras de Búsqueda">
                        </div>
                        <div class="hsb-text-1">in</div>
                        <div class="hsb-container">
                          <div class="hsb-input-2">
                            <input id="id_ciudad_laboral" type="text" class="form-control" placeholder="Ej: Copiapó">
                          </div>
                          <div class="hsb-select">
                            <select class="form-control">
                              <option value="0">Seleccionar Categoria</option>
                              <option value="">Banking</option>
                              <option value="">Finance</option>
                              <option value="">IT</option>
                              <option value="">Specialists</option>
                            </select>
                          </div>
                        </div>
                        <div class="hsb-submit">
                          <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Buscar</span></button>
                        </div>
                      </div>
                      <div class="advanced-form">
                        <div class="">
                          <div class="row">
                            <label class="col-md-3">Distance</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="200" data-current="100"></div>
                                <div class="last-value"><span>100</span> km</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Rating</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="100" data-current="20"></div>
                                <div class="last-value">&gt; <span>20</span> %</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Days Published</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="60" data-current="30"></div>
                                <div class="last-value">&lt; <span>30</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Locación</label>
                            <div class="col-md-9">
                              <input id="id_ciudad_laboral2" type="text" class="form-control" placeholder="Ej: Copiapó">
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-9">
                              <select class="form-control">
                                <option value="">Select Category</option>
                                <option value="">Banking</option>
                                <option value="">Finance</option>
                                <option value="">IT</option>
                                <option value="">Specialists</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- end .container -->
      </div>

<!-- MODAL REGISTRO -->
<div id="modal_registro" class="modal fade">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="text-align:center;" class="modal-title">Registro de Trabajador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_registro_laboral" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="nombre_sigesco_laboral" name="nombre_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Nombre" aria-label="Nombre" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="paterno_sigesco_laboral" name="paterno_sigesco_laboral" type="text" class="form-control validate" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="run_sigesco_laboral" name="run_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="R.U.N" aria-label="RUN" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="ciudad_buscar_sigesco_laboral" name="ciudad_buscar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ciudad" aria-label="Ciudad">
                            <input style="display:none" id="ciudad_sigesco_laboral" name="ciudad_sigesco_laboral" type="text" class="form-control validate" placeholder="Ciudad" aria-label="Ciudad">
                        </div>
                    </div>
                      
                  </div>
                  <div class="row" style="padding:5px 10px">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="celular_sigesco_laboral" name="celular_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Teléfono de Contacto" aria-label="Teléfono de Contacto" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="email_sigesco_laboral" name="email_sigesco_laboral" type="email" class="form-control validate" placeholder="Email" aria-label="Email">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_registro_trabajador_laboral" style="color:white;" type="button" class="btn btn-primary">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL REGISTRO -->

<!-- MODAL LOGIN -->
<div id="modal_login" class="modal fade">
    <div class="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ingreso a la Plataforma</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_login_laboral" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="email_login_sigesco_laboral" name="email_login_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Run o Email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="pass_login_sigesco_laboral" name="pass_login_sigesco_laboral" type="password" class="form-control validate" placeholder="Contraseña" aria-label="Contraseña">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_ingreso_trabajador_laboral" style="color:white;" type="button" class="btn btn-primary">Ingresar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL LOGIN -->

<script>
    
    $( document ).ready(function() {   
        
        toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
        
       // $('#celular_sigesco_laboral').mask('+569-00000000');
        
        $('#celular_sigesco_laboral').mask('+56A-ZZZZZZZZ', {translation: {A: {pattern: '9'}, Z: {pattern: /[0-9]/}} });
        
        $("#id_ciudad_laboral").typeahead({
          source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
        
        $("#id_ciudad_laboral2").typeahead({
          source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
        
       var $ciudad_registro = $("#ciudad_buscar_sigesco_laboral").typeahead({
          source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
        
        $("#ciudad_buscar_sigesco_laboral").change(function() {
          var current = $("#ciudad_buscar_sigesco_laboral").typeahead("getActive");
          if (current) {
            // Some item from your model is active!
            if (current.name == $("#ciudad_buscar_sigesco_laboral").val()) {
                $("#ciudad_sigesco_laboral").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
            // Nothing is active so it is a new value (or maybe empty value)
          }
        });
        
        $('#run_sigesco_laboral').Rut({
            validation:true,
            format:true,
            format_on:'keyup',
            on_error: function(){ 
              toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": true,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                };
                    $( "#run_sigesco_laboral" ).css(  "border-color","red" );
                    $( "#run_sigesco_laboral" ).focus();
                    $( "#run_sigesco_laboral" ).val("");
                    Command: toastr["error"]("El <strong>'Email'</strong> ingresado es Incorrecto.", "RUN")
            },
            on_success: function(){ $( "#run_sigesco_laboral" ).css( "border-color","#ccc" );}
        });
        
        
        $( "#boton_registro_trabajador_laboral" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#nombre_sigesco_laboral").val().length > 0){$( "#nombre_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#paterno_sigesco_laboral").val().length > 0){ $( "#paterno_sigesco_laboral" ).css( "border-color","#ccc" );
                    if($("#run_sigesco_laboral").val().length > 0){ $( "#run_sigesco_laboral" ).css( "border-color","#ccc" );
                        if($("#ciudad_sigesco_laboral").val().length > 0){ $( "#ciudad_sigesco_laboral" ).css( "border-color","#ccc" );
                            if($("#celular_sigesco_laboral").val().length > 0){ $( "#celular_sigesco_laboral" ).css( "border-color","#ccc" );
                                if($("#email_sigesco_laboral").val().length > 0){ $( "#email_sigesco_laboral" ).css( "border-color","#ccc" );
                                    bootbox.confirm({ 
                                      size: "medium",
                                      buttons: {
                                        confirm: {
                                          label: 'Crear',
                                          className: 'btn-success color_blanco'
                                        },
                                        cancel: {
                                          label: 'Cerrar',
                                          className: 'btn-danger color_blanco'
                                        }
                                      },
                                      title: "Registrase en la Plataforma",
                                      message: "¿Esta seguro de <strong> Regitrarse</strong> en SIGESCO?", 
                                      callback: function(result){

                                      if(result == true){
                                          
                                          $.ajax({
                                                type: 'POST',
                                                url: '<?=base_url()?>inicio/registro_trabajador_laboral',
                                                data: $('#form_registro_laboral').serialize(),
                                                success: function(data){
                                                    switch(data) {
                                                        case '1':
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
                                                              "onclick": null,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "7000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                                            Command: toastr["success"]("Se envio un correo electronico a su cuenta Email. Favor de Verificar.", "Registro Realizado")
                                                            break;
                                                        case '0':
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
                                                              "onclick": null,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "7000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                                            break;
                                                            
                                                         case "run":
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "5000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                                            toastr.options.onclick = function () {
                                                                alert('Aqui la funcion de recuperar');
                                                            };
                                                            Command: toastr["error"]("Este RUN ya esta registrado en nuestra Plataforma. Recuperar cuenta click aquí.", "RUN Registrado")
                                                            break;
                                                    }

                                                    
                                                }

                                            });
                                       }
                                      }  
                                    });
                                }else{
                                    $( "#email_sigesco_laboral" ).css(  "border-color","red" );
                                    $( "#email_sigesco_laboral" ).focus();
                                    Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
                                }
                            }else{
                                $( "#celular_sigesco_laboral" ).css(  "border-color","red" );
                                $( "#celular_sigesco_laboral" ).focus();
                                Command: toastr["error"]("Ingrese el campo <strong>'Celular'</strong> por favor.", "Celular")
                            }
                        }else{
                            $( "#ciudad_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#ciudad_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
                        }
                    }else{
                        $( "#run_sigesco_laboral" ).css(  "border-color","red" );
                        $( "#run_sigesco_laboral" ).focus();
                        Command: toastr["error"]("Ingrese el campo <strong>'R.U.N'</strong> por favor.", "RUN")
                    }            
                }else{
                    $( "#paterno_sigesco_laboral" ).css( "border-color","red" );
                    $( "#paterno_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Apellido Paterno'</strong> por favor.", "Apellido Paterno")
                }
            }else{
                
                $( "#nombre_sigesco_laboral" ).css(  "border-color","red" );
                $( "#nombre_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
            }
            
        });
        
        $( "#boton_ingreso_trabajador_laboral" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#email_login_sigesco_laboral").val().length > 0){$( "#email_login_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#pass_login_sigesco_laboral").val().length > 0){ $( "#pass_login_sigesco_laboral" ).css( "border-color","#ccc" );
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>login/validar',
                        data: {user: $("#email_login_sigesco_laboral").val() ,pass: $("#pass_login_sigesco_laboral").val()},
                        success: function(data){
                            
                            if(data == true){
                                redireccionarPagina('<?=base_url()?>laboral');
                            }else{
                                 
                                Command: toastr["error"]("Rut/Email o Contraseña Incorrecta. Favor de Verificar.", "Error de Ingreso");
                            }
                        }
                    });
                }else{
                    $( "#pass_login_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_login_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
            }else{
                
                $( "#email_login_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_login_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Run o Email'</strong> por favor.", "RUN o Email")
            }
            
        });
        
    });
    
    
                        
</script>