<style>    
input[type="file"]#mi_archivo {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 display: none;
 }
    
input[type="text"]{
 height: 35px;   
}
    
input[type="password"]{
    height: 35px;  
    width:100%;
}

a{
    cursor: pointer;
}
</style>

<div id="page-content" class="job-registration job-registration full-width">
        <div class="container">
          <div class="row">
              <form id="form_crear_empresa">
            <div class="col-sm-12 page-content mt30">
                <h4 class=" client-registration-title">Información <span>Empresarial</span></h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Nombre de Empresa</label>
                          <div class="legal-entity">
                            <input id="nombre_empresa_sigesco" name="nombre_empresa_sigesco" type="text" placeholder="">
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Razon Social</label>
                          <div class="legal-entity">
                            <input id="razon_social_empresa_sigesco" name="razon_social_empresa_sigesco" type="text" placeholder="">
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>RUT / Sector / Nº Empleados</label>
                          <div class="company-name" style="width:22%;">
                            <input  id="rut_empresa_sigesco" name="rut_empresa_sigesco" type="text" placeholder="">
                          </div>
                          <div class="company-name" style="width:22%;margin-right:2%;margin-left:2%;">
                            <select id="sector_empresa_sigesco" name="sector_empresa_sigesco">
                              
                                <option value="">Seleccione Sector</option>
                                <option value="Almacenamiento">Almacenamiento</option>
                                <option value="Comercio">Comercio</option>
                                <option value="Comunicaciones">Comunicaciones</option>
                                <option value="Construcción">Construcción</option>
                                <option value="Hoteles y Restoranes">Hoteles y Restoranes</option>
                                <option value="Industria Manufacturera">Industria Manufacturera</option>
                                <option value="Minería">Minería</option>
                                <option value="Pesca">Pesca</option>                            
                                <option value="Silvoagropecuario">Silvoagropecuario</option>
                                <option value="Transporte">Transporte</option>
                            </select>
                          </div>
                          <div class="company-name" style="width:22%;">
                            <select id="cantidad_empleados_empresa_sigesco" name="cantidad_empleados_empresa_sigesco" >
                                <option value="">Seleccione Rango</option>
                                <option value="0 - 50">0 - 50</option>
                                <option value="51 - 100">51 - 100</option>
                                <option value="101- 150">101- 150</option>
                                <option value="151 - 200">151 - 200</option>
                                <option value="+200">+200</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content textarea-content">
                          <label><span>*</span>Presentación</label>
                          <div class="textarea-editor">
                            <textarea  id="presentacion_empresa_sigesco" name="presentacion_empresa_sigesco" cols="40"></textarea>
                            <p>Puede Agregar contenido HTML</p>
                          </div>
                        </div> <!-- end .single-content -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content social-networks-content">
                          <label>Redes Sociales</label>

                          <div class="social-networks">

                            <div class="social-facebook single-network">
                              <i class="fa fa-facebook"></i>
                              <div>
                                <input id="facebook_empresa_sigesco" name="facebook_empresa_sigesco" type="text" placeholder="Facebook">
                              </div>
                            </div>

                            <div class="social-twitter single-network">
                              <i class="fa fa-twitter"></i>

                              <div>
                                <input id="twitter_empresa_sigesco" name="twitter_empresa_sigesco" type="text" placeholder="Twitter">
                              </div>
                            </div>

                            <div class="social-google-plus single-network">
                              <i class="fa fa-google-plus"></i>

                              <div>
                                <input id="google_empresa_sigesco" name="google_empresa_sigesco" type="text" placeholder="Google+">
                              </div>
                            </div>

                            <div class="social-linkedin single-network">
                              <i class="fa fa-linkedin"></i>

                              <div>
                                <input id="linkedin_empresa_sigesco" name="linkedin_empresa_sigesco" type="text" placeholder="Linkedin">
                              </div>
                            </div>

                            <div class="social-youtube single-network">
                              <i class="fa fa-youtube"></i>

                              <div>
                                <input id="youtube_empresa_sigesco" name="youtube_empresa_sigesco" type="text" placeholder="Youtube">
                              </div>
                            </div>


                            <div class="social-instagram single-network">
                              <i class="fa fa-instagram"></i>

                              <div>
                                <input id="instagram_empresa_sigesco" name="instagram_empresa_sigesco" type="text" placeholder="Instagram">
                              </div>
                            </div>

                          </div> <!-- end .social-networks -->
                        </div> <!-- end .single-content -->
                    </div>
                </div>
                
              
                <div class="row">
                    <input id="cantidad_sucursal_empresa_sigesco" name="cantidad_sucursal_empresa_sigesco" type="text" style="display:none" value="1">
                    <div class="col-lg-12">
                        <div class="single-content location-content" style="height:100px;">
                            
                          <label id="label_sucursal"  style="height:100px;"><span>*</span>Casa Matriz / Sucursales</label>

                          <div id="lista_sucursales" class="location-details" style="height:100px;">
                              
                            <div  id="fila1_sucursal_empresa_sigesco" name="fila1_sucursal_empresa_sigesco" class="location-one clearfix">
                              <div class="city">
                                <input id="ciudad1_buscar_empresa_sigesco" name="ciudad1_buscar_empresa_sigesco" type="text" placeholder="Ciudad">
                                <input id="ciudad1_empresa_sigesco" name="ciudad1_empresa_sigesco" type="text" style="display:none">
                              </div>
                              <div class="zip-code" style="width:65%">
                                <input id="direccion1_empresa_sigesco" name="direccion1_empresa_sigesco" type="text" placeholder="Dirección">
                              </div>
                              <div class="unit-name" style="width:49%">
                                <input id="telefono1_empresa_sigesco" name="telefono1_empresa_sigesco" type="text" placeholder="Teléfono Ej: 52 2 2137XX / +569 512325XX">
                              </div>
                              <div class="floor" style="width:49%">
                                <input id="email1_empresa_sigesco" name="email1_empresa_sigesco" type="email" placeholder="Email">
                              </div>
                            </div> <!-- end .location-one -->
                          </div> <!-- end .location-details -->
                            
                            
                            
                        </div> <!-- end .single-content -->
                    </div>
                    <div class="col-lg-12" style="text-align:right">
                        <a onClick="agregar_sucursal()"><i class="fa fa-map-marker"></i>Agregar Sucursal</a>
                    </div>
                </div>

                
                <h4 style="margin-top:30px;" class=" client-registration-title">Usuario <span>Administrador</span></h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Usuario</label>
                          <div class="legal-entity">
                            <input id="user_empresa_sigesco" name="user_empresa_sigesco" type="text" placeholder="">
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Contraseña</label>
                          <div class="legal-entity">
                            <input id="pass_empresa_sigesco" name="pass_empresa_sigesco" type="password" placeholder="">
                          </div>
                        </div>
                    </div>
                </div>
                
                <h4 style="margin-top:30px;" class=" client-registration-title">Imagenes <span>y Logo</span></h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content company-logo-content">
                          <label >Logo de la Empresa</label>
                          <div class="company-logo">
                            <div class="logo-preview-area" style="text-align:center;">
                                <h5 id="titulo_logo_previo" style="padding:75px 0px 0px 0px;margin:0px;">SIN IMAGEN</h5>
                                <img id="archivo_logo_previo" height="160" style="height:160px">
                            </div>
                              <div class="row">
                                <div class="col-lg-6" style="display:none">
                                    <span style="width:100px;" class="mi_archivo">
                                        <input type="file" id="archivo_logo" name="archivo_logo" style="display:none">
                                    </span>
                                </div>
                                <div class="col-lg-12">
                                    <label class="btn btn-default" for="archivo_logo" style="margin-top:1%;float:right">
                                        <span>Seleccionar Imagen</span>
                                    </label>
                                </div>
                               </div>
                          </div> <!-- end company-logo -->
                        </div> <!-- end .single-content -->


                        <div class="single-content company-banner-content">
                          <label >Portada de la Empresa</label>

                          <div class="company-banner" style="text-align:center;">
                            <div class="banner-preview-area">
                                <h5 id="titulo_portada_previo" style="padding:75px 0px 0px 0px;margin:0px;">SIN IMAGEN</h5>
                                <img id="archivo_portada_previo" height="160" style="height:160px">
                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="display:none">
                                    <span class="mi_archivo">
                                        <input type="file" id="archivo_portada" name="archivo_portada" style="display:none">
                                    </span>
                                </div>
                                <div class="col-lg-12">
                                    <label class="btn btn-default" for="archivo_portada" style="margin-top:1%;float:right">
                                        <span>Seleccionar Imagen</span>
                                    </label>
                                </div>
                               </div>

                          </div> <!-- end .company-banner -->
                        </div> <!-- end .single-content -->
                    </div>
                    
                </div>
                <div style="text-align:center;margin-top:30px;"><a onCLick="crear_empresa()" style="text-align:center" href="#" class="btn btn-success">Guardar</a></div>
            </div> <!-- end .page-content -->
              </form>
          </div>
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->
<script>
    
    $( document ).ready(function() { 
        
        $('#archivo_logo').click(function(){
            fileInput.click();
        }).show();
        
        $('#archivo_portada').click(function(){
            fileInput.click();
        }).show();
        
        $('#rut_empresa_sigesco').Rut({
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
                    $( "#rut_empresa_sigesco" ).css(  "border-color","red" );
                    $( "#rut_empresa_sigesco" ).focus();
                    $( "#rut_empresa_sigesco" ).val("");
                    Command: toastr["error"]("El <strong>'RUT'</strong> ingresado es Incorrecto.", "RUT")
            },
            on_success: function(){ $( "#rut_empresa_sigesco" ).css( "border-color","#ccc" );}
        });
        
    });  
    
    $('#tags').tagsInput();
    var editor = new nicEditor().panelInstance('presentacion_empresa_sigesco');
    
    $("#ciudad1_buscar_empresa_sigesco").typeahead({
        displayKey: "name",  
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
    $("#ciudad1_buscar_empresa_sigesco").change(function() {
          var current = $("#ciudad1_buscar_empresa_sigesco").typeahead("getActive");
          if (current) {
            // Some item from your model is active!
            if (current.name == $("#ciudad1_buscar_empresa_sigesco").val()) {
                $("#ciudad1_empresa_sigesco").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
                $("#ciudad1_buscar_empresa_sigesco").val('');
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
            // Nothing is active so it is a new value (or maybe empty value)
          }
        });
    
    function agregar_sucursal(){
        
        var cantidad = parseInt($("#cantidad_sucursal_empresa_sigesco").val());
        $("#cantidad_sucursal_empresa_sigesco").val(cantidad+1);
                
        $(".location-content").css('height',($(".location-content").height()+103));
        $("#lista_sucursales").css('height',($(".location-content").height()+3));
        $("#label_sucursal").css('height',($(".location-content").height()+3));
        
        $( "#lista_sucursales" ).append('<div id="location-details'+(cantidad+1)+'" class="location-details" style="height:100px;width:100%;margin:0px;padding:0px"><div style="heigh:100px;" id="fila'+(cantidad+1)+'_sucursal_empresa_sigesco" name="fila'+(cantidad+1)+'_sucursal_empresa_sigesco" class="location-one clearfix"><div class="city"><input id="ciudad'+(cantidad+1)+'_buscar_empresa_sigesco" name="ciudad'+(cantidad+1)+'_buscar_empresa_sigesco" type="text" placeholder="Ciudad"><input id="ciudad'+(cantidad+1)+'_empresa_sigesco" name="ciudad'+(cantidad+1)+'_empresa_sigesco" type="text" style="display:none"></div><div class="zip-code" style="width:60%"><input id="direccion'+(cantidad+1)+'_empresa_sigesco" name="direccion'+(cantidad+1)+'_empresa_sigesco" type="text" placeholder="Dirección"></div>&nbsp;&nbsp;&nbsp;<i onClick="eliminar_sucursal('+(cantidad+1)+')" title="Eliminar" style="text-align:center;cursor: pointer;color:red;" class="fa fa-minus-circle fa-2x" aria-hidden="true"></i><div class="unit-name" style="width:47%"><input id="telefono'+(cantidad+1)+'_empresa_sigesco" name="telefono'+(cantidad+1)+'_empresa_sigesco" type="text" placeholder="Teléfono Ej: 52 2 2137XX / +569 512325XX"></div><div class="floor" style="width:46%"><input id="email'+(cantidad+1)+'_empresa_sigesco" name="email'+(cantidad+1)+'_empresa_sigesco" type="text" placeholder="Email"></div></div></div>');
        
        $("#ciudad"+(cantidad+1)+"_buscar_empresa_sigesco").typeahead({
        displayKey: "name",  
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
    $("#ciudad"+(cantidad+1)+"_buscar_empresa_sigesco").change(function() {
          var current = $("#ciudad"+(cantidad+1)+"_buscar_empresa_sigesco").typeahead("getActive");
          if (current) {
            // Some item from your model is active!
            if (current.name == $("#ciudad"+(cantidad+1)+"_buscar_empresa_sigesco").val()) {
                $("#ciudad"+(cantidad+1)+"_empresa_sigesco").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
                $("#ciudad"+(cantidad+1)+"_buscar_empresa_sigesco").val('');
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
            // Nothing is active so it is a new value (or maybe empty value)
          }
        });
        
        $("#cantidad_sucursal_empresa_sigesco").val(cantidad+1);
        
    }
    
    function eliminar_sucursal(id){
        $("#titulo"+id+"_sucursal").remove();
        $("#fila"+id+"_sucursal_empresa_sigesco").remove();
        $("#location-details"+id).remove();
        $(".location-content").css('height',($(".location-content").height() - 97));
        $("#lista_sucursales").css('height',($(".location-content").height()+3));
        $("#label_sucursal").css('height',($(".location-content").height())+3);
    }
    
    function crear_empresa(){
        var fd = new FormData();
        var i = 2;
        var presentacion_empresa_sigesco = nicEditors.findEditor('presentacion_empresa_sigesco');

        if($("#nombre_empresa_sigesco").val().length > 0){
            $("#nombre_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("nombre_empresa_sigesco",$( "#nombre_empresa_sigesco" ).val());
        if($("#razon_social_empresa_sigesco").val().length > 0){
            $("#razon_social_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("razon_social_empresa_sigesco",$( "#razon_social_empresa_sigesco" ).val());
        if($("#rut_empresa_sigesco").val().length > 0){
            $("#rut_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("rut_empresa_sigesco",$( "#rut_empresa_sigesco" ).val());
        if($("#sector_empresa_sigesco").val().length > 0){
            $("#sector_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("sector_empresa_sigesco",$( "#sector_empresa_sigesco" ).val());
        if($("#cantidad_empleados_empresa_sigesco").val().length > 0){
            $("#cantidad_empleados_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("cantidad_empleados_empresa_sigesco",$( "#cantidad_empleados_empresa_sigesco" ).val());
        if(presentacion_empresa_sigesco.getContent().length > 4){
            $( ".nicEdit-main" ).css(  "border-color","#ccc" );
            fd.append("presentacion_empresa_sigesco",presentacion_empresa_sigesco.getContent());
        if($("#ciudad1_empresa_sigesco").val().length > 0){
            $("#ciudad1_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("ciudad1_empresa_sigesco",$( "#ciudad1_empresa_sigesco" ).val());
        if($("#direccion1_empresa_sigesco").val().length > 0){
            $("#direccion1_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("direccion1_empresa_sigesco",$( "#direccion1_empresa_sigesco" ).val());
        if($("#telefono1_empresa_sigesco").val().length > 0){
            $("#telefono1_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("telefono1_empresa_sigesco",$( "#telefono1_empresa_sigesco" ).val());
        if($("#email1_empresa_sigesco").val().length > 0){
            $("#email1_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("email1_empresa_sigesco",$( "#email1_empresa_sigesco" ).val());
        if($("#user_empresa_sigesco").val().length > 0){
            $("#user_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("user_empresa_sigesco",$( "#user_empresa_sigesco" ).val());
        if($("#pass_empresa_sigesco").val().length > 0){
            $("#pass_empresa_sigesco" ).css( "border-color","#ccc" );
            fd.append("pass_empresa_sigesco",$( "#pass_empresa_sigesco" ).val());
            
            //////////////////////  O P C I O N A L E S  /////////////////////////////
            if($("#archivo_logo").val().length > 0){
                fd.append( "archivo_logo", $("#archivo_logo")[0].files[0]);
            }
            
            if($("#archivo_portada").val().length > 0){
                fd.append( "archivo_portada", $("#archivo_portada")[0].files[0]);
            }
            
            if($("#facebook_empresa_sigesco").val().length > 0){
                fd.append( "facebook_empresa_sigesco", $("#facebook_empresa_sigesco").val());
            }
            
            if($("#twitter_empresa_sigesco").val().length > 0){
                fd.append( "twitter_empresa_sigesco", $("#twitter_empresa_sigesco").val());
            }
            
            if($("#google_empresa_sigesco").val().length > 0){
                fd.append( "google_empresa_sigesco", $("#google_empresa_sigesco").val());
            }
            
            if($("#linkedin_empresa_sigesco").val().length > 0){
                fd.append( "linkedin_empresa_sigesco", $("#linkedin_empresa_sigesco").val());
            }
            
            if($("#youtube_empresa_sigesco").val().length > 0){
                fd.append( "youtube_empresa_sigesco", $("#youtube_empresa_sigesco").val());
            }
            
            if($("#instagram_empresa_sigesco").val().length > 0){
                fd.append( "instagram_empresa_sigesco", $("#instagram_empresa_sigesco").val());
            }
            
            fd.append( "cantidad_sucursal_empresa_sigesco", $("#cantidad_sucursal_empresa_sigesco").val());
            
            for(var i = 2;i <= $("#cantidad_sucursal_empresa_sigesco").val();i++){
                if(
                    ($("#ciudad"+i+"_empresa_sigesco").val()) ||
                    ($("#direccion"+i+"_empresa_sigesco").val()) ||
                    ($("#telefono"+i+"_empresa_sigesco").val()) ||
                    ($("#email"+i+"_empresa_sigesco").val())
                  ){
                                        
                    if($("#ciudad"+i+"_empresa_sigesco").val().length > 0){
                        $("#ciudad"+i+"_empresa_sigesco").css( "border-color","#ccc" );
                        if($("#direccion"+i+"_empresa_sigesco").val().length > 0){
                            $("#direccion"+i+"_empresa_sigesco").css( "border-color","#ccc" );
                            if($("#telefono"+i+"_empresa_sigesco").val().length > 0){
                                $("#telefono"+i+"_empresa_sigesco").css( "border-color","#ccc" );
                               if($("#email"+i+"_empresa_sigesco").val().length > 0){
                                   $("#email"+i+"_empresa_sigesco").css( "border-color","#ccc" );
                                    
                                   fd.append( "ciudad"+i+"_empresa_sigesco", $("#ciudad"+i+"_empresa_sigesco").val());
                                   fd.append( "direccion"+i+"_empresa_sigesco", $("#direccion"+i+"_empresa_sigesco").val());
                                   fd.append( "telefono"+i+"_empresa_sigesco", $("#telefono"+i+"_empresa_sigesco").val());
                                   fd.append( "email"+i+"_empresa_sigesco", $("#email"+i+"_empresa_sigesco").val());
                                   
                                }else{
                                    $("#email"+i+"_empresa_sigesco").css(  "border-color","red" );
                                    $("#email"+i+"_empresa_sigesco").focus();
                                    Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
                                }
                            }else{
                                $("#telefono"+i+"_empresa_sigesco").css(  "border-color","red" );
                                $("#telefono"+i+"_empresa_sigesco").focus();
                                Command: toastr["error"]("Ingrese el campo <strong>'Teléfono'</strong> por favor.", "Teléfono")
                            }
                        }else{
                            $("#direccion"+i+"_empresa_sigesco").css(  "border-color","red" );
                            $("#direccion"+i+"_empresa_sigesco").focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Dirección'</strong> por favor.", "Dirección")
                        }
                    }else{
                        $("#ciudad"+i+"_empresa_sigesco").css(  "border-color","red" );
                        $("#ciudad"+i+"_empresa_sigesco").focus();
                        Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
                       }
                    }
            }
            
            ///////////////////////////////////////////////////////////////////////////////////////////////
            
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>empresa/crear_empresa_contratista',
                contentType: false,
                data: fd, 
                processData: false,
                cache: false,
                success: function(data){
                    if(data == true){
                        //toastr.options.onHidden = function() { redireccionarPagina('<?=base_url()?>') }
                        Command: toastr["success"]("Empresa Creada Correctamente.", "Empresa Creada")
                    }else{
                       Command: toastr["error"]("Ocurrio un problema, Por favor intentelo nuevamente.", "Ocurrio un Problema")
                       }
                }
            });
            
        }else{
            $( "#pass_empresa_sigesco" ).css(  "border-color","red" );
            $( "#pass_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> del Administrador, por favor.", "Contraseña del Administrador")
        }
           
        }else{
            $( "#user_empresa_sigesco" ).css(  "border-color","red" );
            $( "#user_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Usuario'</strong> Administrador, por favor.", "Usuario Administrador")
        }
           
        }else{
            $( "#email1_empresa_sigesco" ).css(  "border-color","red" );
            $( "#email1_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> de la Casa Matriz, por favor.", "Email Casa Matriz")
        }
           
        }else{
            $( "#telefono1_empresa_sigesco" ).css(  "border-color","red" );
            $( "#telefono1_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Teléfono'</strong> de la Casa Matriz, por favor.", "Teléfono Casa Matriz")
        }
           
        }else{
            $( "#direccion1_empresa_sigesco" ).css(  "border-color","red" );
            $( "#direccion1_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Dirección'</strong> de la Casa Matriz, por favor.", "Dirección Casa Matriz")
        }
           
        }else{
            $( "#ciudad1_empresa_sigesco" ).css(  "border-color","red" );
            $( "#ciudad1_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> de la Casa Matriz, por favor.", "Ciudad Casa Matriz")
        }
           
        }else{
            $( ".nicEdit-main" ).css(  "border-color","red" );
            $( ".nicEdit-main" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Presentación'</strong> por favor.", "Presentación")
        }
           
        }else{
            $( "#cantidad_empleados_empresa_sigesco" ).css(  "border-color","red" );
            $( "#cantidad_empleados_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Cantidad de Empleados'</strong> por favor.", "Cantidad de Empleados")
        }
           
        }else{
            $( "#sector_empresa_sigesco" ).css(  "border-color","red" );
            $( "#sector_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Sector'</strong> por favor.", "Sector")
        }
           
        }else{
            $( "#rut_empresa_sigesco" ).css(  "border-color","red" );
            $( "#rut_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'RUT'</strong> por favor.", "RUT")
        }
        }else{
            $( "#razon_social_empresa_sigesco" ).css(  "border-color","red" );
            $( "#razon_social_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Razon Social'</strong> por favor.", "Razon Social")
        }
        }else{
            $( "#nombre_empresa_sigesco" ).css(  "border-color","red" );
            $( "#nombre_empresa_sigesco" ).focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre de EMpresa'</strong> por favor.", "Nombre de Empresa")
        }
        
    }
    
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
                    $("#titulo_logo_previo").remove();
                    $("#archivo_logo_previo").attr("src",'<?=base_url()?>'+data);
                }else{
                    Command: toastr["error"]("Ocurrio un Problema, intente nuevamente por favor.", "Error al subir Logo")
                }
            }
        });
    });
    
    $( "#archivo_portada" ).change(function() {
        var img_portada = new FormData();
        img_portada.append( "archivo_portada", $("#archivo_portada")[0].files[0]);
        
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>empresa/subir_portada',
            contentType: false,
            data: img_portada, 
            processData: false,
            cache: false,
            success: function(data){
                if(data != false){
                    $("#titulo_portada_previo").remove();
                    $("#archivo_portada_previo").attr("src",'<?=base_url()?>'+data);
                }else{
                    Command: toastr["error"]("Ocurrio un Problema, intente nuevamente por favor.", "Error al subir Logo")
                }
            }
        });
    });
    
</script>