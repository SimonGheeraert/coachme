	$("#kind_one").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');
		$('#assertiviteit_uitleg').css('display', 'block');
	   	$("#assertiviteit_uitleg").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_one").offset().top-75}, 2000);
     }); 

	$("#kind_two").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');	
		$('#effectief_leider').css('display', 'block');
	   	$("#effectief_leider").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_two").offset().top-75}, 2000);
     }); 

	$("#kind_three").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');	
		$('#personal_uitleg').css('display', 'block');
	   	$("#personal_uitleg").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_three").offset().top-75}, 2000);
     });

	$("#kind_four").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');	
		$('#time_uitleg').css('display', 'block');
	   	$("#time_uitleg").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_four").offset().top-75}, 2000);
     });

	$("#kind_five").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');	
		$('#loopbaan_uitleg').css('display', 'block');
	   	$("#loopbaan_uitleg").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_five").offset().top-75}, 2000);
     });

	$("#kind_six").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');	
		$('#financieel_uitleg').css('display', 'block');
	   	$("#financieel_uitleg").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_six").offset().top-75}, 2000);
     });

	$("#kind_seven").on("click" ,function(e){
		e.preventDefault();
		$('.uitleg').css('display', 'none');	
		$('#stress_uitleg').css('display', 'block');
	   	$("#stress_uitleg").fadeTo(3000, 1);	
		$('body').animate({scrollTop: $("#anchor_seven").offset().top-75}, 2000);
     });