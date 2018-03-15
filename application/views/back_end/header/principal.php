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
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>css/datatables.css">
    <link rel="stylesheet" href="<?=base_url()?>css/dataTables.bootstrap.css">
      
    <!-- Scripts -->
      <script src="<?=base_url()?>js/jquery-3.1.1.min.js"></script>
      <script src="<?=base_url()?>js/jquery-ui.js"></script>
      <script src="<?=base_url()?>js/bootstrap.js"></script>
      <script src="<?=base_url()?>js/toastr.js"></script>
      <script src="<?=base_url()?>js/bootbox.min.js"></script>
      <script src="<?=base_url()?>js/jquery.Rut.js"></script>
      <script src="<?=base_url()?>js/jquery.mask.js"></script>
      <script src="<?=base_url()?>js/typeahead.js"></script>
      <script src="<?=base_url()?>js/bootstrap-datepicker.js"></script>
      <script src="<?=base_url()?>js/datatables.js"></script>
      <script src="<?=base_url()?>js/dataTables.bootstrap.js"></script>

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
        
            ////////////////////////////// V A L I D A R   F E C H A    //////////////////////////////////////////
            
                    function validador_fecha(fecha){
                        var dtCh= "-";
                        var minYear=1900;
                        var maxYear=2100;
                        function isInteger(s){
                            var i;
                            for (i = 0; i < s.length; i++){
                                var c = s.charAt(i);
                                if (((c < "0") || (c > "9"))) return false;
                            }
                            return true;
                        }
                        function stripCharsInBag(s, bag){
                            var i;
                            var returnString = "";
                            for (i = 0; i < s.length; i++){
                                var c = s.charAt(i);
                                if (bag.indexOf(c) == -1) returnString += c;
                            }
                            return returnString;
                        }
                        function daysInFebruary (year){
                            return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
                        }
                        function DaysArray(n) {
                            for (var i = 1; i <= n; i++) {
                                this[i] = 31
                                if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
                                if (i==2) {this[i] = 29}
                            }
                            return this
                        }
                        function isDate(dtStr){
                            var daysInMonth = DaysArray(12)
                            var pos1=dtStr.indexOf(dtCh)
                            var pos2=dtStr.indexOf(dtCh,pos1+1)
                            var strDay=dtStr.substring(0,pos1)
                            var strMonth=dtStr.substring(pos1+1,pos2)
                            var strYear=dtStr.substring(pos2+1)
                            strYr=strYear
                            if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
                            if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
                            for (var i = 1; i <= 3; i++) {
                                if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
                            }
                            month=parseInt(strMonth)
                            day=parseInt(strDay)
                            year=parseInt(strYr)
                            if (pos1==-1 || pos2==-1){
                                return false
                            }
                            if (strMonth.length<1 || month<1 || month>12){
                                return false
                            }
                            if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
                                return false
                            }
                            if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
                                return false
                            }
                            if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
                                return false
                            }
                            return true
                        }
                        if(isDate(fecha)){
                            return true;
                        }else{
                            return false;
                        }
                    }
                //////////////////////////////////////////////////////////////////////////////////////////////////////////

    </script>
      
    <div id="main-wrapper" class="our-agents-content">