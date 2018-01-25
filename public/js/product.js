$(document).ready(function() {
	$('.price').each(function(){
		let price = $(this).text();
		$(this).text("RM "+numeral(price).format('0,0.00'));
	});
});