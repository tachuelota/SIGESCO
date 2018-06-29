<style>
    input[type="search"] {
        height:30px;
        width: 100%;
    }
    
    .input-sm{
        width: 100%;
    }
    .separar{
        margin-bottom: 15px;
    }
    
    .fa{
        color:#2a6496;
    }
    
    
    .fa:hover{
       text-shadow: 1px 1px 1px white;
    }
    
    #modal_privilegios  {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:70%;
        }
    
    .fa{
        color:white;
    }
    
    
</style>

<div id="page-content" class="candidate-profile">
    <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="title-overlay"></div>
        <div class="container">
          <div class="title-breadcrumb clearfix">
            <h1>Lista de Personal</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>empresa">Inicio</a></li>
              <li class="active">Personal/Lista de Personal</li>
            </ol>
          </div> <!-- end .title-breadcrumb -->
        </div> <!-- end .container -->
      </div> <!-- end .header-nav-bar -->
    <div class="container" style="width:100%">
        <a id="download_file" href="#" download></a>
        <div id="candidate-profile" style="padding:0px;">
            <div class="row">
                  <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <table id="tabla_lista_personal" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo Trabajador</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($trabajador_personal as $personal){
                                    
                                    $ACCIONES = '<a onclick="modal_privilegios_trabajador('.$personal->id_ejecutivo_empresa_contratista.')" title="Privilegios"><i style="color:#346abb; cursor:pointer" class="fa fa-cogs fa-2x" aria-hidden="true"></i></a>';
                                ?>
                                    <tr style="cursor:pointer" onmouseover="this.style.backgroundColor='#66ABE2',this.style.color= 'white'"  onmouseout="this.style.backgroundColor='transparent',this.style.color= 'black'" id="trabajador_" style ="cursor:pointer;">
                                        <td><?=$personal->nombre_ejecutivo_empresa_contratista." ".$personal->paterno_ejecutivo_empresa_contratista." ".$personal->materno_ejecutivo_empresa_contratista?></td>
                                        <td><?=$personal->nombre_tipo_ejecutivo_ec?></td>
                                        <td><?=$personal->estado?></td>
                                        <td align="center"><?=$ACCIONES?></td>
                                    </tr>
                                
                                <?php
                                    }
                                ?>  
                                </tbody>
                        </table>
                    </div> <!-- end .candidate-description -->
                  </div> <!-- end .9col grid layout -->
                <script>
                    if(($( window ).width()) > 480){
                        $(".datos_candidato").css('min-height',($('.motijob-sidebar').height()+40));
                        $(".datos_candidato").css('max-height',($('.motijob-sidebar').height()+40));
                        $(".tab-content").css('height','840');
                        $(".tab-content").css('overflow-y','scroll');
                        $(".tab-content").css('overflow-x','hidden');                            
                   }else{
                        $("h3").css('font-size','16px');
                   }
                </script>
            </div> <!-- end .row -->
        </div> <!-- end .tabe pane -->
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

<!-- INICIO MODAL PRIVILEGIO -->
<div id="modal_privilegios" class="modal fade">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Privilegios : Modulos y Submodulos</h4>
            </div>
            <div id="interior_privilegios" class="modal-body">
                
                
                
            </div>
          <div class="modal-footer">
            <button id="boton_modificar_trabajador_laboral" style="color:white;" type="button" class="btn btn-success"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL PRIVILEGIO -->
<script>
$( document ).ready(function() { 
        
    $('#tabla_lista_personal').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Trabajadores",
            "zeroRecords": "Sin Resultados - Lo Siento",
            "info": "Mostrando _PAGE_ Página de _PAGES_",
            "infoEmpty": "Sin trabajadores",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search":"",
            "paginate": {
                "previous": "Anterior",
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente"
            }
        },

    });
    
    //$("#botones_tabla").append('<button onClick="descargar_documentacion()" type="button" class="btn btn-success">Descargar</button>');
    $("#tabla_lista_personal_filter").css("width","100%");
    $("#tabla_lista_personal_filter label").css("width","100%");
    $("#tabla_lista_personal_filter label input").css("width","100%");
    $("#tabla_lista_personal_info").css("width","45%");
    $("#tabla_lista_personal_paginate").css("width","100%");
    

    
});
   function modal_privilegios_trabajador(id){
       
       $('#modal_privilegios').modal('show');
        $.ajax({
                type: 'POST',
                url: '<?=base_url()?>personal/lista_privilegios',
                data: {id_trabajador : id}, 
                success: function(data){
                    if(data != false){
                        $("#interior_privilegios" ).empty();
                        var datos = JSON.parse(data);
                        var div_modulo = '';
                        var i = 1;
                        $.each(datos, function( index ) {
                            var modulo_activo = '';
                            if(datos[index].valido == 'SI'){modulo_activo = "checked";}
                            if(i == 1){ div_modulo +='<div class="row">';}
                            div_modulo += '<div class="col-md-4"><div class="accordion-content"><div class="clearfix"><div class="toggle pull-left" style="width:100%"><a data-toggle="collapse" href="#collapse'+index+'">';
                            div_modulo +=datos[index].modulo;
                            div_modulo +='</a><input id="modulo_'+datos[index].id_modulo+'" onClick="check_modulo('+datos[index].id_modulo+','+id+')" style="float:right" type="checkbox" id="cbox1" value="" '+modulo_activo+'></div></div>';
                            var submodulos = [];
                            submodulos = datos[index].submodulos;
                            div_modulo += '<div style="margin-top:5%" id="collapse'+index+'" class="collapse"><div class="checkbox-content"><div class="row">';
                            $.each(submodulos, function( index ) {
                                var submodulo_activo = '';
                                if(submodulos[index].valido == 'SI'){submodulo_activo = "checked";}
                                div_modulo += '<div class="col-md-12"><span class="checkbox-single"><input id="part-time" type="checkbox" name="contract-type" '+submodulo_activo+'><label for="part-time">'+submodulos[index].nombre+'</label></span></div>';
                            });
                            div_modulo += '</div></div></div></div></div>';
                            if(i == 3){div_modulo+='</div>';  i=1;}else{i++;}
                            
                        });
                        $("#interior_privilegios" ).append(div_modulo);
                    }else{
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                    }
                }
            });
        
   }
    
    function check_modulo(id_modulo,id_trabajador){

        
        if( $('#modulo_'+id_modulo).prop('checked') ) {
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>personal/agregar_modulo',
                data: {id_modulo : id_modulo,id_trabajador : id_trabajador}, 
                success: function(data){
                }
            });
        }else{
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>personal/eliminar_modulo',
                data: {id_modulo : id_modulo,id_trabajador : id_trabajador}, 
                success: function(data){
                }
            });
        }
    }
    
</script>