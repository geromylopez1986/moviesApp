$(function() {
  $('#cambiar_back1').on('click', cambiarBack1);
  $('#cambiar_next1').on('click', cambiarNext1);
  $('#link1_serie').on('click', listDescargas1);
  $('#link2_serie').on('click', listDescargas2);
  $('#link3_serie').on('click', listDescargas3);


  $('#titulo_dest').fadeOut();

  function cambiarNext1() {
    $('.destc').slideDown();
    $('.recomen').slideUp();
    $('#titulo_recom').fadeOut();
    $('#titulo_dest').fadeIn();
  }
  function cambiarBack1() {
    $('.destc').slideUp();
    $('.recomen').slideDown();
    $('#titulo_recom').fadeIn();
    $('#titulo_dest').fadeOut();
  }

  /*DESPLEGAR MENU DE LA SERIE*/
  $('#tem1').on('click', desplegarTemporada1);
  $('#tem2').on('click', desplegarTemporada2);

  function desplegarTemporada1() {
  	$('#tem1_menu').toggle("linear");
  }

  function desplegarTemporada2() {
  	$('#tem2_menu').toggle("swing");
  }

function listDescargas1() {
  $('.1').toggle("swing");
}
function listDescargas2() {
  $('.2').toggle("swing");
}
function listDescargas3() {
  $('.3').toggle("swing");
}

$('#link_serv1').on('click', ver1);
$('#link_serv2').on('click', ver2);
$('#link_serv3').on('click', ver3);
$('#link_serv4').on('click', ver4);

$('#link_serv1').addClass('activo');

function ver1() {
  $('.navegador_servidor_online ul li').removeClass('activo')
  $(this).addClass('activo');
  $('iframe').fadeOut();
  $('#video_online1').fadeIn();
}
function ver2() {
  $('.navegador_servidor_online ul li').removeClass('activo')
  $(this).addClass('activo');
  $('iframe').fadeOut();
  $('#video_online2').fadeIn();
}
function ver3() {
  $('.navegador_servidor_online ul li').removeClass('activo')
  $(this).addClass('activo');
  $('iframe').fadeOut();
  $('#video_online3').fadeIn();
}
function ver4() {
  $('.navegador_servidor_online ul li').removeClass('activo')
  $(this).addClass('activo');
  $('iframe').fadeOut();
  $('#video_online4').fadeIn();
}

});
