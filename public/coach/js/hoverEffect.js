if ($(window).width() > 710) {

	$( "#a_one" ).hover(
	  function() {
	    $("#number_one").fadeTo(50, 1,"swing");
	});
	 
	$("#a_one").mouseleave(function(){
		$("#number_one").fadeTo("slow", 0, "swing");    	
	});

	$( "#a_two" ).hover(
	  function() {
	    $("#number_three").fadeTo(50, 1,"swing");
	});
	 
	$("#a_two").mouseleave(function(){
		$("#number_three").fadeTo("slow", 0, "swing" );    	
	});	

	$( "#a_three" ).hover(
	  function() {
	    $("#number_five").fadeTo(50, 1,"swing");
	});
	 
	$("#a_three").mouseleave(function(){
		$("#number_five").fadeTo("slow", 0, "swing" );    	
	});	

	$( "#a_four" ).hover(
	  function() {
	    $("#number_seven").fadeTo(50, 1,"swing");
	});
	 
	$("#a_four").mouseleave(function(){
		$("#number_seven").fadeTo("slow", 0, "swing" );    	
	});	

	$( "#a_five" ).hover(
	  function() {
	    $("#number_nine").fadeTo(50, 1,"swing");
	});
	 
	$("#a_five").mouseleave(function(){
		$("#number_nine").fadeTo("slow", 0, "swing" );    	
	});	

}