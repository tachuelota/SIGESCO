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
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title job-registration clearfix" style="background:url('http://www.sigesco.cl/img/ingreso_bodega.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="title-overlay"></div>
                <div class="container">
                  <h1>Crear Artículos </h1>

                  <ol class="breadcrumb">
                    <li><a href="#">Artículo</a></li>
                    <li class="active">Crear</li>
                  </ol>

                </div> <!-- end .container -->

    </div> <!-- end .header-page-title -->    
    <div class="container">
        <div class="page-content">
            <div class="table-responsive">

              <form id="form_crear_producto" class="default-form">
                <!-- start main form content -->
                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Nombre del Artículo</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <input id="nombre_producto_sigesco" name="nombre_producto_sigesco" class="form-control" type="text" placeholder="Ingrese Nombre del Artículo">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                  
                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label>Descripción del Artículo</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                      <textarea id="descripcion_producto_sigesco" name="descripcion_producto_sigesco" name="description" placeholder="Ingrese una breve descripción del Artículo"></textarea>
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Unidad de Medida del Artículo</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                      <input id="medida_producto_sigesco" name="medida_producto_sigesco" type="text" placeholder="Ingrese Unidad de Medida del Artículo. EJ: Unidad, Mensual, Par, Galón, Etc">
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                  
                <div class="job-regi-single">
                  <div class="css-table">
                    <div class="css-table-cell">
                      <label><span>*</span>Marca / Modelo</label>
                    </div>
                    <div class="registration-detail css-table-cell">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="marca_producto_sigesco" name="marca_producto_sigesco" type="text" placeholder="Ingrese Marca del Artículo.">
                            </div>
                            <div class="col-md-6">
                                <input id="modelo_producto_sigesco" name="modelo_producto_sigesco" type="text" placeholder="Ingrese Marca del Artículo">
                            </div>

                        </div>
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->
                
                <div class="job-regi-single">
                  <div class="css-table">

                    <div class="css-table-cell">
                      <label><span>*</span>Subcategoria del Artículo</label>
                    </div>

                    <div class="registration-detail css-table-cell">
                        <div class="row">
                            <div class="col-md-11">
                                <select id="subcategoria_producto_bodega" name="subcategoria_producto_bodega">
                                        <option name='inicio_option' value="0" readonly>Seleccione Subcategoria</option>
                                    <?php
                                            foreach($subcategorias as $subcategoria){
                                    ?>
                                        <option value="<?=$subcategoria->id_subcategoria_producto?>"><?=$subcategoria->nombre_subcategoria_producto?></option>
                                    <?php   } ?>

                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="button" data-toggle="modal" data-target="#modal_crear_subcategoria" class="btn btn-success btn-circle btn-lg"><i class="fa fa-plus fa-4x"></i></button>
                            </div>
                        </div>
                        
                    </div> <!-- end .registration-detail -->
                  </div> <!-- end .css-table -->
                </div> <!-- end .job-regi-single -->

                <div class="save-cancel-button" style="text-align: center;">
                  <a onClick="crear_producto()" class="btn btn-success"><i class="fa fa-cube" aria-hidden="true"></i> Crear</a>
                  <a href="<?=base_url()?>empresa" class="btn btn-black"><i class="fa fa-close" aria-hidden="true"></i>Cancel</a>
                </div> <!-- end .save-cancel-button -->

              </form>
            </div>
          </div> <!-- end .page-content -->
    </div>
</div> <!-- end #page-content -->

<!-- Inicio Modal Crear Subcategoria -->
<div class="modal fade" id="modal_crear_subcategoria" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Nueva Subcategoria</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nombre_subcategoria_sigesco" name="nombre_subcategoria_sigesco" placeholder="Ingrese Nombre para Subcategoria">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <textarea rows="5" cols="50" id="descripcion_subcategoria_sigesco" name="descripcion_subcategoria_sigesco" placeholder="Ingrese descripción para Subcategoria"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <select id="categoria_producto_bodega" name="categoria_producto_bodega">
                                <option name='inicio_option' value="0" readonly>Seleccione Categoria</option>
                                    <?php
                                        foreach($categorias as $categoria){
                                    ?>
                                    <option value="<?=$categoria->id_categoria_producto?>"><?=$categoria->nombre_categoria_producto?></option>
                                    <?php   } ?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button onclick="crear_subcategoria()" type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Crear Subcategoria -->

<script>
    function crear_producto(){
         if($("#nombre_producto_sigesco").val().length > 0){
            $("#nombre_producto_sigesco").css( "border-color","#ccc" );
        if($("#medida_producto_sigesco").val().length > 0){
            $("#medida_producto_sigesco").css( "border-color","#ccc" );
        if($("#input_subcategoria_producto_bodega").val().length > 0){
            $("#input_subcategoria_producto_bodega").css( "border-color","#ccc" );
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>producto/crear_producto',
                    data: {nombre_producto_sigesco: $("#nombre_producto_sigesco").val(),
                           descripcion_producto_sigesco: $("#descripcion_producto_sigesco").val(),
                           medida_producto_sigesco: $("#medida_producto_sigesco").val(),
                           marca_producto_sigesco: $("#marca_producto_sigesco").val(),
                           modelo_producto_sigesco: $("#modelo_producto_sigesco").val(),
                           subcategoria_producto_bodega: $("#input_subcategoria_producto_bodega").attr('valor')
                          },
                    success: function(data){
                        if(data == true){
                            Command: toastr["success"]("Artículo <strong>Creado</strong> Correctamente.", "Artículo Creado");
                            $("#nombre_producto_sigesco").val('');
                            $("#descripcion_producto_sigesco").val('');
                            $("#medida_producto_sigesco").val('');
                            $("#input_subcategoria_producto_bodega").val('');
                            
                            //setTimeout(function(){redireccionarPagina('<?=base_url()?>producto/crear');}, 4000);

                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                }); 
        
        }else{
            $("#input_subcategoria_producto_bodega").css(  "border-color","red" );
            $("#input_subcategoria_producto_bodega").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Subcategoria'</strong> por favor.", "Subcategoria")
        }    
        
        
        }else{
            $("#medida_producto_sigesco").css(  "border-color","red" );
            $("#medida_producto_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Unidad de Medidad'</strong> por favor.", "Unidad de Medidad")
        }
        
        }else{
            $("#nombre_producto_sigesco").css(  "border-color","red" );
            $("#nombre_producto_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
        }
    }
    
    function crear_subcategoria(){
         if($("#nombre_subcategoria_sigesco").val().length > 0){
            $("#nombre_subcategoria_sigesco").css( "border-color","#ccc" );
        if($("#descripcion_subcategoria_sigesco").val().length > 0){
            $("#descripcion_subcategoria_sigesco").css( "border-color","#ccc" );
        if($("#input_categoria_producto_bodega").val().length > 0){
            $("#input_categoria_producto_bodega").css( "border-color","#ccc" );
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>producto/crear_subcategoria',
                    data: {nombre_subcategoria :$("#nombre_subcategoria_sigesco").val(),descripcion_subcategoria :$("#descripcion_subcategoria_sigesco").val(),id_categoria : $("#input_categoria_producto_bodega").attr("valor")},
                    success: function(data){
                        
                        if(data != false){
                            var datos = JSON.parse(data);
                            Command: toastr["success"]("Subcategoria <strong>Creada</strong> Correctamente.", "Subcategoria Creada");
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            $(".select-clone").append('<li data-value="'+datos[2]+'">'+datos[1]+'</li>');
                            $("#input_subcategoria_producto_bodega").val(datos[1]);
                            $("#input_subcategoria_producto_bodega").attr('valor',datos[2]);
                            $("#nombre_subcategoria_sigesco").val('');
                            $("#descripcion_subcategoria_sigesco").val('');
                            $("#input_categoria_producto_bodega").val('');

                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                        }
                    }
                });
        
        }else{
            $("#input_categoria_producto_bodega").css(  "border-color","red" );
            $("#input_categoria_producto_bodega").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Categoria'</strong> por favor.", "Categoria")
        }    

        
        }else{
            $("#descripcion_subcategoria_sigesco").css(  "border-color","red" );
            $("#descripcion_subcategoria_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de Subcategoria'</strong> por favor.", "Descripción Subcategoria")
        }
        }else{
            $("#nombre_subcategoria_sigesco").css(  "border-color","red" );
            $("#nombre_subcategoria_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre de Subcategoria'</strong> por favor.", "Nombre Subcategoria")
        }
    }
</script>
