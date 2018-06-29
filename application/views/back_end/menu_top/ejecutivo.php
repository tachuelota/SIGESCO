<style>
    .dropdown-menu li a{
        padding: 5px 0px;
    }
    
    .dropdown-menu{
        margin-left: -74%;
        margin-top: 15%;
    }
    
    .dropdown-menu li a:hover{
        padding-left: 20px;
        background-color: transparent;
    }
    
    .dropdown-menu li a{
        padding-left: 10px;
    }
    
    @media screen and (max-width: 375px) and (min-width: 300px) {
        #lista_mensaje{
            margin-left: -180%;
        }      
    }
    
    @media screen and (min-width: 600px) {
        #lista_mensaje{
            margin-left:-160px;
            width:360px;
            overflow:scroll;
            max-height:250px;
        }      
    }
</style>
<!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

          <!--
          HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
          -->

          <div class="header-notification-bar">
            <div class="register-user">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a href="<?=base_url()?>empresa"><img height="100" src="<?=base_url();?>img/logo_superior.png" alt=""></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                   <!-- <div class="search-form">
                      <form action="#">
                        <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Buscar..." class="topbar-search-input">
                        <button class="search-button"><i class="fa fa-search"></i></button>
                      </form>
                    </div>-->
                      &nbsp;
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">
                      <ul class="list-inline">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-envelope-o"></i><span class="new-notification">3</span></a>
                            <ul id="lista_mensaje" class="dropdown-menu" role="menu" style="">
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row" style="width: 350px;padding: 10px 5px;">  
                                    <div class="col-xs-3 col-sm-3">
                                        <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <span class="name">Todd Shelton</span><br/>
                                        <span class="text-muted">todd.shelton@example.com</span>
                                    </div>
                                  </div>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                        <li class="user-profile-pic dropdown" style="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img id="foto_editar_perfil_superior" src="<?=base_url().$this->session->userdata('sigesco_laboral_foto')?>" alt=""></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url()?>empresa/editar_perfil">Editar</a></li>
                                <li><a href="<?=base_url()?>login/cerrar_sesion">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .register-user -->
          </div> <!-- end. header-notification-bar  -->

          <!--
          END HEADER NOTIFICATION TOP BAR
          -->

          <!-- Navigation -->
          <div class="main-navbar">

            <nav class="navbar navbar-default">
              <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?=base_url()?>empresa"><img id="foto_editar_perfil_superior" src="img/logo_superior.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      
                      <?php
                                                                                                                                                     
                        $modulos = json_decode($this->session->userdata('sigesco_laboral_menu'));

                        foreach ($modulos as $product) {
                            
                            if($product->url == "#"){
                                echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$product->modulo.'
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">';
                                $i=1;
                                   foreach ($product->submodulos as $submodulo) {
                                       
                                        echo '<li><a href="'.base_url().$submodulo->url.'">'.$submodulo->nombre.'</a></li>';
                                   }
                                echo '</ul></li>';
                            }else{
                                echo '<li class=""><a href="'.base_url().$product->url.'">'.$product->modulo.'</a></li>';
                            }
                           
                            
                        }



                      ?>
                      
                    <!--<li class="active"><a href="<?=base_url()?>empresa">Inicio</a></li>
                    <li><a href="<?=base_url()?>empresa/trabajadores">Trabajadores</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listas
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?=base_url()?>empresa/listas">Lista Trabajadores</a></li>
                        <li><a href="<?=base_url()?>empresa/documentos">Documentos</a></li>
                      </ul>
                    </li>
                    <li><a href="<?=base_url()?>busqueda">Busqueda</a></li>
                    <li><a href="<?=base_url()?>documentacion">Documentación</a></li>
-->
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
            </nav>
          </div> <!-- main-navbar -->
          <!-- end .header-top-bar -->
        </div>


      </header>
      <!-- end #header -->

      <!-- header Search bar -->
      <!-- end .header-banner -->

<script>
        
$( document ).ready(function() { 
    
    $(".candidate-profile-picture").mouseover(function() {
        $("#editar_perfil").slideDown( "slow" );
    });

    $(".candidate-profile-picture").mouseleave(function() {
        $("#editar_perfil").slideUp( "slow" );
    });
});
   $(".user-profile-pic").mouseover(function(){$(".user-profile-pic").addClass("open");});
   $(".user-profile-pic").mouseout(function(){$(".user-profile-pic").removeClass("open");});
</script>