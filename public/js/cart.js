$(document).ready(function() {
	$(".rating").rating();

	var adinda_cart = localStorage.getObj('adinda_cart');

	$.get( "/cart_detail",{cart:adinda_cart}, function() {

	}).done(function() {
		
	})
		 

});