

	Storage.prototype.setObj = function(key, obj) {
    	return this.setItem(key, JSON.stringify(obj))
	}

	Storage.prototype.getObj = function(key) {
	    return JSON.parse(this.getItem(key))
	}

	Array.prototype.pluck = function(key) {
	  return this.map(function(object) { return object[key]; });
	};

	set_topbar_cart_len();
	function set_topbar_cart_len(){
		let obj = localStorage.getObj('adinda_cart');
		obj = (obj==null)?[]:obj;
		$('#cart_length').text(obj.length);
	}

	function onMinus(event){
		let item_quan = $(this).parent().parent().next();
		let current_quan = parseInt(item_quan.val());
		after_quan = (current_quan-1 <= 0)? 1 : current_quan-1;
		item_quan.val(after_quan);
	}

	function onPlus(event){
		let item_quan = $(this).parent().parent().prev();
		let current_quan = parseInt(item_quan.val());
		item_quan.val(current_quan+1);
	}