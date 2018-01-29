$(document).ready(function() {
	$('.price').each(function(){
		let price = $(this).text();
		$(this).text("RM "+numeral(price).format('0,0.00'));
	});

	if(location.search.substr(1) != ""){
		var params = parseParams(location.search.substr(1));
		$('#multi-select')
			.dropdown('set selected',params.productcat);
		$("input[name='productname']").val(params.productname);
	}else{
		$('#multi-select')
			.dropdown();
	}

	// $(document).keypress(function(e) {
	//     if(e.which == 13) {
	//         alert('You pressed enter!');
	//     }
	// });
	
	$('#productname').keypress(function(e) {
	    if(e.which == 13) {
	    	e.preventDefault();
	        searching();
	    }
	});
	$('#search').on('click',searching)

	function searching(){
		let urlParam = {
			productcat:$("#multi-select").dropdown("get value"),
			productname:$("input[name='productname']").val()
		}
		window.location.href = "/product?"+$.param(urlParam);
	}

	function parseParams(query){
	  var setValue = function(root, path, value){
	    if(path.length > 1){
	      var dir = path.shift();
	      if( typeof root[dir] == 'undefined' ){
	        root[dir] = path[0] == '' ? [] : {};
	      }

	      arguments.callee(root[dir], path, value);
	    }else{
	      if( root instanceof Array ){
	        root.push(value);
	      }else{
	        root[path] = value;
	      }
	    }
	  };
	  var nvp = query.split('&');
	  var data = {};
	  for( var i = 0 ; i < nvp.length ; i++ ){
	    var pair = nvp[i].split('=');
	    var name = decodeURIComponent(pair[0]);
	    var value = decodeURIComponent(pair[1]);

	    var path = name.match(/(^[^\[]+)(\[.*\]$)?/);
	    var first = path[1];
	    if(path[2]){
	      //case of 'array[level1]' || 'array[level1][level2]'
	      path = path[2].match(/(?=\[(.*)\]$)/)[1].split('][')
	    }else{
	      //case of 'name'
	      path = [];
	    }
	    path.unshift(first);

	    setValue(data, path, value);
	  }
	  return data;
	}
});