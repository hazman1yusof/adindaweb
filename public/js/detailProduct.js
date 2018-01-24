$(document).ready(function() {
	$(".rating").rating();

	$('#multiple-slider a').click(function(event){
		event.preventDefault();
		$('#mainimg').attr('src',$(this).children( "img" ).attr('src'));
	})

	$('#addToCart').click(function(){
		let item_id = $(this).data('item_id');
		let obj = localStorage.getObj('adinda_cart');

		obj = (obj==null)?[]:obj;
		if(!obj.includes(item_id)){
			obj.push(item_id);
			localStorage.setObj('adinda_cart', obj);
		}

		set_topbar_cart_len();
	});

});