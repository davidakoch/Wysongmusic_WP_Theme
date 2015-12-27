jQuery(document).ready(function($) {

	$(document).on('ready', function(){

		//makes the 700px menu appear when you hit menu
		$('.js_click_menu').on('click', function(){
			$('.main_header').css("height", 500);
			$('.menu_700px').css("display","block");
			$('.banner_700px').css("display","none");


		});

		//makes the 700px menu banner appear when you hit close
		$('.js_click_banner').on('click', function(){
			$('.banner_700px').css("display","block");
			$('.menu_700px').css("display","none");
			$('.main_header').css("height", 225);
		});



		//makes banner 700px disappear when you stretch the screen beyond 700px

		$(window).on('resize', function(){
			var w = $(window).width(); 
			if (w > 700 && $('.banner_700px').is(':visible')){
				$('.banner_700px').removeAttr('style');
			} 
		});	
		
		//makes menu 700 px disappear when you stretch

		$(window).on('resize', function(){
			var w = $(window).width();
			if (w > 680 && $('.menu_700px').is(':visible')){ 
				$('.menu_700px').removeAttr('style');
				$('.main_header').css("height", 225);
			}	
		});

		//makes banner 700 px reappear 

		$(window).on('resize', function(){
			var w = $(window).width();
			if (w < 700 && $('.banner_700px').is(':hidden')){ 
				$('.banner_700px').removeAttr('style');
			}
		});

		$(window).on('resize', function(){
			var w = $(window).width();
			if (w < 700 && $('.menu_700px').is(':visible')){ 
				$('.banner_700px').css("display","none");
			}
		});

	});//end of document.on ready

});