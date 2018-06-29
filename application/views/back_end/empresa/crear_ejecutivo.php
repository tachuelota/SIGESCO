<style>
    input[type="file"]#mi_archivo {
     width: 0.1px;
     height: 0.1px;
     opacity: 0;
     overflow: hidden;
     position: absolute;
     z-index: -1;
    }
     
    a{
        cursor: pointer;
    }
    
    .btn-circle.btn-lg {
      width: 30px;
      height: 30px;
      padding: 0px 10px;
      font-size: 18px;
      line-height: 1.33;
      border-radius: 25px;
    }
    
    .agent-single {
        min-height: 500px;
        height: 500px;
    }
    
    .dropdown-menu {
        
        margin-left :0;
        margin-top: 0;
            
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
                              <input onChange="validar_email(this.id)" id="email_ejecutivo_sigesco_laboral" name="email_ejecutivo_sigesco_laboral" type="text" placeholder="Email">
                              <select id="tipo_ejecutivo_sigesco_laboral" name="tipo_ejecutivo_sigesco_laboral">
                                  <option name='inicio_option' value="0" readonly>Seleccione Rol</option>
                                    <?php
                                        foreach($tipo_ejecutivos as $tipo_ejecutivo){
                                        ?>
                                            <option value="<?=$tipo_ejecutivo->id_tipo_ejecutivo_ec?>"><?=$tipo_ejecutivo->nombre_tipo_ejecutivo_ec?></option>
                                    <?php } ?>
                              </select>
                                <div class="row">
                                    <div class="col-md-10">
                                        <select id="sucursal_ejecutivo_sigesco_laboral" name="sucursal_ejecutivo_sigesco_laboral">
                                              <option name='inicio_option' value="0" readonly>Seleccione Sucursal</option>
                                                <?php
                                                        foreach($sucursales as $sucursal){
                                                ?>
                                                    <option value="<?=$sucursal->id_sucursal_empresa_contratista?>"><?=$sucursal->nombre_sucursal_empresa_contratista?></option>
                                                <?php   } ?>
                                          </select>
                                    </div>
                                    <div class="col-md-2" style="padding-left:0px;">
                                        <button type="button" data-toggle="modal" data-target="#modal_crear_sucursal" class="btn btn-success btn-circle btn-lg"><i class="fa fa-plus fa-4x"></i></button>
                                    </div>
                                </div>
                              
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

<!-- Inicio Modal Crear Sucursal -->
<div class="modal fade" id="modal_crear_sucursal" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Nueva Sucursal</h4>
      </div>
      <div class="modal-body">
          <form id="form_crear_sucursal" class="default-form">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="nombre_sucursal_sigesco" name="nombre_sucursal_sigesco" placeholder="Ingrese Nombre para Sucursal">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="direccion_sucursal_sigesco" name="direccion_sucursal_sigesco" placeholder="Ingrese Dirección para Sucursal">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="telefono_sucursal_sigesco" name="telefono_sucursal_sigesco" placeholder="Ingrese Teléfono para Sucursal">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input onChange="validar_email(this.id)" type="text" class="form-control" id="email_sucursal_sigesco" name="email_sucursal_sigesco" placeholder="Ingrese Email para Sucursal">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input id="ciudad_sucursal_sigesco" name="ciudad_sucursal_sigesco" class="form-control" type="text" style="display:none">
                        <input type="text" class="form-control" id="ciudad_buscar_sigesco_laboral" name="ciudad_buscar_sigesco_laboral" placeholder="Ingrese Ciudad para Sucursal">
                    </div>
                    
                </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button onclick="crear_sucursal()" type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Crear Sucursal -->

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
    
    $('#telefono_ejecutivo_sigesco_laboral').mask("(00) 00000000", {placeholder: "Ingrese Telefono o Celular"});
    
    $('#telefono_sucursal_sigesco').mask("(00) 00000000", {placeholder: "EJ : (09) XXXXXXXX o (Cod. Área) 2XXXXXX"});
    
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
    
    $("#ciudad_buscar_sigesco_laboral").typeahead({
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
                $("#ciudad_sucursal_sigesco").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
                $("#ciudad_buscar_sigesco_laboral").val('');
                $("#ciudad_sucursal_sigesco").val('');
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
             // $("#ciudad_buscar_sigesco_laboral").val('');
            //  $("#ciudad_sucursal_sigesco").val('');
            // Nothing is active so it is a new value (or maybe empty value)
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
    
    function crear_sucursal(){
         if($("#nombre_sucursal_sigesco").val().length > 0){
            $("#nombre_sucursal_sigesco").css( "border-color","#ccc" );
        if($("#direccion_sucursal_sigesco").val().length > 0){
            $("#direccion_sucursal_sigesco").css( "border-color","#ccc" );
        if($("#telefono_sucursal_sigesco").val().length > 0){
            $("#telefono_sucursal_sigesco").css( "border-color","#ccc" );
        if($("#email_sucursal_sigesco").val().length > 0){
            $("#email_sucursal_sigesco").css( "border-color","#ccc" );
        if($("#ciudad_buscar_sigesco_laboral").val().length > 0){
            $("#ciudad_buscar_sigesco_laboral").css( "border-color","#ccc" );
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>empresa/crear_sucursal_empresa_contratista_modal',
                    data: $('#form_crear_sucursal').serialize(),
                    success: function(data){
                        if(data != false){
                            
                            Command: toastr["success"]("Sucursal <strong>Creada</strong> Correctamente.", "Sucursal Creada");
                            
                            $("#input_sucursal_ejecutivo_sigesco_laboral").attr('valor',data);
                            $("#input_sucursal_ejecutivo_sigesco_laboral").val($("#nombre_sucursal_sigesco").val());
                            $("#select_sucursal_ejecutivo_sigesco_laboral").append('<li data-value="'+data+'">'+$("#nombre_sucursal_sigesco").val()+'</li>');
                            $("#nombre_sucursal_sigesco").val('');
                            $("#direccion_sucursal_sigesco").val('');
                            $("#telefono_sucursal_sigesco").val('');
                            $("#email_sucursal_sigesco").val('');
                            $("#ciudad_buscar_sigesco_laboral").val('');
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                        }
                    }
                }); 
        
        }else{
            $("#ciudad_buscar_sigesco_laboral").css(  "border-color","red" );
            $("#ciudad_buscar_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
        }    
        
        }else{
            $("#email_sucursal_sigesco").css(  "border-color","red" );
            $("#email_sucursal_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
        }
        
        }else{
            $("#telefono_sucursal_sigesco").css(  "border-color","red" );
            $("#telefono_sucursal_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Teléfono'</strong> por favor.", "Teléfono")
        }
        
        }else{
            $("#direccion_sucursal_sigesco").css(  "border-color","red" );
            $("#direccion_sucursal_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Dirección'</strong> por favor.", "Dirección")
        }
        }else{
            $("#nombre_sucursal_sigesco").css(  "border-color","red" );
            $("#nombre_sucursal_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre de la Sucursal'</strong> por favor.", "Nombre Sucursal")
        }
    }
</script>