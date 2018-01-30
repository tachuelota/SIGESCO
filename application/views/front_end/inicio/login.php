<!DOCTYPE html>
<html class=''>
    <head>
        <script src="<?=base_url()?>js/jquery-3.1.1.min.js"></script>
        <script src="<?=base_url()?>js/toastr.js"></script>
        <style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Raleway:700,800);

        html, body { margin: 0; }

        :focus { outline: none; }
        ::-webkit-input-placeholder { color: #DEDFDF; }
        ::-moz-placeholder { color: #DEDFDF; }
        :-moz-placeholder { color: #DEDFDF; }
        ::-ms-input-placeholder { color: #DEDFDF; }

        body {
          background: #6ED0F6;
          color: #fff;
          font-family: 'Raleway', sans-serif;
          -webkit-font-smoothing: antialiased;
            background-color: rgba(49, 104, 190, 1.0);
            background-image: url(<?=base_url()?>img/login-bg.png);
            background-attachment: fixed;
            height: 100%;
            max-height: 100%;
            min-height: 99%;
            overflow: hidden;
            width: 100%;
        }

        #wrapper, label, #arrow, button span { -webkit-transition: all .5s cubic-bezier(.6,0,.4,1); transition: all .5s cubic-bezier(.6,0,.4,1); }

        #wrapper { overflow: hidden; }

        #signin:checked ~ #wrapper { height: 178px; }
        #signin:checked ~ #wrapper #arrow { left: 32px; }
        #signin:checked ~ button span { -webkit-transform: translate3d(0,-72px,0); transform: translate3d(0,-72px,0); }

        #signup:checked ~ #wrapper { height: 178px; }
        #signup:checked ~ #wrapper #arrow { left: 137px; }
        #signup:checked ~ button span { -webkit-transform: translate3d(0,-72px,0); transform: translate3d(0,-72px,0); }

        #reset:checked ~ #wrapper { height: 94px; }
        #reset:checked ~ #wrapper #arrow { left: 404px; }
        #reset:checked ~ button span { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); }

        form {
          width: 450px;
          height: 370px;
          margin: -300px -225px;
          position: absolute;
          left: 50%;
          top: 50%;
        }

        input[type=radio] { display: none; }

        label {
          cursor: pointer;
          display: inline-block;
          font-size: 22px;
          font-weight: 800;
          opacity: .5;
          margin-bottom: 30px;
          text-transform: uppercase;
        }
        label:hover {
          -webkit-transition: all .3s cubic-bezier(.6,0,.4,1);
          transition: all .3s cubic-bezier(.6,0,.4,1);
          opacity: 1;
        }
        label[for="signin"] { margin-right: 20px; }
        label[for="signin2"] { margin-right: 20px; }
        label[for="reset"] { float: right; }
        input[type=radio]:checked + label { opacity: 1; }

        input[type=text],
        input[type=password] {
          background: #fff;
          border: none;
          border-radius: 8px;
          font-size: 27px;
          font-family: 'Raleway', sans-serif;
          height: 72px;
          width: 99.5%;
          margin-bottom: 10px;
          opacity: 1;
          text-indent: 20px;
          -webkit-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
        }
        button {
          background: #079BCF;
          border: none;
          border-radius: 8px;
          color: #fff;
          cursor: pointer;
          font-family: 'Raleway', sans-serif;
          font-size: 27px;
          height: 72px;
          width: 100%;
          margin-bottom: 10px;
          overflow: hidden;
          -webkit-transition: all .3s cubic-bezier(.6,0,.4,1);
          transition: all .3s cubic-bezier(.6,0,.4,1);
        }
        button span {
          display: block;
          line-height: 72px;
          position: relative;
          top: -2px;
          -webkit-transform: translate3d(0,0,0);
                  transform: translate3d(0,0,0);
        }
        button:hover {
          background: #007BA5;
        }

        #arrow {
          height: 0;
          width: 0;
          border-bottom: 10px solid #fff;
          border-left: 10px solid transparent;
          border-right: 10px solid transparent;
          position: relative;
          left: 32px;
        }


        #hint {
          width: 100%;
          text-align: center;
          position: absolute;
          bottom: 20px;
        }</style>
    </head>
<body>
<form>
  <p><img width="450" height="" src="<?=base_url()?>img/logo_email_bienvenida.png" alt=" "></p>
  <input checked id='signin' class="activo" onClick="activar(1)" name='action' type='radio' value='signin'>
  <label for='signin'>Chileno</label>
  <input id='signup' onClick="activar(2)" name='action' type='radio' value='signup'>
  <label for='signup'>Extranjero</label>
  <input id='reset' onClick="activar(3)" name='action' type='radio' value='reset'>
  <label for='reset'>Recuperar</label>
  <div id='wrapper'>
    <div id='arrow'></div>
    <input id='email_login_sigesco_laboral' name="email_login_sigesco_laboral" placeholder='RUN o Email' type='text'>
    <input id='pass_login_sigesco_laboral' name="pass_login_sigesco_laboral" placeholder='Contraseña' type='password'>
  </div>
  <button id="boton_ingreso_trabajador_laboral" type='button'>
    <span>
      Recuperar Contraseña
      <br>
      Ingresar
      <br>
      Ingresar
    </span>
  </button>
</form>    
<script>
$( "#boton_ingreso_trabajador_laboral" ).click(function() {
            
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
            
            if($("#signin").hasClass( "activo")){
               if($("#email_login_sigesco_laboral").val().length > 0){ $( "#email_login_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#pass_login_sigesco_laboral").val().length > 0){ $( "#pass_login_sigesco_laboral" ).css( "border-color","#ccc" );
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>login/validar',
                        data: {user: $("#email_login_sigesco_laboral").val() , pass: $("#pass_login_sigesco_laboral").val()},
                        success: function(data){
                            
                            if(data == true){
                                redireccionarPagina('<?=base_url()?>laboral');
                            }else{
                                Command: toastr["error"]("Rut/Email o Contraseña Incorrecta. Favor de Verificar.", "Error de Ingreso");
                            }
                        }
                    });
                                                                      
                }else{
                    $( "#pass_login_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_login_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
                                                                   
            }else{
                
                $( "#email_login_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_login_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Run o Email'</strong> por favor.", "RUN o Email")
            }
               }
               
            if($("#signup").hasClass( "activo")){
               if($("#email_login_sigesco_laboral").val().length > 0){ $( "#email_login_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#pass_login_sigesco_laboral").val().length > 0){ $( "#pass_login_sigesco_laboral" ).css( "border-color","#ccc" );
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>login/validar_extranjero',
                        data: {user: $("#email_login_sigesco_laboral").val() ,pass: $("#pass_login_sigesco_laboral").val()},
                        success: function(data){
                            
                            if(data == true){
                                redireccionarPagina('<?=base_url()?>laboral');
                            }else{
                                 
                                Command: toastr["error"]("Rut/Email o Contraseña Incorrecta. Favor de Verificar.", "Error de Ingreso");
                            }
                        }
                    });
                                                                      
                }else{
                    $( "#pass_login_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_login_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
                                                                   
            }else{
                
                $( "#email_login_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_login_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Run o Email'</strong> por favor.", "RUN o Email")
            }
               }
               
            if($("#reset").hasClass( "activo")){
               alert("Reset")
               }
            
});
        
///////////////////////////////////// R E D I R E C C I O N A R  //////////////////////////////////////////
                function redireccionarPagina(data) {
                    window.location = data;
                }
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function activar(id_div){
    switch(id_div) {
    case 1:
            $( "#signin" ).addClass( "activo" );
            $( "#signup" ).removeClass( "activo" );
            $( "#reset" ).removeClass( "activo" );
        break;
    case 2:
            $( "#signin" ).removeClass( "activo" );
            $( "#signup" ).addClass( "activo" );
            $( "#reset" ).removeClass( "activo" );
        break;
    case 3:
            $( "#signin" ).removeClass( "activo" );
            $( "#signup" ).removeClass( "activo" );
            $( "#reset" ).addClass( "activo" );
        break;
}
}
    
</script>
    
</body></html>