/*ENVIAR DATOS EN JSON A LOGIN.PHP*/

$('#link1_serie').on('click', listDescargas1);
$('#link2_serie').on('click', listDescargas2);
$('#link3_serie').on('click', listDescargas3);

jQuery(document).on('submit','#inicio_de_sesion', function(event) {
	event.preventDefault();

	close();

	jQuery.ajax({
		url: 'conexion/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend() {
			$('.boton_iniciar_sesion').val('ESPERE...');
		}
	})
	.done(respuesta => {
		console.log(respuesta);
		if(!respuesta.error){
				if(respuesta.tipo == 'admin'){
					location.href = 'espera?user=admin';

				}else if(respuesta.tipo == 'user'){
					location.href = 'espera?user=user';
				}
		}else{
			setTimeout(() => {
			},3000);
			$('.boton_iniciar_sesion').val('INICIAR SESION 🗝️');
			document.getElementById("error").innerHTML= "Datos erróneos :(";
			$("#contrasena_iniciar_sesion").val("")
		}
	})
	.fail(resp => {
		console.log(resp.responseText);
	})
	.always(() => {
		console.log("complete");
	});
});

/*VALIDANDO REGISTROS DE USUARIO*/

function registrar(){
    const nombre = $("#nombre_registrate").val();
    const correo = $("#correo_registrate").val();
    const contrasena = $("#contrasena_registrate").val();
	const contrasena_confirmar = $("#contrasena_registrate_confirmar").val();

    let nombre_good ="";
    let correo_good ="";
		let contrasena_good ="";

    if(nombre == ""){
    document.getElementById("error_nombre").innerHTML= "Nombre vacio";
	}else{
    document.getElementById("error_nombre").innerHTML= "";
    nombre_good = nombre;
	}

	if(correo == ""){
    document.getElementById("error_correo").innerHTML= "Correo vacio";
	}else{
    document.getElementById("error_correo").innerHTML= "";
    correo_good = correo;
	}

    if(contrasena == ""){
    document.getElementById("error_contrasena").innerHTML= "Contraseña vacio";
	}else{
    document.getElementById("error_contrasena").innerHTML= "";
	if(contrasena != contrasena_confirmar){
    document.getElementById("error_confirmacion").innerHTML= "Las contraseñas no coinciden :(";
	}else if(contrasena == contrasena_confirmar){
    document.getElementById("exito_confirmacion").innerHTML= "Registro exitoso";
		contrasena_good = contrasena;
		}
	}
	//ENVIANDO DATOS A REGISTRAR_USUARIO.PHP
	if (nombre_good != "" && correo_good != "" && contrasena_good != ""){
		setTimeout(() => {
			window.location = `conexion/registrar_usuario?nom=${nombre_good}&correoo=${correo_good}&contra=${contrasena_good}`;
}, 3000);
	}
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

$(document).ready(function(){
  $('#myTable').pageMe({
    pagerSelector:'#myPager',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable2').pageMe({
    pagerSelector:'#myPager2',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable3').pageMe({
    pagerSelector:'#myPager3',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable4').pageMe({
    pagerSelector:'#myPager4',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable5').pageMe({
    pagerSelector:'#myPager5',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable00S1').pageMe({
    pagerSelector:'#myPager00S1',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable00S2').pageMe({
    pagerSelector:'#myPager00S2',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable00S3').pageMe({
    pagerSelector:'#myPager00S3',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable7').pageMe({
    pagerSelector:'#myPager7',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable8').pageMe({
    pagerSelector:'#myPager8',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable9').pageMe({
    pagerSelector:'#myPager9',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable10').pageMe({
    pagerSelector:'#myPager10',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });
});

$(document).ready(function(){
  $('#myTable13').pageMe({
    pagerSelector:'#myPager13',
    activeColor: 'blue',
    prevText:'Anterior',
    nextText:'Siguiente',
    showPrevNext:true,
    hidePageNumbers:false,
    perPage:20
  });


});
