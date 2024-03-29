;(function($) {

"use strict";

var $body = $('body');
var $head = $('head');
var $header = $('#header');
var transitionSpeed = 300;
var pageLoaded = setTimeout(addClassWhenLoaded, 1000);
var marker = 'img/marker.png';



// Mediaqueries
// ---------------------------------------------------------
var XS = window.matchMedia('(max-width:767px)');
var SM = window.matchMedia('(min-width:768px) and (max-width:991px)');
var MD = window.matchMedia('(min-width:992px) and (max-width:1199px)');
var LG = window.matchMedia('(min-width:1200px)');
var XXS = window.matchMedia('(max-width:480px)');
var SM_XS = window.matchMedia('(max-width:991px)');
var LG_MD = window.matchMedia('(min-width:992px)');



// Touch
// ---------------------------------------------------------
var dragging = false;

$body.on('touchmove', function() {
  dragging = true;
});

$body.on('touchstart', function() {
  dragging = false;
});



// Responsive Tabs
// ---------------------------------------------------------

$('.responsive-tabs').responsiveTabs();

// UOU Selects
  // ---------------------------------------------------------
  $.fn.uouCustomSelect = function () {
    var $select = $(this);
      
      
      /////////////////////////////////////// E D U C A C I O N  ///////////////////////////////////////////////////
      var id = '';
      if($select.attr( "name" ) == "mes_inicio_educacion_basica_sigesco_laboral"){ id = "select_mes_inicio_basica";}
      if($select.attr( "name" ) == "anno_inicio_educacion_basica_sigesco_laboral"){ id = "select_anno_inicio_basica";}
      if($select.attr( "name" ) == "mes_fin_educacion_basica_sigesco_laboral"){ id = "select_mes_fin_basica";}
      if($select.attr( "name" ) == "anno_fin_educacion_basica_sigesco_laboral"){ id = "select_anno_fin_basica";}
      if($select.attr( "name" ) == "situacion_educacion_basica_sigesco_laboral"){ id = "select_situacion_basica";}
      //EDITAR
      if($select.attr( "name" ) == "mes_inicio_educacion_basica_editar_sigesco_laboral"){ id = "select_mes_inicio_editar_basica";}
      if($select.attr( "name" ) == "anno_inicio_educacion_basica_editar_sigesco_laboral"){ id = "select_anno_inicio_editar_basica";}
      if($select.attr( "name" ) == "mes_fin_educacion_basica_editar_sigesco_laboral"){ id = "select_mes_fin_editar_basica";}
      if($select.attr( "name" ) == "anno_fin_educacion_basica_editar_sigesco_laboral"){ id = "select_anno_fin_editar_basica";}
      if($select.attr( "name" ) == "situacion_educacion_basica_editar_sigesco_laboral"){ id = "select_situacion_editar_basica";}
      
      if($select.attr( "name" ) == "mes_inicio_educacion_media_sigesco_laboral"){ id = "select_mes_inicio_media";}
      if($select.attr( "name" ) == "anno_inicio_educacion_media_sigesco_laboral"){ id = "select_anno_inicio_media";}
      if($select.attr( "name" ) == "mes_fin_educacion_media_sigesco_laboral"){ id = "select_mes_fin_media";}
      if($select.attr( "name" ) == "anno_fin_educacion_media_sigesco_laboral"){ id = "select_anno_fin_media";}
      if($select.attr( "name" ) == "situacion_educacion_media_sigesco_laboral"){ id = "select_situacion_media";}
      //EDITAR
      if($select.attr( "name" ) == "mes_inicio_educacion_media_editar_sigesco_laboral"){ id = "select_mes_inicio_editar_media";}
      if($select.attr( "name" ) == "anno_inicio_educacion_media_editar_sigesco_laboral"){ id = "select_anno_inicio_editar_media";}
      if($select.attr( "name" ) == "mes_fin_educacion_media_editar_sigesco_laboral"){ id = "select_mes_fin_editar_media";}
      if($select.attr( "name" ) == "anno_fin_educacion_media_editar_sigesco_laboral"){ id = "select_anno_fin_editar_media";}
      if($select.attr( "name" ) == "situacion_educacion_media_editar_sigesco_laboral"){ id = "select_situacion_editar_media";}
      
      if($select.attr( "name" ) == "mes_inicio_educacion_universitaria_sigesco_laboral"){ id = "select_mes_inicio_universitaria";}
      if($select.attr( "name" ) == "anno_inicio_educacion_universitaria_sigesco_laboral"){ id = "select_anno_inicio_universitaria";}
      if($select.attr( "name" ) == "mes_fin_educacion_universitaria_sigesco_laboral"){ id = "select_mes_fin_universitaria";}
      if($select.attr( "name" ) == "anno_fin_educacion_universitaria_sigesco_laboral"){ id = "select_anno_fin_universitaria";}
      if($select.attr( "name" ) == "situacion_educacion_universitaria_sigesco_laboral"){ id = "select_situacion_universitaria";}
      //EDITAR
      if($select.attr( "name" ) == "mes_inicio_educacion_universitaria_editar_sigesco_laboral"){ id = "select_mes_inicio_editar_universitaria";}
      if($select.attr( "name" ) == "anno_inicio_educacion_universitaria_editar_sigesco_laboral"){ id = "select_anno_inicio_editar_universitaria";}
      if($select.attr( "name" ) == "mes_fin_educacion_universitaria_editar_sigesco_laboral"){ id = "select_mes_fin_editar_universitaria";}
      if($select.attr( "name" ) == "anno_fin_educacion_universitaria_editar_sigesco_laboral"){ id = "select_anno_fin_editar_universitaria";}
      if($select.attr( "name" ) == "situacion_educacion_universitaria_editar_sigesco_laboral"){ id = "select_situacion_editar_universitaria";}
      
      if($select.attr( "name" ) == "mes_inicio_educacion_posterior_sigesco_laboral"){ id = "select_mes_inicio_posterior";}
      if($select.attr( "name" ) == "anno_inicio_educacion_posterior_sigesco_laboral"){ id = "select_anno_inicio_posterior";}
      if($select.attr( "name" ) == "mes_fin_educacion_posterior_sigesco_laboral"){ id = "select_mes_fin_posterior";}
      if($select.attr( "name" ) == "anno_fin_educacion_posterior_sigesco_laboral"){ id = "select_anno_fin_posterior";}
      if($select.attr( "name" ) == "situacion_educacion_posterior_sigesco_laboral"){ id = "select_situacion_posterior";}
      if($select.attr( "name" ) == "tipo_posterior_educacion_posterior_sigesco_laboral"){ id = "select_tipo_posterior";}
      //EDITAR
      if($select.attr( "name" ) == "mes_inicio_educacion_posterior_editar_sigesco_laboral"){ id = "select_mes_inicio_editar_posterior";}
      if($select.attr( "name" ) == "anno_inicio_educacion_posterior_editar_sigesco_laboral"){ id = "select_anno_inicio_editar_posterior";}
      if($select.attr( "name" ) == "mes_fin_educacion_posterior_editar_sigesco_laboral"){ id = "select_mes_fin_editar_posterior";}
      if($select.attr( "name" ) == "anno_fin_educacion_posterior_editar_sigesco_laboral"){ id = "select_anno_fin_editar_posterior";}
      if($select.attr( "name" ) == "situacion_educacion_posterior_editar_sigesco_laboral"){ id = "select_situacion_editar_posterior";}
      if($select.attr( "name" ) == "tipo_posterior_educacion_posterior_editar_sigesco_laboral"){ id = "select_tipo_editar_posterior";}
      if($select.attr( "name" ) == "nivel_educacion_sigesco_laboral"){ id = "select_nivel_educacion";}
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      
      /////////////////////////////////////// E X P E R I E N C I A   L A B O R A L  ///////////////////////////////////////////////////////
      if($select.attr( "name" ) == "tipo_experiencia_laboral_sigesco_laboral"){ id = "tipo_experiencia_laboral_sigesco_laboral";}
      if($select.attr( "name" ) == "tipo_experiencia_laboral_editar_sigesco_laboral"){ id = "tipo_experiencia_laboral_editar_sigesco_laboral";}
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      
      /////////////////////////////////////////////////// D O C U M E N T A C I O N  ///////////////////////////////////////////////////////
      if($select.attr( "name" ) == "tipo_documentacion"){ id = "tipo_documentacion";}
      
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////// E J E C U T I V O  ///////////////////////////////////////////////////////
      if($select.attr( "name" ) == "tipo_ejecutivo_sigesco_laboral"){ id = "tipo_ejecutivo_sigesco_laboral";}
      if($select.attr( "name" ) == "sucursal_ejecutivo_sigesco_laboral"){ id = "sucursal_ejecutivo_sigesco_laboral";}
      if($select.attr( "name" ) == "lista_listas_ejecutivo"){ id = "lista_listas_ejecutivo";}
      if($select.attr( "name" ) == "tipo_documento_solicitar"){ id = "tipo_documento_solicitar";}
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////// P R O D U C T O  ///////////////////////////////////////////////////////
      if($select.attr( "name" ) == "producto_bodega_sigesco"){ id = "producto_bodega_sigesco";}
      if($select.attr( "name" ) == "bodega_sigesco"){ id = "bodega_sigesco";}
      if($select.attr( "name" ) == "categoria_producto_bodega"){ id = "categoria_producto_bodega";}
      if($select.attr( "name" ) == "subcategoria_producto_bodega"){ id = "subcategoria_producto_bodega";}
      if($select.attr( "name" ) == "producto_bodega_sigesco"){ id = "producto_bodega_sigesco";}
      if($select.attr( "name" ) == "faena_minera_bodega_sigesco"){ id = "faena_minera_bodega_sigesco";}
      if($select.attr( "name" ) == "mandante_faena_minera_sigesco"){ id = "mandante_faena_minera_sigesco";}
      if($select.attr( "name" ) == "responsable_faena_minera_bodega"){ id = "responsable_faena_minera_bodega";}
      if($select.attr( "name" ) == "quien_retira_bodega_sigesco"){ id = "quien_retira_bodega_sigesco";}
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////// B O D E G A   /////////////////////////////////////////////////////////////
      if($select.attr( "name" ) == "bodega_sigesco"){ id = "bodega_sigesco";}
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $select.wrap('<div id="'+id+'" class="uou-custom-select"></div>');

    var $container = $select.parent('.uou-custom-select');

    $container.append('<ul id="select_'+id+'" class="select-clone"></ul>');

    var $list = $container.children('.select-clone'),
      placeholder = $select.data('placeholder') ? $select.data('placeholder') : $select.find('option:eq(0)').text();
      
      
      
    $('<input id="input_'+id+'" class="value-holder" type="text" disabled="disabled" placeholder="' + placeholder + '"><div class="trigger"><i class="fa fa-caret-down"></i></div>').insertBefore($list);

    var $valueHolder = $container.children('.value-holder');

    // Create clone list
    $select.find('option').each(function () {
      var $this = $(this);
        
      if($this.attr( "name" ) == 'inicio_option'){
            $list.append('<li style="display:none"  data-value="' + $this.val() + '">' + $this.text() + '</li>');
      }else{
          if($this.attr( "tipo" ) == 'estudio'){ 
              $list.append('<li data-value="' + $this.val() + '" onClick="visual_estudio(\''+$this.val()+'\')">' + $this.text() + '</li>');
          }else{
              $list.append('<li data-value="' + $this.val() + '">' + $this.text() + '</li>');
          }
      }
    });

    // Toggle list
    $container.on('click', function () {
        if(!$container.hasClass("readonly")){
            $container.toggleClass('active');
            $list.slideToggle(250);
        }
      
    });

    // Option Select
    $list.children('li').on('click', function () {
      var $this = $(this);
      $valueHolder.val($this.text());
      $valueHolder.attr("valor",$this.data('value'));
      $select.find('option[value="' + $this.data('value') + '"]').prop('selected', true);
    });

    // Hide
    $container.on('clickoutside touchendoutside', function () {
      if (!dragging) {
        $container.removeClass('active');
        $list.slideUp(250);
      }
    });

    // Links
    if ($select.hasClass('links')) {
      $select.on('change', function () {
        window.location.href = select.val();
      });
    }

    $select.on('change', function () {
      cosole.log(chnaged);
      cosole.log($(this).val());
    });
  };

  $('select').each(function () {
    $(this).uouCustomSelect();
  });

  // Delete tables day
  var $DeleteTable = $('.operating-table .table-content .table-content-single .delete a');

  $DeleteTable.on('click',function(e){
    e.preventDefault()
    $(this).parent().parent().hide();
  });


  // custom radio button input

  $.fn.uouRadioInput = function(){

    var self = $(this),
    input = self.find( 'input' ),
    group = input.attr( 'name' );

    // INITIAL STATE
    if ( input.is( ':checked' ) ) {
      self.addClass( 'active' );
    }

    // CHANGE STATE
    input.change(function(){
      if ( group ) {
        $( '.radio-input input[name="' + group + '"]' ).parent().removeClass( 'active' );
      }
      if ( input.is( ':checked' ) ) {
        self.addClass( 'active' );
      }
    });

  };

  $( '.radio-input' ).each(function(){
    $(this).uouRadioInput();
  });





    (function () {
      var count = 0;

      var $LoacationHeight =  $('.single-content.location-content,.single-content.location-content label,.single-content.location-content .location-details');
      var $AddDepertment = $('.single-content.contact-content,.single-content.contact-content > label,.single-content.contact-content .contacts');

      $('.location-details a').click(function (e) {
        count += 1;
        e.preventDefault();

        if (count == 1) {
          $('.location-three').removeClass('hide').addClass('show');
          $LoacationHeight.css('height', '320px');

        }

        if (count == 2) {
          $('.location-four').removeClass('hide').addClass('show');
          $LoacationHeight.css('height', '410px');

        }
      });

      $('.add-dept a').click(function (e) {
        count += 1;
        e.preventDefault();

        if (count == 1) {
          $('#department-3').removeClass('hide').addClass('show');
          $AddDepertment.css('height', '245px');

        }

        if (count == 2) {
          $('#department-4').removeClass('hide').addClass('show');
          $AddDepertment.css('height', '290px');

        }
      });
    })();



    var $CaniddateSkillToggle = $('.candidate-skills a');

    $('.candidate-skills .toggle a').on('click', function(events){
      events.preventDefault(),
      $(this).toggleClass('active'),
      $(this).parent().next().children('.toggle-content').slideToggle(300);


    });

    $('.accordion-content .toggle a').on('click', function(events){
      events.preventDefault(),
      $(this).toggleClass('active'),
      $(this).parent().parent().siblings('.toggle-content').slideToggle(300);


    });

    $('.search-skill-select .accordion-content .toggle a').on('click', function(events){
      events.preventDefault(),
      $(this).parent().toggleClass('active'),
      $(this).parent().next('.toggle-content').slideToggle(300),
      $(this).parent().siblings('.toggle-content').slideUp(300);


    });


    // Accordion
      // ---------------------------------------------------------
      $('.accordion').each(function () {

        $(this).find('ul > li > a').on('click', function (event) {
          event.preventDefault();

          var $this = $(this),
            $li = $this.parent('li'),
            $div = $this.siblings('div'),
            $siblings = $li.siblings('li').children('div');

          if (!$li.hasClass('active')) {
            $siblings.slideUp(250, function () {
              $(this).parent('li').removeClass('active');
            });

            $div.slideDown(250, function () {
              $li.addClass('active');
            });
          } else {
            $div.slideUp(250, function () {
              $li.removeClass('active');
            });
          }
        });

      });



    $('.search-skill-select > a').on('click', function(events){
      events.preventDefault(),
      $('.search-skill-select .accordion-content').slideToggle(300);


    });




    // candidate-registration ui slider for skills.
    $( "#slider-skill-first" ).slider({
      range: "max",
          min: 0,
          max: 100,
          value: 70,
          slide: function( event, ui ) {
            $( "#amount-first" ).val( ui.value + "%" );
          }
      });

      $( "#amount-first" ).val( $( "#slider-skill-first" ).slider( "value" ) + "%" );

  $( "#slider-skill-second" ).slider({
    range: "max",
        min: 0,
        max: 100,
        value: 50,
        slide: function( event, ui ) {
          $( "#amount-second" ).val( ui.value + "%" );
        }
    });

    $( "#amount-second" ).val( $( "#slider-skill-second" ).slider( "value" ) + "%" );

    $( "#slider-skill-third" ).slider({
      range: "max",
          min: 0,
          max: 100,
          value: 80,
          slide: function( event, ui ) {
            $( "#amount-third" ).val( ui.value + "%" );
          }
      });

      $( "#amount-third" ).val( $( "#slider-skill-third" ).slider( "value" ) + "%" );


      $( "#slider-skill-job" ).slider({
        range: "max",
            min: 0,
            max: 100,
            value: 80,
            slide: function( event, ui ) {
              $( "#amount-job" ).val( ui.value + "%" );
            }
        });

        $( "#amount-job" ).val( $( "#slider-skill-job" ).slider( "value" ) + "%" );



      // jq ui datepicker

      /*$( "#datepicker-start" ).datepicker();*/
      //$( "#datepicker-end" ).datepicker();
      /*$( "#datepicker-entry" ).datepicker();*/

      $('.toggle-content-client').hide();


      $('.toggle-details .info').on('click', function(e){
        e.preventDefault();

        $(this).parent().siblings('.toggle-content-client').slideToggle(350);
        $(this).parent().toggleClass('active');

      });




// Touch
var dragging = false;

$body.on('touchmove', function() {
  dragging = true;
});

$body.on('touchstart', function() {
  dragging = false;
});



function mobileHeaderSearchToggle(SM_XS) {
  if (!SM_XS.matches) {
    $headerSearchToggle.removeAttr('style');
  }
}

// Maps
// ---------------------------------------------------------
if ($('#contact-page-map').length > 0) {
  new Maplace({
    map_div: '#contact-page-map',
    controls_type: 'list',
    map_options: {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
      zoom: 15
    },
    locations: [
      {
        lat: -33.445793,
        lon: -70.6506052,
        title: 'SIGESCO SANTIAGO',
        icon: marker
      }
    ]
  }).Load();
}

if ($('#jobs-page-map').length > 0) {
  new Maplace({
    map_div: '#jobs-page-map',
    map_options: {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
      zoom: 15
    },
    locations: [
      {
        lat: -27.3632204,
        lon: -70.34263570000002,
        title: 'SIGESCO COPIAPÓ',
        icon: marker
      }
    ]
  }).Load();
}

// Advanced Search
// ---------------------------------------------------------
var $advancedSearchBar = $('.header-search-bar');

$advancedSearchBar.each(function () {
  var $this = $(this);

  $this.find('.toggle').on('click', function (event) {
    event.preventDefault();

    if (!$this.hasClass('active')) {
      $this.addClass('active');
      $this.find('.advanced-form').slideDown();
    } else {
      $this.removeClass('active');
      $this.find('.advanced-form').slideUp();
    }
  });

  function moveAdvancedBarSelect(XS) {
    if (XS.matches) {
      $this.find('.advanced-form .container').prepend($this.find('.hsb-select'));
    } else {
      $this.find('.hsb-select').appendTo($this.find('.hsb-container'));
    }
  }

  moveAdvancedBarSelect(XS);
  XS.addListener(moveAdvancedBarSelect);





});


$(document).ready(function() {

  if ($("#owl-demo").length > 0) {
    $("#owl-demo").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: true
    });
  }
});








// Responsive Videos
// ---------------------------------------------------------
if ($.fn.fitVids) {
  $('.fitvidsjs').fitVids();
}






// Advanced Search Range Slider
// ---------------------------------------------------------
if ($.fn.slider) {
  $('.header-search-bar .range-slider .slider, .header-search .range-slider .slider').each(function () {
    var $this = $(this),
      min = $this.data('min'),
      max = $this.data('max'),
      current = $this.data('current');

    $this.slider({
      range: 'min',
      min: min,
      max: max,
      step: 1,
      value: current,
      slide: function (event, ui) {
        $this.parent('.range-slider').find('.last-value > span').html(ui.value);
      }
    });
  });
}



// Accordion
// ---------------------------------------------------------
$('.accordion').each(function () {

  $(this).find('ul > li > a').on('click', function (event) {
    event.preventDefault();

    var $this = $(this),
      $li = $this.parent('li'),
      $div = $this.siblings('div'),
      $siblings = $li.siblings('li').children('div');

    if (!$li.hasClass('active')) {
      $siblings.slideUp(250, function () {
        $(this).parent('li').removeClass('active');
      });

      $div.slideDown(250, function () {
        $li.addClass('active');
      });
    } else {
      $div.slideUp(250, function () {
        $li.removeClass('active');
      });
    }
  });

});


// Candidates Item
// ---------------------------------------------------------
$('.candidates-item').each(function () {
  var $item = $(this),
    $content = $item.find('.content'),
    $toggle = $item.find('.top-btns .toggle');

  $toggle.on('click', function (event) {
    event.preventDefault();

    if ($item.hasClass('active')) {
      $content.slideUp();
      $item.removeClass('active');
      $toggle.removeClass('fa-minus').addClass('fa-plus');
    } else {
      $content.slideDown();
      $item.addClass('active');
      $toggle.removeClass('fa-plus').addClass('fa-minus');
    }
  });

  $item.find('.read-more').on('click', function (event) {
    event.preventDefault();

    $content.slideDown();
    $item.addClass('active');
    $toggle.removeClass('fa-plus').addClass('fa-minus');
  });
});




// Jobs Filters Range Slider
// ---------------------------------------------------------
if ($.fn.slider) {
  $('.jobs-filter-widget .range-slider .slider, .compare-price-filter-widget .range-slider .slider').each(function () {
    var $this = $(this),
      min = $this.data('min'),
      max = $this.data('max');

    $this.slider({
      range: true,
      min: min,
      max: max,
      step: 1,
      values: [min, max],
      slide: function (event, ui) {
        $(this).parent().find('.first-value').text(ui.values[0]);
        $(this).parent().find('.last-value').text(ui.values[1]);
      }
    });
  });
}

// Jobs Filters List
// ---------------------------------------------------------
$('.jobs-filter-widget .filter-list, .compare-price-filter-widget .filter-list').each(function () {
  var $this = $(this),
    $toggle = $this.siblings('.toggle');

  $this.find('li').each(function () {
    var $this = $(this);

    if ($this.children('ul').length > 0) {
      $this.addClass('has-submenu');
    }
  });

  $toggle.on('click', function (event) {
    event.preventDefault();

    $this.slideToggle();
    $toggle.toggleClass('active');
  });

  $this.find('.has-submenu > a').on('click', function (event) {
    event.preventDefault();

    var $thisLi = $(this).parent('li'),
      $thisUl = $thisLi.children('ul');

    if (!$thisLi.hasClass('active')) {
      $thisLi.addClass('active');
      $thisUl.slideDown();
    } else  {
      $thisLi.removeClass('active');
      $thisUl.slideUp().find('.has-submenu').removeClass('active').children('ul').slideUp();
    }
  });
});


// Jobs Views
// ---------------------------------------------------------
$('.jobs-view-toggle').each(function () {
  var $this = $(this),
    $items = $this.closest('.page-content').find('.jobs-item');

  $this.find('.btn').on('click', function (event) {
    event.preventDefault();

    var $this = $(this),
      layout = $this.data('layout');

    if (!$this.hasClass('active')) {
      if (layout == 'with-thumb') {
        $items.removeClass('compact').addClass('with-thumb');
      } else if (layout == 'compact') {
        $items.removeClass('with-thumb').addClass('compact');
      } else {
        $items.removeClass('with-thumb compact');
      }

      $this.addClass('active').parent('li').siblings('li').children('a').removeClass('active');
    }
  });
});

// Search/Filter Toggle
// ---------------------------------------------------------
$('.jobs-search-widget, .jobs-filter-widget').each(function () {
  var $this = $(this);

  $this.find('.widget-title').on('click', function (event) {
    if (XS.matches) {
      event.preventDefault();

      $this.find('.widget-content').slideToggle();
    }
  });
});

function searchFilterToggle(XS) {
  if (!XS.matches) {
    $('.jobs-search-widget .widget-content, .jobs-filter-widget .widget-content').removeAttr('style');
  }
}

searchFilterToggle(XS);
XS.addListener(searchFilterToggle);




function addClassWhenLoaded() {
  if (!$body.hasClass('loaded')) {
    $body.addClass('loaded');
  }
}



}(jQuery));




