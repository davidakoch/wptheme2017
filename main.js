jQuery(document).ready(function($) {

	$(document).on('ready', function(){
//makes the mobile list appear when you hit the menu button
		$('#mobile_header').on('click', function(){
			$('#mobile_menu').css("height", 500);
			$('#mobile_list').css("display","block");
			$('#mobile_header').css("display","none");
		});

//brings back the menu button when you hit the menu list
		$('#mobile_list').on('click', function(){
			$('#mobile_header').css("display","block");
			$('#mobile_list').css("display", "none");
		});

	});
});