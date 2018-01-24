$(document).ready(function() {
	$(".rating").rating();

	var adinda_cart = localStorage.getObj('adinda_cart');

	$.get( "/cart_detail",{cart:adinda_cart}, function() {

	}).done(function(data) {
		data.forEach(function(elem){
			let anItem = '<div class="item">'
			    +'<div class="ui small bordered image">'
			      +'<img src="img/'+elem.image+'.jpg" >'
			    +'</div>'
			    +'<div class="content">'
			      +'<div class="header">'+elem.itemname+'</div>'
			      +'<div class="meta">'
			        +'<span class="price">Item Price RM 1200</span>'
			      +'</div>'
			      +'<div class="description">'
			        +'<p>'
			        	+'<div class="ui right labeled mini input">'
						  +'<div class="ui blue label"><a><i class="plus icon"></i></a></div>'
						  +'<input type="text" placeholder="Amount" id="amount" value="'+elem.quan+'">'
						  +'<div class="ui blue label"><a><i class="minus icon"></i></a></div>'
						+'</div>'
				        +'<div class="ui right floated icon button red">'
				          +'Remove <i class="remove icon"></i>'
				        +'</div>'
			        +'</p>'
				   +'</div>'
			      +'<div class="extra">'
			        +'<span class="ui label right floated">Price RM 1600</span>'
			      +'</div>'
			    +'</div>'
			  +'</div>'
			  +'<div class="ui divider"></div>';

			$('#cartSegment').append(anItem);
		})
	})
		 

});