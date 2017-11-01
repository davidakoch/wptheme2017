jQuery(document).ready(function($) {

	$(document).on('ready', function(){
//makes the 700px menu appear when you hit menu
		$('#mobile_header').on('click', function(){
			
			console.log("hello");
			$('#mobile_menu').css("height", 500);
			$('#mobile_list').css("display","block");
			$('#mobile_header').css("display","none");


		});//end of document.on ready

	});
});