<style>
    #modal_registro, #modal_registro_extranjero {
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
    
    .header-search-bar .hsb-input-1 {
        width: 60%;
    }
    
    .header-search-bar .hsb-container {
        width: 27%;
    }
    
    @media screen and (max-width: 600px) and (min-width: 300px) {
      
        .col-xs-12{
            padding: 10px;
            margin-left: 5%;
            width:90%;
        }
        
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
                    <div class="row">
                    <form id="form_busqueda" action="<?=base_url()?>busqueda/trabajadores"  method="post">
                        <div class="col-lg-5 col-xs-12">
                              <input id="palabra_busqueda" name="palabra_busqueda" type="text" class="form-control" placeholder="Palabras de Búsqueda">
                        </div>
                        <div class="col-lg-5 col-xs-12">
                            <input  id="ciudad_busqueda"  name="ciudad_busqueda" type="text" class="form-control" placeholder="Ej: Copiapó">
                            <input  id="ciudad_busqueda_id"  name="ciudad_busqueda_id" type="text" class="form-control" style="display:none" placeholder="Ej: Copiapó">
                        </div>
                        <div class="col-lg-2 col-xs-12">
                            <button onClick="enviar_formulario()" type="button" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Buscar</span></button>
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
        
        $("#ciudad_busqueda").typeahead({
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
        
        $("#ciudad_busqueda").change(function() {
          var current = $("#ciudad_busqueda").typeahead("getActive");
          if (current) {
            // Some item from your model is active!
            if (current.name == $("#ciudad_busqueda").val()) {
                $("#ciudad_busqueda_id").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
            // Nothing is active so it is a new value (or maybe empty value)
          }
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
                    Command: toastr["error"]("El <strong>'RUN'</strong> ingresado es Incorrecto.", "RUN")
            },
            on_success: function(){ $( "#run_sigesco_laboral" ).css( "border-color","#ccc" );}
        });
        
    });
    
    function enviar_formulario(){
        
        /*Inicio Palabra de Busqueda */   if(($("#palabra_busqueda").val() != '')){
                                    $( "#palabra_busqueda" ).css( "border-color","#ccc" );
        /*Inicio Palabra de Busqueda */   if(($("#ciudad_busqueda").val() != '')){
                                    $( "#ciudad_busqueda" ).css( "border-color","#ccc" );
            
            $( "#form_busqueda" ).submit();
            
        /* Fin Palabra de Busqueda */   }else{
                            $( "#ciudad_busqueda" ).css(  "border-color","red" );
                            $( "#ciudad_busqueda" ).focus();
                            Command: toastr["error"]("Ingrese la ciudad donde <strong>'Buscará'</strong> por favor.", "Ciudad donde Buscar")
                        }
            
            
        /* Fin Palabra de Busqueda */   }else{
                            $( "#palabra_busqueda" ).css(  "border-color","red" );
                            $( "#palabra_busqueda" ).focus();
                            Command: toastr["error"]("Ingresa alguna palabra para <strong>'Buscar'</strong> por favor.", "Palabra de Busqueda")
                        }
    }          
    
</script>