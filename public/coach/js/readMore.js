	
	$("#read_more").on("click" ,function(e){
		e.preventDefault();
		$('body').animate({scrollTop: $("#read_more").offset().top-75}, 2000);
		$('.third_paragraph, .fourth_paragraph').css('display', 'block');
	   	$(".third_paragraph, .fourth_paragraph").fadeTo(3000, 1);
	   	$('#read_more').css('display', 'none');		
     }); 