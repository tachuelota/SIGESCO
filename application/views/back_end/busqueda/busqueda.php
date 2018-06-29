<style>
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
    
    .dropdown-menu {
        
        margin-left :0;
        margin-top: 0;
            
    }

</style> 
<div id="page-content" class="candidate-profile">
        <div class="container">
            <div class="search-holder" style="margin-top:6%;margin-bottom:6%">
              <h1 style="font-size:40px">Sistema de Gestion de Contratación</h1>
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
      </div> <!-- end #page-content -->

<script>
$( document ).ready(function() { 

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