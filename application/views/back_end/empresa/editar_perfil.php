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
        <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="title-overlay"></div>
            <div class="container">
              <div class="title-breadcrumb clearfix">
                <h1>Edición de Perfil</h1>
                <ol class="breadcrumb">
                  <li><a href="<?=base_url()?>empresa">Inicio</a></li>
                  <li class="active">Edición</li>
                </ol>
              </div> <!-- end .title-breadcrumb -->
            </div> <!-- end .container -->
        </div> <!-- end .header-nav-bar -->
        <div class="container">
          <div class="row">
            <form id="form_crear_empresa">
            <div class="col-sm-12 page-content mt30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content location-content" style="height:55px;">
                          <label id="label_sucursal"  style="height:50px;"><span>*</span>Nombres</label>
                          <div id="lista_sucursales" class="location-details" style="height:50px;">
                            <div class="location-one clearfix">
                              <div class="city" style="width:50%">
                                <input id="" name="" type="text" placeholder="Nombre" value="<?=$datos->nombre_ejecutivo_empresa_contratista?>">
                              </div>
                              <div class="zip-code" style="width:50%">
                                <input id="" name="" type="text" placeholder="Segundo Nombre" value="<?=$datos->nombre2_ejecutivo_empresa_contratista?>">
                              </div>
                            </div> <!-- end .location-one -->
                          </div> <!-- end .location-details -->
                        </div> <!-- end .single-content -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content location-content" style="height:55px;">
                          <label id="label_sucursal"  style="height:50px;"><span>*</span>Apellidos</label>
                          <div id="lista_sucursales" class="location-details" style="height:50px;">
                            <div class="location-one clearfix">
                              <div class="city" style="width:50%">
                                <input id="" name="" type="text" placeholder="Paterno" value="<?=$datos->paterno_ejecutivo_empresa_contratista?>">
                              </div>
                              <div class="zip-code" style="width:50%">
                                <input id="" name="" type="text" placeholder="Materno" value="<?=$datos->materno_ejecutivo_empresa_contratista?>">
                              </div>
                            </div> <!-- end .location-one -->
                          </div> <!-- end .location-details -->
                        </div> <!-- end .single-content -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content location-content" style="height:55px;">
                          <label id="label_sucursal"  style="height:50px;"><span>*</span>Contacto</label>
                          <div id="lista_sucursales" class="location-details" style="height:50px;">
                            <div class="location-one clearfix">
                              <div class="city" style="width:50%">
                                <input id="" name="" type="text" placeholder="Email (Ejemplo@dominio.cl)" value="<?=$datos->email_ejecutivo_empresa_contratista?>">
                              </div>
                              <div class="zip-code" style="width:50%">
                                <input id="" name="" type="text" placeholder="Teléfono (+569-XXXXXXX)" value="<?=$datos->telefono_ejecutivo_empresa_contratista?>">
                              </div>
                            </div> <!-- end .location-one -->
                          </div> <!-- end .location-details -->
                        </div> <!-- end .single-content -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Sucursal</label>

                          <div class="company-name" style="">
                            <select id="sector_empresa_sigesco" name="sector_empresa_sigesco">
                              
                                <option value="">Seleccione Sucursal</option>
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
                        </div>
                    </div>                
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Usuario</label>
                          <div class="legal-entity">
                            <input id="user_empresa_sigesco" name="user_empresa_sigesco" type="text" placeholder="Usuario" value="<?=$datos->user_ejecutivo_empresa_contratista?>">
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-content">
                          <label><span>*</span>Contraseña</label>
                          <div class="legal-entity">
                            <input id="pass_empresa_sigesco" name="pass_empresa_sigesco" type="password" placeholder="Contraseña" value="<?=$datos->pass_ejecutivo_empresa_contratista?>">
                          </div>
                        </div>
                    </div>
                
                    <div class="col-lg-12">
                        <div class="single-content company-logo-content">
                          <label >Foto de Perfil</label>
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
  if($( window ).width() < 380){
      $(".city").css("width","100%");
      $(".zip-code").css("width","100%");
  }
});    
</script>