	$("#a_one").on("click" ,function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop: $("#box_line").offset().top-75}, 1500);
     });

	$("#a_two").on("click" ,function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop: $("#tarieven").offset().top-75}, 2000);
     });

	$("#link_one").on("click" ,function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop: $("#page_two").offset().top-75}, 2000);
     });

	$("#link_two").on("click" ,function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop: $("#page_three").offset().top-75}, 2000);
     });