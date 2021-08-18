$(function() {

  $('.cap1').addClass('activo');
  $('.cap_titulos h5').hide();
  $('.cap_title1').show();
  
/*EVENTOS*/
$('#cap_1').on('click', cambiarCap1);
$('#cap_2').on('click', cambiarCap2);
$('#cap_3').on('click', cambiarCap3);
$('#cap_4').on('click', cambiarCap4);
$('#cap_5').on('click', cambiarCap5);
$('#cap_6').on('click', cambiarCap6);
$('#cap_7').on('click', cambiarCap7);
$('#cap_8').on('click', cambiarCap8);
/*FUNCIONES*/
function cambiarCap1() {
  $('.video-container iframe').fadeOut();
  $('#video1').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title1').show();
}
function cambiarCap2() {
  $('.video-container iframe').fadeOut();
  $('#video2').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title2').show();
}
function cambiarCap3() {
  $('.video-container iframe').fadeOut();
  $('#video3').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title3').fadeIn();
}
function cambiarCap4() {
  $('.video-container iframe').fadeOut();
  $('#video4').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title4').fadeIn();
}
function cambiarCap5() {
  $('.video-container iframe').fadeOut();
  $('#video5').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title5').fadeIn();
}
function cambiarCap6() {
  $('.video-container iframe').fadeOut();
  $('#video6').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title6').fadeIn();
}
function cambiarCap7() {
  $('.video-container iframe').fadeOut();
  $('#video7').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title7').fadeIn();
}
function cambiarCap8() {
  $('.video-container iframe').fadeOut();
  $('#video8').slideToggle();
  $('#tem1_menu li').removeClass('activo');
  $(this).addClass('activo');
  $('.cap_titulos h5').fadeOut();
    $('.cap_title8').fadeIn();
}
});
