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
                        <table id="tabla_listas_ejecutivo" class="table table-bordered hover" style="width:100%">
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
                                    foreach($listas as $lista){
                                        
                                ?>
                                    <tr style="cursor:pointer" onmouseover="this.style.backgroundColor='#66ABE2',this.style.color= 'white'"  onmouseout="this.style.backgroundColor='transparent',this.style.color= 'black'" id="trabajador_<?=$lista->id_lista_ejecutivo?>" style ="cursor:pointer;" onclick="enviar_lista(<?=$lista->id_lista_ejecutivo?>)">
                                        <td><?=$lista->nombre_lista_ejecutivo?></td>
                                        <td><?=$lista->descripcion_lista_ejecutivo?></td>
                                        <td><?=$lista->fecha?></td>
                                        <td><a style="text-align:center;" onClick="eliminar_tipo_documento('<?=$lista->id_lista_ejecutivo?>')"><i class="fa fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
                                        <form action="<?=base_url()?>ejecutivo/lista_trabajadores" method="post" id="form_lista_<?=$lista->id_lista_ejecutivo?>"></form>
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

<!-- Inicio Modal Agregar -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Lista</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nombre_lista" name="nombre_lista" placeholder="Ingrese título para Lista">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <textarea rows="7" cols="50" id="descripcion_lista" name="descripcion_lista" placeholder="Ingrese descripción de la Lista"></textarea>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="crear_lista_ejecutivo" type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Agregar -->

<script>
$( document ).ready(function() { 
        
    $('#tabla_listas_ejecutivo').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Trabajadores",
            "zeroRecords": "Nothing found - sorry",
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
    
    $("#botones_tabla").append('<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_agregar">Agregar Lista</button>');
    $("#tabla_listas_ejecutivo_filter").css("width","100%");
    $("#tabla_listas_ejecutivo_filter label").css("width","100%");
    $("#tabla_listas_ejecutivo_filter label input").css("width","100%");
    $("#tabla_listas_ejecutivo_info").css("width","45%");
    $("#tabla_listas_ejecutivo_paginate").css("width","100%");
    
    $( "#crear_lista_ejecutivo" ).click(function() {
        /*Inicio Nombre */  if($("#nombre_lista").val() != ''){
                            $( "#nombre_lista" ).css( "border-color","#ccc" );
            
        /*Inicio Descripcion */  if($("#descripcion_lista").val() != ''){
                            $( "#descripcion_lista" ).css( "border-color","#ccc" );
            
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>ejecutivo/agregar_lista_ejecutivo',
                data: {
                    nombre_lista: $("#nombre_lista").val(), descripcion_lista:$("#descripcion_lista").val()}, 
                success: function(data){
                    if(data != false){
                            var datos = JSON.parse(data);
                            $('#tabla_listas_ejecutivo').DataTable().row.add( [
                                datos[0],
                                datos[1],
                                datos[2],
                                '<a style="text-align:center;" onClick="eliminar_tipo_documento('+datos[4]+')"><i class="fa fa fa-trash fa-2x" aria-hidden="true"></i></a>'
                            ] ).draw( false );
                        
                            $("#nombre_lista").val('');
                            $("#descripcion_lista").val('');

                            Command: toastr["success"]("Se ingreso Correctamente la Lista.", "Lista de Trabajadores");
                            $("[data-dismiss=modal]").trigger({ type: "click" });                   
                                            
                        }else{
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")    
                        }
                }
            });
            
        /* Fin Descripcion */   }else{
                            $( "#descripcion_lista" ).css(  "border-color","red" );
                            $( "#descripcion_lista" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de la Lista'</strong> por favor.", "Descripción Lista")
                        }
            
        /* Fin Nombre */   }else{
                            $( "#nombre_lista" ).css(  "border-color","red" );
                            $( "#nombre_lista" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Título tipo Documento'</strong> por favor.", "Nombre Lista")
                        }
    });
    
    
});
    
    function enviar_lista(id){
        $("#form_lista_"+id).append('<input id="id_lista" name="id_lista"  type="text" value="'+id+'" style="display:none">');
        $("#form_lista_"+id).submit();
    }
    
    
    
</script>