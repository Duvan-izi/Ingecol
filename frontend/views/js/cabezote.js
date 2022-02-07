/*=============================================
Cabezote
=============================================*/

/*-----Abrir y cerrar menu de las categorias----- */

$("#btn_categorias").click(function () {

	if (window.matchMedia("(max-width:390px)").matches){
		$("#btn_categorias").after($("#categorias").slideToggle("fast"));
		$(".bar_down").css({
			"height": "110px"
		})

	}else if (window.matchMedia("(max-width:767px)").matches) {
		$("#btn_categorias").after($("#categorias").slideToggle("fast"));
		$(".bar_down").css({
			"height": "160px"	
		})
	}else {
		$("#cabezote").after($("#categorias").slideToggle("fast"));
		$(".bar_down").css({
			"height": "90px"
		})
	}
});
