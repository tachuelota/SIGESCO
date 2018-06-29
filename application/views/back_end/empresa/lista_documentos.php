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
    
    
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="title-overlay"></div>
        <div class="container">
          <div class="title-breadcrumb clearfix">
            <h1>Listas</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>empresa">Inicio</a></li>
              <li class="active">Listas</li>
            </ol>
          </div> <!-- end .title-breadcrumb -->
        </div> <!-- end .container -->
      </div> <!-- end .header-nav-bar -->
    <div class="container" style="width:100%">
        <div id="candidate-profile" style="padding:0px;">
            <div class="row">
                  <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <table id="tabla_listas_documentos" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Fecha Creación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    foreach($documentos as $documento){
                                        
                                ?>
                                
                                    <tr style="cursor:pointer" onmouseover="this.style.backgroundColor='#66ABE2',this.style.color= 'white'"  onmouseout="this.style.backgroundColor='transparent',this.style.color= 'black'" id="trabajador_<?=$documento->id_empresa_contratista_documentacion?>" style ="cursor:pointer;">
                                        <td><?=$documento->nombre_empresa_contratista_documentacion?></td>
                                        <td><?=$documento->decripcion_empresa_contratista_documentacion?></td>
                                        <td><?=$documento->fecha?></td>
                                        <td><a style="text-align:center;" onClick="eliminar_tipo_documento('<?=$documento->id_empresa_contratista_documentacion?>')"><i class="fa fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
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

<script>
$( document ).ready(function() { 
        
    $('#tabla_listas_documentos').DataTable({
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
        }
    });
    
    $("#botones_tabla").append('<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_agregar_tipo_documento">Agregar Tipo Documento</button>');
    $("#tabla_listas_documentos_filter").css("width","100%");
    $("#tabla_listas_documentos_filter label").css("width","100%");
    $("#tabla_listas_documentos_filter label input").css("width","100%");
    $("#tabla_listas_documentos_info").css("width","45%");
    $("#tabla_listas_documentos_paginate").css("width","100%");
    
    $( "#crear_tipo_documentacion" ).click(function() {
        /*Inicio Nombre */  if($("#titulo_documento_trabajador").val() != ''){
                            $( "#titulo_documento_trabajador" ).css( "border-color","#ccc" );
            
        /*Inicio Descripcion */  if($("#descripcion_documento_trabajador").val() != ''){
                            $( "#descripcion_documento_trabajador" ).css( "border-color","#ccc" );
            
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>empresa/agregar_tipo_documento_empresa',
                data: {
                    titulo_documento_trabajador: $("#titulo_documento_trabajador").val(), descripcion_documento_trabajador:$("#descripcion_documento_trabajador").val()}, 
                success: function(data){
                    if(data != false){
                           var datos = JSON.parse(data);
                            $('#tabla_listas_documentos').DataTable().row.add( [
                                datos[0],
                                datos[1],
                                datos[2],
                                '<a style="text-align:center;" onClick="eliminar_tipo_documento('+datos[4]+')"><i class="fa fa fa-trash fa-2x" aria-hidden="true"></i></a>'
                            ] ).draw( false );
                        
                            $("#titulo_documento_trabajador").val('');
                            $("#descripcion_documento_trabajador").val('');

                            Command: toastr["success"]("Se ingreso Correctamente el Tipo Documentación.", "Agregada Tipo Documentación");
                            $("[data-dismiss=modal]").trigger({ type: "click" });                   
                                            
                        }else{
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")    
                        }
                }
            });
            
        /* Fin Descripcion */   }else{
                            $( "#descripcion_documento_trabajador" ).css(  "border-color","red" );
                            $( "#descripcion_documento_trabajador" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de la Lista'</strong> por favor.", "Descripción Lista")
                        }
            
        /* Fin Nombre */   }else{
                            $( "#titulo_documento_trabajador" ).css(  "border-color","red" );
                            $( "#titulo_documento_trabajador" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Título tipo Documento'</strong> por favor.", "Nombre Lista")
                        }
    });
    
});
</script>