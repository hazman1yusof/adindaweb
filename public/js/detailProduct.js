$(document).ready(function() {
	$(".rating").rating();

	$('#multiple-slider a').click(function(event){
		event.preventDefault();
		$('#mainimg').attr('src',$(this).children( "img" ).attr('src'));
	})
});