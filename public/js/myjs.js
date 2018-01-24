

	Storage.prototype.setObj = function(key, obj) {
    	return this.setItem(key, JSON.stringify(obj))
	}

	Storage.prototype.getObj = function(key) {
	    return JSON.parse(this.getItem(key))
	}

	set_topbar_cart_len();
	function set_topbar_cart_len(){
		let obj = localStorage.getObj('adinda_cart');
		obj = (obj==null)?[]:obj;
		$('#cart_length').text(obj.length);
	}