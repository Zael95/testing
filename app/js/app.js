$(document).ready(function(){

 $(".fancybox").fancybox();
 
}); 

/********************/
$(document).ready(function(){
	//MENU
	$('#btn-open-menu').on('click',function(){
		$('.menu-rp').css('width','100%');
		$('.menu-rp').css('height','100%');
		$('.menu-rp').css('overflow','visible');
	});
	$('#btn-close-menu').on('click',function(){
		$('.menu-rp').css('width','0%');
		$('.menu-rp').css('height','0%');
		$('.menu-rp').css('overflow','hidden');
	});

	$(".fancybox").fancybox();

});

$(document).on("scroll", function(){

    //sacamos el desplazamiento actual de la página
    var desplazamientoActual = $(document).scrollTop();

    //compruebo si debo mostrar el botón
    if(desplazamientoActual > 10){
        // #0047bbd1
    	$('.h-back1').css({
            'background-color':'rgba(255,255,255,1)',
            // border-bottom del header
            // 'border-bottom':'solid 2px #085140',
            'box-shadow':'0px 0px 5px black',
            'color':'#0d6e44'
        });

        $('.h-hover-idioma').css('color','#0d6e44');
        $('.h-slash').css('color','#0d6e44');

        // $('#h-logo').attr('src','app/img/home/logo.png');
        
       
        $(".h-opcs1").hover(function(){
            $('.h-bordebajo1').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.h-bordebajo1').css("border-bottom", "none");
        });
        $(".h-opcs2").hover(function(){
            $('.h-bordebajo2').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.h-bordebajo2').css("border-bottom", "none");
        });
        $(".h-opcs3").hover(function(){
            $('.h-bordebajo3').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.h-bordebajo3').css("border-bottom", "none");
        });
        $(".h-opcs4").hover(function(){
            $('.h-bordebajo4').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.h-bordebajo4').css("border-bottom", "none");
        });
        $(".h-opcs5").hover(function(){
            $('.h-bordebajo5').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.h-bordebajo5').css("border-bottom", "none");
        });

        $(".idiomaActivo").hover(function(){
            $('.idiomaActivo').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.idiomaActivo').css("border-bottom", "none");
        });
        $(".idiomaActivo").hover(function(){
            $('.idiomaActivo').css("border-bottom", "solid 2px #0d6e44");
        }, function(){
            $('.idiomaActivo').css("border-bottom", "none");
        });

        $('.h-active .h-bordebajo').css("border-bottom", "solid 2px rgb(8, 81, 64)");

        $('.idiomaActivo').css("border-bottom", "solid 2px #0d6e44");


/* Fin de Hover height > 10 */

        // $('.h-bordebajo:hover').css({
        //     'border-bottom':'solid 2px #eaf9f8'
        // });

        $('.h-opcs').css('color','#0d6e44');

    	$('.sec-logo').css('width','30%');

    	$('.sec-menu').css('width','70%');

    	$('.logo-menu').css('width','145px');


    }

    if(desplazamientoActual < 10){
        $('.h-back1').css({
            'background-color':'transparent',
            'border-bottom':'none',
        });
        // $('#h-logo').attr('src','app/img/home/logo.png');
    	// $('.h-back1').css('background-color','transparent');
        $('.h-opcs').css('color','white');
        $('.h-slash').css('color','white');
        $('.h-hover-idioma').css('color','white');
        $('.h-back1').css('box-shadow','none');

        $(".h-opcs1").hover(function(){
            $('.h-bordebajo1').css("border-bottom", "solid 2px white");
        }, function(){
            $('.h-bordebajo1').css("border-bottom", "none");
        });
        $(".h-opcs2").hover(function(){
            $('.h-bordebajo2').css("border-bottom", "solid 2px white");
        }, function(){
            $('.h-bordebajo2').css("border-bottom", "none");
        });
        $(".h-opcs3").hover(function(){
            $('.h-bordebajo3').css("border-bottom", "solid 2px white");
        }, function(){
            $('.h-bordebajo3').css("border-bottom", "none");
        });
        $(".h-opcs4").hover(function(){
            $('.h-bordebajo4').css("border-bottom", "solid 2px white");
        }, function(){
            $('.h-bordebajo4').css("border-bottom", "none");
        });
        $(".h-opcs5").hover(function(){
            $('.h-bordebajo5').css("border-bottom", "solid 2px white");
        }, function(){
            $('.h-bordebajo5').css("border-bottom", "none");
        });

        $(".idiomaActivo").hover(function(){
            $('.idiomaActivo').css("border-bottom", "solid 2px white");
        }, function(){
            $('.idiomaActivo').css("border-bottom", "none");
        });
        $(".idiomaActivo").hover(function(){
            $('.idiomaActivo').css("border-bottom", "solid 2px white");
        }, function(){
            $('.idiomaActivo').css("border-bottom", "none");
        });

        $('.h-active .h-bordebajo').css("border-bottom","solid 2px white");

        $('.idiomaActivo').css("border-bottom", "solid 2px white");

    	$('.sec-logo').css('width','');
    	$('.sec-menu').css('width','');
    	$('.logo-menu').css('width','');
       
        // $(".h-opcs").hover(function(){
        //     $('.h-bordebajo').css("border-bottom", "none");
        // }, function(){
        //     $('.h-bordebajo').css("border-bottom", "solid 2px white");
        // });

    }

});


/* Categorias de Productos */
// $(function(){
//     $("#categoria1").on("click", function(){
//         $('#categoria1').css('background','#196e47');
//         $('#categoria2').css('background','#e28323');
//         $('#categoria3').css('background','#e28323');
//     }); 

//     $("#categoria2").on("click", function(){
//         $('#categoria2').css('background','#196e47');
//         $('#categoria1').css('background','#e28323');
//         $('#categoria3').css('background','#e28323');
//     });   

//     $("#categoria3").on("click", function(){
//         $('#categoria3').css('background','#196e47');
//         $('#categoria2').css('background','#e28323');
//         $('#categoria1').css('background','#e28323');
//     }); 
// });
/* Fin de Categorias de Productos */



     