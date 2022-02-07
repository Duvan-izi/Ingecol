/*=============================================
Variables globales
=============================================*/

var item = 0;
var all_items = $("#paginacion li");
var interrumpir_ciclo = false;
var img_producto = $(".img_producto");

/*=============================================
Paginacion
=============================================*/

/* detectar item seleccionado */

$("#paginacion li").click(function () {
	item = $(this).attr("item") - 1;
	desplazamiento(item);
});

/*=============================================
Siguiente ->
=============================================*/

function siguiente() {
	if (item == 3) {
		item = 0;
	} else {
		item++;
	}
	desplazamiento(item);
}

/* detectar flecha */

$("#slide #siguiente").click(function () {
	siguiente();
});

function anterior() {
	if (item == 0) {
		item = 3;
	} else {
		item--;
	}
	desplazamiento(item);
}

/*=============================================
anterior ->
=============================================*/

/* detectar flecha */

$("#slide #anterior").click(function () {
	anterior();
});

/* Desplazamiento items slide */

function desplazamiento(item) {
	$("#slide ul").animate({ left: item * -100 + "%" }, 1000);
	$("#paginacion li").css({ opacity: 0.5 });
	$(all_items[item]).css({ opacity: 1 });
	interrumpir_ciclo = true;
}

/*=============================================
Desplazamiento automatico
=============================================*/

setInterval(function () {
	if (interrumpir_ciclo) {
		interrumpir_ciclo = false;
	} else {
		siguiente();
	}
}, 3000);
