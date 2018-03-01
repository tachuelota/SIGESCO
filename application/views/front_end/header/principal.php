<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGESCO - Sistema de Gestión de Contratos</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/owl.carousel.css" />
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>css/responsive.css">
    <link rel="stylesheet" href="<?=base_url()?>css/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/jquery.tagsinput.css" />
    
      
    <!-- Scripts -->
      <script src="<?=base_url()?>js/jquery-3.1.1.min.js"></script>
      <script src="<?=base_url()?>js/bootstrap.js"></script>
      <script src="<?=base_url()?>js/toastr.js"></script>
      <script src="<?=base_url()?>js/bootbox.min.js"></script>
      <script src="<?=base_url()?>js/jquery.Rut.js"></script>
      <script src="<?=base_url()?>js/jquery.mask.js"></script>
      <script src="<?=base_url()?>js/typeahead.js"></script>
      <script src="<?=base_url()?>js/nicEdit.js"></script>
      <script src="<?=base_url()?>js/jquery.tagsinput.min.js"></script>
      

      

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <script>
            ///////////////////// F O R M A T E A R   N U M E R O S   E N    J A V A S C R I P T ////////////////////////
                var formatNumber = {
                     separador: ".", // separador para los miles
                     sepDecimal: ',', // separador para los decimales
                     formatear:function (num){
                        num +='';
                        var splitStr = num.split('.');
                        var splitLeft = splitStr[0];
                        var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
                        var regx = /(\d+)(\d{3})/;
                        while (regx.test(splitLeft)) {
                        splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
                        }
                        return this.simbol + splitLeft  +splitRight;
                     },
                     new:function(num, simbol){
                        this.simbol = simbol ||'';
                        return this.formatear(num);
                     }
                    }
            //////////////////////////////////////////////////////////////////////////////////////////////////////////// 

            ///////////////////////////////////// R E D I R E C C I O N A R  //////////////////////////////////////////

                function redireccionarPagina(data) {
                    window.location = data;
                }

            //////////////////////////////////////////////////////////////////////////////////////////////////////////

    </script>
      
    <div id="main-wrapper" class="our-agents-content">