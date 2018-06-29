<style>
    .assigned-job-list{
        margin-top: 10px;
    }
    .pull-right{
        padding-top:35px;
    }
    
    #editar_perfil:hover{
        background-color: aqua;
    }
    
    @media screen and (min-width: 600px) {
        #modal_informacion_personal, #modal_experiencia_laboral,#modal_experiencia_laboral_editar {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:85%;
        }
        
        #modal_estudio, #modal_estudio_editar_basica, #modal_estudio_editar_media, #modal_estudio_editar_universitaria,  {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:60%;
        }
        
        .barra_progreso{
            padding:10px 10px 10px 10px;
        }
        
        .detalle_idioma_tabla{
            padding:5px 10px 0px 10px;
        }
        
        .detalle_idioma_tabla2{
            padding:5px 10px 5px 10px;
        }
        .detalle_idioma_tabla3{
            padding:5px 10px 5px 10px;
        }
    }
    
    @media screen and (min-width: 600px) {
        #modal_foto_perfil {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:50%;
        }
    }

    
    .list-unstyled li{
        
        padding: 5px 0px 10px 0px;
    }
    
    label{
        color:#346abb;
    }
    
    .skill-progressbar p #valor_porcentaje_conocimiento {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    .skill-progressbar p #valor_porcentaje_idioma_oral {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    .skill-progressbar p #valor_porcentaje_idioma_escrito {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    @media screen and (max-width: 375px) and (min-width: 300px) {
        .texto_anuncio{
            font-size:8px;
            text-align: center;
            padding-left: 10px;
        }
        
        .cuadrado_anuncio{
            width:10px;
            height:10px;
        }
        
        .days-left{
            max-width: 50px;
            min-height: 50px;
            
        }
        
        .css-table{
            width:100%;
        }
        
        .col-xs-6{
            padding: 0px;
        }
        
        p.detalle_idioma_tabla{
            margin: 0px;
            padding: 0px
        }
        
        .barra_progreso{
            padding:0px 20px 0px 20px;
        }
    }
    
    .titulo_idioma_tabla{
        text-transform: capitalize;
        font-size: 19px;
        font-weight: 600;
        line-height: 1.1;
        font-family: 'Raleway', sans-serif;
        padding-top: 25px;
    }
    
    .titulo_idioma_tabla2{
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.1;
        font-family: 'Raleway', sans-serif;
        padding-top: 10px;
    }
    
    .detalle_idioma_tabla{
        color: #666;
        font-size: 14px;
        text-transform: capitalize;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
    }
    
    .detalle_idioma_tabla2{
        color: #666;
        font-size: 14px;
        text-transform: capitalize;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
    }
    
    .icono_idioma{
        cursor: pointer;
        color: #346abb;
        text-transform: capitalize;
        text-align: center;
        font-size: inherit;
        text-rendering: auto;
        font-size: 28px;
        text-align: center;
        align-content: center;
        padding-top: 20px;
    }
    
    .icono_imagen{
        cursor: pointer;
        color: #346abb;
        text-transform: capitalize;
        text-align: left;
        font-size: inherit;
        text-rendering: auto;
        font-size: 28px;
        text-align: center;
        align-content: center;
        padding-top: 0px;
    }
    
    p.detalle_idioma_tabla3{
        margin: 0px;
        padding: 0px;
    }
    
</style>
<div id="page-content" class="candidate-profile">
        <div class="container">
              <div id="candidate-profile">
                <div class="row">
                  <div class="col-md-3">
                    <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">
                        <img id="foto_editar_perfil" src="<?=base_url().$this->session->userdata('sigesco_laboral_foto')?>" alt="">
                          <div id="editar_perfil" style="height:50px;width:100%;margin-top:-70px;background-color:black;opacity:0.5; display:none;"><a  href="#" data-toggle="modal" data-target="#modal_foto_perfil"><h5 style="opacity:0.9;color:white;margin:0px;font-size:14px;padding:15px 10px 15px 10px;"><i class="fa fa-pencil" aria-hidden="true"></i> Editar Foto Perfil</h5></a></div>
                        <div>&nbsp;</div>
                        <a style="margin-top:15px" href="#"><?=$this->session->userdata('sigesco_laboral_nombre')." ".$this->session->userdata('sigesco_laboral_paterno')?></a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title">
                          <h6>Información General</h6>
                        </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Birthday:</strong>June 17, 1986</li>
                          <li><strong>Address:</strong>New York City, United States</li>
                          <li><strong>Phone:</strong>+1 123-456-7890</li>
                          <li><strong>Email:</strong>email@example.com</li>
                          <li><strong>Website:</strong>www.example.com</li>
                          <li class="mt20"><strong>Experience:</strong>5 Years</li>
                          <li><strong>Degree:</strong>MBA</li>
                          <li><strong>Residence:</strong>USA</li>
                        </ul>

                        <!-- social link -->

                        <div class="title mt20">
                          <h6>Redes Sociales</h6>
                        </div> <!-- end .title -->

                        <ul class="list-inline social-link mt10">
                          <li class="envelop-color"><a href="#"><i class="fa fa-envelope"></i></a></li>
                          <li class="facebook-color"><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li class="google-color"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li class="twitt-color"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li class="linked-color"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li class="pinterest-color"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>


                      </div> <!-- end .candidate-general-info -->
                    </div>
                  </div> <!-- end .3col grid layout -->

                  <div id="datos_candidato" class="col-md-9">
                    <div class="candidate-description">


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
  
});    
</script>