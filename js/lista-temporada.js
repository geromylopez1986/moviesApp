$(document).ready(function() {
    $("#list-close").fadeOut();
    $("#list-tabla").fadeOut();

    $("#list-close2").fadeOut();
    $("#list-tabla2").fadeOut();

    $("#list-close3").fadeOut();
    $("#list-tabla3").fadeOut();

    var desplegar = document.getElementById('list-open');
    var ocultar = document.getElementById('list-close');
    var desplegarI = document.getElementById('list-openI');

    var desplegar2 = document.getElementById('list-open2');
    var ocultar2 = document.getElementById('list-close2');
    var desplegarI2 = document.getElementById('list-openI2');

    var desplegar3 = document.getElementById('list-open3');
    var ocultar3 = document.getElementById('list-close3');
    var desplegarI3 = document.getElementById('list-openI3');

    desplegar.addEventListener('click', desplegarTemporada);
    ocultar.addEventListener('click', ocultarTemporada);
    desplegarI.addEventListener('mouseover', desplegarTemporadaI);

    desplegar2.addEventListener('click', desplegarTemporada2);
    ocultar2.addEventListener('click', ocultarTemporada2);
    desplegarI2.addEventListener('mouseover', desplegarTemporadaI2);

    desplegar3.addEventListener('click', desplegarTemporada3);
    ocultar3.addEventListener('click', ocultarTemporada3);
    desplegarI3.addEventListener('mouseover', desplegarTemporadaI3);


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
