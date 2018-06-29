<style>
    a{
        cursor: pointer;
    }
    
    .btn-circle.btn-lg {
      width: 40px;
      height: 40px;
      padding: 0px 14px;
      font-size: 18px;
      line-height: 1.33;
      border-radius: 25px;
      margin-bottom: 10px;
      margin-top: 10px;
    }
    
    .dropdown-menu {
        
        margin-left :0;
        margin-top: 0;
            
    }
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title job-registration clearfix" style="background:url('http://www.sigesco.cl/img/ingreso_bodega.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="title-overlay"></div>
                <div class="container">
                  <h1>Crear Faena Minera</h1>

                  <ol class="breadcrumb">
                    <li><a href="#">Empresa</a></li>
                    <li class="active">Crear Faena Minera</li>
                  </ol>

                </div> <!-- end .container -->

    </div> <!-- end .header-page-title -->    
    <div class="container">
        <div class="page-content">
            <div class="table-responsive">
              <form id="form_crear_sucursal" class="default-form">
                <!-- start main form content -->
                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Nombre Faena Minera</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                      <input id="nombre_faena_minera_sigesco" name="nombre_faena_minera_sigesco" class="form-control" type="text" placeholder="Ingrese Nombre de la Faena Minera.">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Empresa Mandante</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                        <div class="row">
                            <div class="col-md-11">
                                <select id="mandante_faena_minera_sigesco" name="mandante_faena_minera_sigesco">
                                        <option name='inicio_option' value="0" readonly>Seleccione Empresa Mandante</option>
                                    <?php
                                            foreach($mandantes as $mandante){
                                    ?>
                                        <option value="<?=$mandante->id_empresa_mandante?>"><?=$mandante->nombre_corto_empresa_mandante?></option>
                                    <?php   } ?>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="button" data-toggle="modal" data-target="#modal_crear_empresa_mandante" class="btn btn-success btn-circle btn-lg"><i class="fa fa-plus fa-4x"></i></button>
                            </div>
                        </div>
                        
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="save-cancel-button" style="text-align: center;">
                  <a onClick="crear_faena_minera()" class="btn btn-success"><i class="fa fa-cube" aria-hidden="true"></i> Crear</a>
                  <a href="<?=base_url()?>empresa" class="btn btn-black"><i class="fa fa-close" aria-hidden="true"></i>Cancel</a>
                </div> <!-- end .save-cancel-button -->

              </form>
            </div>
          </div> <!-- end .page-content -->
    </div>
</div> <!-- end #page-content -->

<!-- Inicio Modal Crear Empresa Mandante -->
<div class="modal fade" id="modal_crear_empresa_mandante" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Nueva Empresa Mandante</h4>
      </div>
      <div class="modal-body">
          <form id="form_crear_empresa_mandante" class="default-form">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="nombre_empresa_mandante_sigesco" name="nombre_empresa_mandante_sigesco" placeholder="Ingrese Nombre de la Empresa Mandante. (Ej: Compañia Contractual Minera Candelaria)">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="nombre_corto_empresa_mandante_sigesco" name="nombre_corto_empresa_mandante_sigesco" placeholder="Ingrese Nombre Corto de la Empresa Mandante. (Ej: Candelaria)">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="rut_empresa_mandante_sigesco" name="rut_empresa_mandante_sigesco" placeholder="Ingrese RUT para Empresa Mandante">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="direccion_empresa_mandante_sigesco" name="direccion_empresa_mandante_sigesco" placeholder="Ingrese Dirección para Empresa Mandante">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="telefono_empresa_mandante_sigesco" name="telefono_empresa_mandante_sigesco" placeholder="Ingrese Teléfono para Empresa Mandante">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input onchange="validar_email(this.id)" type="email" class="form-control" id="email_empresa_mandante_sigesco" name="email_empresa_mandante_sigesco" placeholder="Ingrese Email para Empresa Mandante">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input id="ciudad_empresa_mandante_sigesco" name="ciudad_empresa_mandante_sigesco" class="form-control" type="text" style="display:none">
                        <input type="text" class="form-control" id="ciudad_buscar_sigesco_laboral" name="ciudad_buscar_sigesco_laboral" placeholder="Ingrese Ciudad para Empresa Mandante">
                    </div>
                    
                </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button onclick="crear_empresa_mandante()" type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Crear Empresa Mandante -->
<script>
$( document ).ready(function() { 
    
    $('#rut_empresa_mandante_sigesco').Rut({
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
                    $( "#rut_empresa_mandante_sigesco" ).css(  "border-color","red" );
                    $( "#rut_empresa_mandante_sigesco" ).focus();
                    $( "#rut_empresa_mandante_sigesco" ).val("");
                    Command: toastr["error"]("El <strong>'RUT'</strong> ingresado es Incorrecto.", "RUT")
            },
            on_success: function(){ $( "#rut_empresa_mandante_sigesco" ).css( "border-color","#ccc" );}
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
                $("#ciudad_empresa_mandante_sigesco").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
                $("#ciudad_buscar_sigesco_laboral").val('');
                $("#ciudad_empresa_mandante_sigesco").val('');
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
             // $("#ciudad_buscar_sigesco_laboral").val('');
            //  $("#ciudad_empresa_mandante_sigesco").val('');
            // Nothing is active so it is a new value (or maybe empty value)
          }
    });

     $('#telefono_empresa_mandante_sigesco').mask("(00) 00000000", {placeholder: "EJ : (09) XXXXXXXX o (Cod. Área) 2XXXXXX"});
});
    
    
    function crear_faena_minera(){
        if($("#nombre_faena_minera_sigesco").val().length > 0){
            $("#nombre_faena_minera_sigesco").css( "border-color","#ccc" );
        if($("#input_mandante_faena_minera_sigesco").val().length > 0){
            $("#input_mandante_faena_minera_sigesco").css( "border-color","#ccc" );
        
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>empresa/crear_faena_minera',
                    data: {nombre_faena_minera_sigesco: $("#nombre_faena_minera_sigesco").val(),mandante_faena_minera_bodega: $("#input_mandante_faena_minera_sigesco").attr('valor')},
                    success: function(data){
                        if(data != false){
                            Command: toastr["success"]("Faena Minera <strong>Creada</strong> Correctamente.", "Faena Minera Creada");
                            $("#nombre_faena_minera_sigesco").val('');
                            $("#input_mandante_faena_minera_sigesco").val('');
                            //setTimeout(function(){redireccionarPagina('<?=base_url()?>producto/crear');}, 4000);

                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                });    
        
        
        }else{
            $("#input_mandante_faena_minera_sigesco").css(  "border-color","red" );
            $("#input_mandante_faena_minera_sigesco").focus();
            Command: toastr["error"]("Seleccione el campo <strong>'Empresa Mandante'</strong> por favor.", "Empresa Mandante")
        }    
        }else{
            $("#nombre_faena_minera_sigesco").css(  "border-color","red" );
            $("#nombre_faena_minera_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre de la Faena Minera'</strong> por favor.", "Nombre Faena Minera")
        }
    }
    
    function crear_empresa_mandante(){
        if($("#nombre_empresa_mandante_sigesco").val().length > 0){
            $("#nombre_empresa_mandante_sigesco").css( "border-color","#ccc" );
        if($("#nombre_corto_empresa_mandante_sigesco").val().length > 0){
            $("#nombre_corto_empresa_mandante_sigesco").css( "border-color","#ccc" );
        if($("#rut_empresa_mandante_sigesco").val().length > 0){
            $("#rut_empresa_mandante_sigesco").css( "border-color","#ccc" );
        if($("#direccion_empresa_mandante_sigesco").val().length > 0){
            $("#direccion_empresa_mandante_sigesco").css( "border-color","#ccc" );
        if($("#telefono_empresa_mandante_sigesco").val().length > 0){
            $("#telefono_empresa_mandante_sigesco").css( "border-color","#ccc" );
        if($("#email_empresa_mandante_sigesco").val().length > 0){
            $("#email_empresa_mandante_sigesco").css( "border-color","#ccc" );
        if($("#ciudad_buscar_sigesco_laboral").val().length > 0){
            $("#ciudad_buscar_sigesco_laboral").css( "border-color","#ccc" );

        
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>empresa/crear_empresa_mandante',
                    data: $('#form_crear_empresa_mandante').serialize(),
                    success: function(data){
                        if(data != false){
                            
                            Command: toastr["success"]("Empresa Mandante <strong>Creada</strong> Correctamente.", "Empresa Mandante Creada");
                            $("#select_mandante_faena_minera_sigesco").append('<li data-value="'+data+'">'+$("#nombre_corto_empresa_mandante_sigesco").val()+'</li>');
                            $("#input_mandante_faena_minera_sigesco").val($("#nombre_corto_empresa_mandante_sigesco").val());
                            $("#input_mandante_faena_minera_sigesco").attr('valor',data);
                            $("#nombre_empresa_mandante_sigesco").val('');
                            $("#direccion_empresa_mandante_sigesco").val('');
                            $("#rut_empresa_mandante_sigesco").val('');
                            $("#nombre_corto_empresa_mandante_sigesco").val('');
                            $("#telefono_empresa_mandante_sigesco").val('');
                            $("#email_empresa_mandante_sigesco").val('');
                            $("#ciudad_buscar_sigesco_laboral").val('');
                            
                            $("[data-dismiss=modal]").trigger({ type: "click" });

                        }else{
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                });    
        
        
        }else{
            $("#ciudad_buscar_sigesco_laboral").css(  "border-color","red" );
            $("#ciudad_buscar_sigesco_laboral").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
        }    
        
        }else{
            $("#email_empresa_mandante_sigesco").css(  "border-color","red" );
            $("#email_empresa_mandante_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
        }
        
        }else{
            $("#telefono_empresa_mandante_sigesco").css(  "border-color","red" );
            $("#telefono_empresa_mandante_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Teléfono'</strong> por favor.", "Teléfono")
        }
        
        }else{
            $("#direccion_empresa_mandante_sigesco").css(  "border-color","red" );
            $("#direccion_empresa_mandante_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Dirección'</strong> por favor.", "Dirección")
        }
        }else{
            $("#rut_empresa_mandante_sigesco").css(  "border-color","red" );
            $("#rut_empresa_mandante_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'RUT'</strong> por favor.", "RUT")
        }
        }else{
            $("#nombre_corto_empresa_mandante_sigesco").css(  "border-color","red" );
            $("#nombre_corto_empresa_mandante_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
        } 
        }else{
            $("#nombre_empresa_mandante_sigesco").css(  "border-color","red" );
            $("#nombre_empresa_mandante_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre de la Empresa Mandante'</strong> por favor.", "Nombre Empresa Mandante")
        }
    }

     
    
</script>
