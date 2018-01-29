$(document).ready(function() {
	$(".rating").rating();
	$('#multi-select').dropdown();
	$('#search').click(function(){
		let urlParam = {
			productcat:$("#multi-select").dropdown("get value"),
			productname:$("input[name='productname']").val()
		}
		window.location.href = "/product?"+$.param(urlParam);
	})

	$('#multiple-slider a').click(function(event){
		event.preventDefault();
		$('#mainimg').attr('src',$(this).children( "img" ).attr('src'));
	})

	$('#addToCart').click(function(){
		let item_id = $(this).data('item_id');
		let obj = localStorage.getObj('adinda_cart');
		obj = (obj==null)?[]:obj;

		let idno_arr = obj.pluck('idno');

		if(!idno_arr.includes(item_id)){
			obj.push({'idno':item_id,'quan':$('#item_quan').val()});
			localStorage.setObj('adinda_cart', obj);
		}

		set_topbar_cart_len();
	});

	$('i.minus.icon').on('click',onMinus);

	$('i.plus.icon').on('click',onPlus);

	$('#addToCart')
	  .popup({
	  	on : 'click', 
	    position : 'top center',
	    title    : 'Thank You',
	    content  : 'Item are added to the cart!'
	  })
});