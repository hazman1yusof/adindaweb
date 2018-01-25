$(document).ready(function() {
	$(".rating").rating();

	var adinda_cart = localStorage.getObj('adinda_cart');

	$.get( "/cart_detail",{cart:adinda_cart}, function() {

	}).done(function(data) {
		data.forEach(function(elem){
			let totprice = numeral(elem.currprice*elem.quantity).format('0,0.00');

			let anItem = '<div class="item" id="item_'+elem.idno+'">'
			    +'<div class="ui small bordered image">'
			      +'<img src="img/'+elem.image+'.jpg" >'
			    +'</div>'
			    +'<div class="content">'
			      +'<div class="header">'+elem.itemname+'</div>'
			      +'<div class="meta">'
			        +'<span class="price">Item Price RM '+numeral(elem.currprice).format('0,0.00')+'</span>'
			      +'</div>'
			      +'<div class="description">'
			        +'<p>'
			        	+'<div class="ui right labeled input">'
						  +'<div class="ui blue label"><a><i class="minus icon"></i></a></div>'
						  +'<input type="text" placeholder="Amount" id="amount" value="'+elem.quantity+'" class="text_quan" data-price="'+elem.currprice+'" data-idno="'+elem.idno+'">'
						  +'<div class="ui blue label"><a><i class="plus icon"></i></a></div>'
						+'</div>'
				        +'<div class="ui right floated icon button red" data-itemid="item_'+elem.idno+'" data-idno="'+elem.idno+'">'
				          +'Remove <i class="remove icon"></i>'
				        +'</div>'
			        +'</p>'
				   +'</div>'
			      +'<div class="extra">'
			        +'<span class="ui label right floated price" id="totprice_'+elem.idno+'" data-totprice="'+elem.currprice*elem.quantity+'" >Total RM '+totprice+'</span>'
			      +'</div>'
			    +'</div>'
			  +'</div>'
			  +'<div class="ui divider"></div>';

			$('#cartSegment').append(anItem);
		})
		$('i.minus.icon').on('click',onMinus);
		$('i.plus.icon').on('click',onPlus);
		$('.ui.right.floated.icon.button.red').on('click',onRemove);
		get_items_price()
	});

	function onMinus(event){
		let item_quan = $(this).parent().parent().next();
		let current_quan = parseInt(item_quan.val());
		after_quan = (current_quan-1 <= 0)? 1 : current_quan-1;
		item_quan.val(after_quan);
		let idno = item_quan.data('idno');

		let price = item_quan.data('price');
		let totprice = numeral(price*after_quan).format('0,0.00');

		$('#totprice_'+idno).data('totprice',price*after_quan);
		$('#totprice_'+idno).text('Total RM '+totprice);

		let obj = localStorage.getObj('adinda_cart');
		obj = (obj==null)?[]:obj;
		
		let idno_arr = obj.pluck('idno');

		if(idno_arr.includes(idno)){
			let idno_pos = idno_arr.indexOf(idno);
			obj[idno_pos].quan = after_quan;
			localStorage.setObj('adinda_cart', obj);
		}

		get_items_price();
	}

	function onPlus(event){
		let item_quan = $(this).parent().parent().prev();
		let current_quan = parseInt(item_quan.val());
		item_quan.val(current_quan+1);
		let idno = item_quan.data('idno');

		let price = item_quan.data('price');
		let totprice = numeral(price*(current_quan+1)).format('0,0.00');

		$('#totprice_'+idno).data('totprice',price*(current_quan+1));
		$('#totprice_'+idno).text('Total RM '+totprice);

		let obj = localStorage.getObj('adinda_cart');
		obj = (obj==null)?[]:obj;
		
		let idno_arr = obj.pluck('idno');

		if(idno_arr.includes(idno)){
			let idno_pos = idno_arr.indexOf(idno);
			obj[idno_pos].quan = current_quan+1;
			localStorage.setObj('adinda_cart', obj);
		}

		get_items_price();
	}

	function onRemove(){
		$('#'+$(this).data('itemid')).next().detach();
		$('#'+$(this).data('itemid')).transition({
			animation: 'fade down',
			onComplete : function() {
				$(this).detach();
				get_items_price();
			}
		});

		let idno = $(this).data('idno');
		let obj = localStorage.getObj('adinda_cart');
		obj = (obj==null)?[]:obj;
		
		let idno_arr = obj.pluck('idno');

		if(idno_arr.includes(idno)){
			let idno_pos = idno_arr.indexOf(idno);
			obj.splice(idno_pos, 1);
			localStorage.setObj('adinda_cart', obj);
		}

		set_topbar_cart_len();
	}

	function get_items_price(){
		let totamt = 0;
		$('.ui.label.right.floated.price').each(function( index ) {
			totamt = totamt + parseFloat($(this).data('totprice'));
		});
		$('#items_price').text(numeral(totamt).format('0,0.00'));
		let grndamt = totamt + parseFloat($('#shipping_price').text());
		$('#grand_amount').text(numeral(grndamt).format('0,0.00'));
	}

});