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
                  <h1>Crear Sucursal </h1>

                  <ol class="breadcrumb">
                    <li><a href="#">Empresa</a></li>
                    <li class="active">Crear Sucursal</li>
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
                      <label><span>*</span>Nombre de la Sucursal</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input id="nombre_sucursal_sigesco" name="nombre_sucursal_sigesco" class="form-control" type="text" placeholder="Ingrese Nombre de la Sucursal">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                  
                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Dirección de la Sucursal</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                      <input id="direccion_sucursal_sigesco" name="direccion_sucursal_sigesco" class="form-control" type="text" placeholder="Ingrese Dirección de la Sucursal">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Teléfono de la Sucursal</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                      <input id="telefono_sucursal_sigesco" name="telefono_sucursal_sigesco" class="form-control" type="text" placeholder="Ingrese Teléfono de la Sucursal">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                
                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Email de la Sucursal</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                      <input id="email_sucursal_sigesco" name="email_sucursal_sigesco" class="form-control" type="text" placeholder="Ingrese Teléfono de la Sucursal">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                
                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Ciudad de la Sucursal</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                        <input id="ciudad_sucursal_sigesco" name="ciudad_sucursal_sigesco" class="form-control" type="text" style="display:none">
                        <input  id="ciudad_buscar_sigesco_laboral"  name="ciudad_buscar_sigesco_laboral" type="text" class="form-control" placeholder="Ej: Copiapó">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="save-cancel-button" style="text-align: center;">
                  <a onClick="crear_sucursal()" class="btn btn-success"><i class="fa fa-cube" aria-hidden="true"></i> Crear</a>
                  <a href="<?=base_url()?>empresa" class="btn btn-black"><i class="fa fa-close" aria-hidden="true"></i>Cancel</a>
                </div> <!-- end .save-cancel-button -->

              </form>
            </div>
          </div> <!-- end .page-content -->
    </div>
</div> <!-- end #page-content -->

<script>
$( document ).ready(function() { 

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
                    url: '<?=base_url()?>empresa/crear_sucursal_empresa_contratista',
                    data: $('#form_crear_sucursal').serialize(),
                    success: function(data){
                        if(data == true){
                            Command: toastr["success"]("Sucursal <strong>Creada</strong> Correctamente.", "Sucursal Creada");
                            $("#nombre_sucursal_sigesco").val('');
                            $("#direccion_sucursal_sigesco").val('');
                            $("#telefono_sucursal_sigesco").val('');
                            $("#email_sucursal_sigesco").val('');
                            $("#ciudad_buscar_sigesco_laboral").val('');
                            //setTimeout(function(){redireccionarPagina('<?=base_url()?>producto/crear');}, 4000);

                        }else{
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
