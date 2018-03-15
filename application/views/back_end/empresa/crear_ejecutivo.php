<style>
    input[type="file"]#mi_archivo {
     width: 0.1px;
     height: 0.1px;
     opacity: 0;
     overflow: hidden;
     position: absolute;
     z-index: -1;
    }
    a {
        cursor: pointer;
    }
    
    .agent-single {
        min-height: 500px;
        height: 500px;
    }
</style>
<div id="page-content" style="padding-top:3%;">
        <div class="container">
          <div class="page-content">
            <div class="agents-details">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-xl-12">
                    <div class="row">
                    <div id="form_crear_ejecutivo_ec" class="col-md-3 col-sm-4 col-xs-6 col-xl-3">
                        <div class="agent-single">
                            <div class="add-image-field">
                                <span style="width:100px;" class="mi_archivo">
                                    <input type="file" id="archivo_logo" name="archivo_logo" style="display:none">
                                </span>

                                <label class="btn btn-default" for="archivo_logo" style="">
                                    <span>Subir Imagen</span>
                                </label>
                            </div>
                            <form style="margin-top:5%">
                              <input id="nombre_ejecutivo_sigesco_laboral"  name="nombre_ejecutivo_sigesco_laboral" type="text" placeholder="Nombre">
                              <input id="run_ejecutivo_sigesco_laboral" name="run_ejecutivo_sigesco_laboral" type="text" placeholder="R.U.N">
                              <input id="telefono_ejecutivo_sigesco_laboral" name="telefono_ejecutivo_sigesco_laboral" type="text" placeholder="Teléfono">
                              <input id="email_ejecutivo_sigesco_laboral" name="email_ejecutivo_sigesco_laboral" type="text" placeholder="Email">
                              <select id="tipo_ejecutivo_sigesco_laboral" name="tipo_ejecutivo_sigesco_laboral">
                                  <option name='inicio_option' value="0" readonly>Seleccione Rol</option>
                                  <option value="2">Ejecutivo</option>
                              </select>
                              <select id="sucursal_ejecutivo_sigesco_laboral" name="sucursal_ejecutivo_sigesco_laboral">
                                  <option name='inicio_option' selected>Seleccione Sucursal</option>
                                  <option value="1">Copiapó</option>
                                  <option value="2">La Serena</option>
                              </select>
                            </form>

                            <div class="save-details text-center">
                              <a id="form_crear_ejecutivo" class="btn btn-default">Crear Ejecutivo</a>
                            </div>
                      </div> <!-- end .agent-single  -->
                    </div> <!-- end grid layout  -->

                        <?php
                            foreach ($trabajadores as $trabajador){
                        ?>
                            <div class="col-md-3 col-sm-4 col-xs-6 col-xl-3">
                              <div class="agent-single">
                                <img style="height:170px" src="<?=base_url().$trabajador->url_foto_ejecutivo_empresa_contratista?>" alt="">
                                <ul>
                                  <li><span class="title">Nombre:</span><span class="title-des text-capitalize"><?=$trabajador->nombre_ejecutivo_empresa_contratista?> <?=$trabajador->paterno_ejecutivo_empresa_contratista?> <?=$trabajador->materno_ejecutivo_empresa_contratista?></span></li>
                                  <li><span class="title">R.U.N:</span><span class="title-des text-capitalize"><?=$trabajador->run_ejecutivo_empresa_contratista?></span></li>
                                  <li><span class="title">Tel:</span><span class="title-des"><?=$trabajador->telefono_ejecutivo_empresa_contratista?></span></li>
                                  <li><span class="title">Email:</span><span class="title-des"><?=$trabajador->email_ejecutivo_empresa_contratista?></span></li>
                                  <li><span class="title">Rol:</span><span class="title-des"><?=$trabajador->nombre_tipo_ejecutivo_ec?></span></li>
                                  <li><span class="title">Sucursal:</span><span class="title-des"><?=$trabajador->nombre_ciudad?></span></li>
                                </ul>

                                <div class="view-profile">
                                  <a href="#" class="btn btn-default">View Agent Profile</a>
                                </div>
                              </div> <!-- end .agent-single  -->
                            </div> <!-- end grid layout  -->
                        <?
                            }
                        ?>
                    </div>
                </div>
              </div> <!-- end .row -->

              <div class="pagination-content clearfix">
                <p>Displaying 10 out of 50 items</p>

                <nav>
                  <ul class="list-inline">
                    <li><a class="btn btn-default first" href="#">first</a></li>
                    <li><a class="btn btn-default previous" href="#">Previous</a></li>
                    <li><a class="number" href="#">3</a></li>
                    <li><a class="btn btn-default next" href="#">Next</a></li>
                    <li><a class="btn btn-default last" href="#">Last</a></li>
                  </ul>
                </nav>
              </div>
            </div> <!-- end .agents-details -->
          </div> <!-- end container -->
        </div> <!-- end .page-content -->

      </div> <!-- end #page-content -->

<script>
$( document ).ready(function() { 
    
    $('#run_ejecutivo_sigesco_laboral').Rut({
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
                    $( "#run_ejecutivo_sigesco_laboral" ).css(  "border-color","red" );
                    $( "#run_ejecutivo_sigesco_laboral" ).focus();
                    $( "#run_ejecutivo_sigesco_laboral" ).val("");
                    Command: toastr["error"]("El <strong>'RUN'</strong> ingresado es Incorrecto.", "RUN")
            },
            on_success: function(){ $( "#run_sigesco_laboral" ).css( "border-color","#ccc" );}
        });
    
    $( "#form_crear_ejecutivo" ).click(function() {
        if($("#nombre_ejecutivo_sigesco_laboral").val().length > 0){
            $("#nombre_ejecutivo_sigesco_laboral").css( "border-color","#ccc" );
        if($("#run_ejecutivo_sigesco_laboral").val().length > 0){
            $("#run_ejecutivo_sigesco_laboral").css( "border-color","#ccc" );
        if($("#telefono_ejecutivo_sigesco_laboral").val().length > 0){
            $("#telefono_ejecutivo_sigesco_laboral").css( "border-color","#ccc" );
        if($("#email_ejecutivo_sigesco_laboral").val().length > 0){
            $("#email_ejecutivo_sigesco_laboral").css( "border-color","#ccc" );
        if($("#input_tipo_ejecutivo_sigesco_laboral").val().length > 0){
            $("#input_tipo_ejecutivo_sigesco_laboral").css( "border-color","#ccc" );
        if($("#input_sucursal_ejecutivo_sigesco_laboral").val().length > 0){
            $("#input_sucursal_ejecutivo_sigesco_laboral").css( "border-color","#ccc" );
            
            var ejecutivo = new FormData();
            ejecutivo.append("nombre_ejecutivo_sigesco_laboral", $( "#nombre_ejecutivo_sigesco_laboral" ).val());
            ejecutivo.append("run_ejecutivo_sigesco_laboral", $( "#run_ejecutivo_sigesco_laboral" ).val());
            ejecutivo.append("telefono_ejecutivo_sigesco_laboral", $( "#telefono_ejecutivo_sigesco_laboral" ).val());
            ejecutivo.append("email_ejecutivo_sigesco_laboral", $( "#email_ejecutivo_sigesco_laboral" ).val());
            ejecutivo.append("tipo_ejecutivo_sigesco_laboral", $( "#input_tipo_ejecutivo_sigesco_laboral" ).attr('valor'));
            ejecutivo.append("sucursal_ejecutivo_sigesco_laboral", $( "#input_sucursal_ejecutivo_sigesco_laboral" ).attr('valor'));
            ejecutivo.append("nombre_tipo_ejecutivo_sigesco_laboral", $( "#input_tipo_ejecutivo_sigesco_laboral" ).val());
            ejecutivo.append("nombre_sucursal_ejecutivo_sigesco_laboral", $( "#input_sucursal_ejecutivo_sigesco_laboral" ).val());
            if($("#archivo_logo").val().length > 0){
                    ejecutivo.append( "archivo_logo", $("#archivo_logo")[0].files[0]);
            }
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>empresa/crear_ejecutivo_empresa_contratista',
                    contentType: false,
                    data: ejecutivo, 
                    processData: false,
                    cache: false,
                    success: function(data){
                    var datos = JSON.parse(data);
                        if(datos[0] == true){
                            Command: toastr["success"]("Usuario <strong>Creado</strong> Correctamente.", "Usuario Creado")
                            $( "#nombre_ejecutivo_sigesco_laboral" ).val('');
                            $( "#run_ejecutivo_sigesco_laboral" ).val('');
                            $( "#telefono_ejecutivo_sigesco_laboral" ).val('');
                            $( "#email_ejecutivo_sigesco_laboral" ).val('');
                            $( "#input_tipo_ejecutivo_sigesco_laboral" ).attr('valor','');
                            $( "#input_sucursal_ejecutivo_sigesco_laboral" ).attr('valor','');
                            $( "#input_tipo_ejecutivo_sigesco_laboral" ).val('Seleccione Rol');
                            $( "#input_sucursal_ejecutivo_sigesco_laboral" ).val('Seleccione Sucursal');
                            $(".add-image-field").css('background-image', 'url("<?=base_url()?>img/content/upload-image.jpg")');
                            $( "#form_crear_ejecutivo_ec" ).after('<div class="col-md-3 col-sm-4 col-xs-6"><div class="agent-single"><img style="height:177px;" src="<?=base_url()?>'+datos[10]+'" alt=""><ul><li><span class="title">Nombre:</span><span class="title-des text-capitalize">'+datos[4]+'</span></li><li><span class="title">R.U.N:</span><span class="title-des text-capitalize">'+datos[5]+'</span></li><li><span class="title">Tel:</span><span class="title-des">'+datos[6]+'</span></li><li><span class="title">Email:</span><span class="title-des">'+datos[7]+'</span></li><li><span class="title">Rol:</span><span class="title-des">'+datos[8]+'</span></li><li><span class="title">Sucursal:</span><span class="title-des">'+datos[9]+'</span></li></ul><div class="view-profile"><a href="#" class="btn btn-default">Perfil Ejecutivo</a></div></div> </div>');
                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                });
        
        }else{
            $("#input_sucursal_ejecutivo_sigesco_laboral").css(  "border-color","red" );
            $("#input_sucursal_ejecutivo_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Sucursal'</strong> por favor.", "Sucursal")
        }    
        
        
        }else{
            $("#input_tipo_ejecutivo_sigesco_laboral").css(  "border-color","red" );
            $("#input_tipo_ejecutivo_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Rol'</strong> por favor.", "Rol")
        }  
        
        
        }else{
            $("#email_ejecutivo_sigesco_laboral").css(  "border-color","red" );
            $("#email_ejecutivo_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
        }    
        
        
        }else{
            $("#telefono_ejecutivo_sigesco_laboral").css(  "border-color","red" );
            $("#telefono_ejecutivo_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Teléfono'</strong> por favor.", "Teléfono")
        }
        
        }else{
            $("#run_ejecutivo_sigesco_laboral").css(  "border-color","red" );
            $("#run_ejecutivo_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'RUN'</strong> por favor.", "RUN")
        }
        }else{
            $("#nombre_ejecutivo_sigesco_laboral").css(  "border-color","red" );
            $("#nombre_ejecutivo_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
        }
    });
});
    
$( "#archivo_logo" ).change(function() {
        var img_logo = new FormData();
        img_logo.append( "archivo_logo", $("#archivo_logo")[0].files[0]);
        
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>empresa/subir_logo',
            contentType: false,
            data: img_logo, 
            processData: false,
            cache: false,
            success: function(data){
                if(data != false){
                    $(".add-image-field").css('background-image', 'url("<?=base_url()?>' + data + '")');
                }else{
                    Command: toastr["error"]("Ocurrio un Problema, intente nuevamente por favor.", "Error al subir Logo")
                }
            }
        });
    });
</script>