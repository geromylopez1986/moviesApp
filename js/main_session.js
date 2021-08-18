$(document).ready(function(){

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

$(document).ready(function() {
    $("#list-close").fadeOut();
    $("#list-tabla").fadeOut();

    $("#list-close2").fadeOut();
    $("#list-tabla2").fadeOut();

    $("#list-close3").fadeOut();
    $("#list-tabla3").fadeOut();

    var desplegarS = document.getElementById('list-open');
    var ocultarS = document.getElementById('list-close');
    var desplegarIS = document.getElementById('list-openI');

    var desplegar2S = document.getElementById('list-open2');
    var ocultar2S = document.getElementById('list-close2');
    var desplegarI2S = document.getElementById('list-openI2');

    var desplegar3S = document.getElementById('list-open3');
    var ocultar3S = document.getElementById('list-close3');
    var desplegarI3S = document.getElementById('list-openI3');

    desplegarS.addEventListener('click', desplegarTemporada);
    ocultarS.addEventListener('click', ocultarTemporada);
    desplegarIS.addEventListener('mouseover', desplegarTemporadaI);

    desplegar2S.addEventListener('click', desplegarTemporada2);
    ocultar2S.addEventListener('click', ocultarTemporada2);
    desplegarI2S.addEventListener('mouseover', desplegarTemporadaI2);

    desplegar3S.addEventListener('click', desplegarTemporada3);
    ocultar3S.addEventListener('click', ocultarTemporada3);
    desplegarI3S.addEventListener('mouseover', desplegarTemporadaI3);


    function desplegarTemporada() {
        $("#list-tabla").fadeIn(2000);
        $("#list-open").addClass('activoLIst');
        $("#list-openI").fadeOut(1000);
        $("#list-close").fadeIn(1000);
    }

    function desplegarTemporadaI() {
        $("#list-tabla").slideToggle(500);
        $("#list-open").addClass('activoLIst');
        $("#list-openI").fadeOut(1000);
        $("#list-close").fadeIn(1000);
    }

    function ocultarTemporada() {
        $("#list-tabla").fadeOut(2000);
        $("#list-open").removeClass('activoLIst');
        $("#list-close").fadeOut(1000);
        $("#list-openI").fadeIn(1000);
    }

    function desplegarTemporada2() {
        $("#list-tabla2").fadeIn(2000);
        $("#list-open2").addClass('activoLIst');
        $("#list-openI2").fadeOut(1000);
        $("#list-close2").fadeIn(1000);
    }

    function desplegarTemporadaI2() {
        $("#list-tabla2").slideToggle(500);
        $("#list-open2").addClass('activoLIst');
        $("#list-openI2").fadeOut(1000);
        $("#list-close2").fadeIn(1000);
    }

    function ocultarTemporada2() {
        $("#list-tabla2").fadeOut(2000);
        $("#list-open2").removeClass('activoLIst');
        $("#list-close2").fadeOut(1000);
        $("#list-openI2").fadeIn(1000);
    }

    function desplegarTemporada3() {
        $("#list-tabla3").fadeIn(2000);
        $("#list-open3").addClass('activoLIst');
        $("#list-openI3").fadeOut(1000);
        $("#list-close3").fadeIn(1000);
    }

    function desplegarTemporadaI3() {
        $("#list-tabla3").slideToggle(500);
        $("#list-open3").addClass('activoLIst');
        $("#list-openI3").fadeOut(1000);
        $("#list-close3").fadeIn(1000);
    }

    function ocultarTemporada3() {
        $("#list-tabla3").fadeOut(2000);
        $("#list-open3").removeClass('activoLIst');
        $("#list-close3").fadeOut(1000);
        $("#list-openI3").fadeIn(1000);
    }
});


});
