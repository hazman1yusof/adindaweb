<div class="ui raised link {{array_random(['red','violet','olive','green','blue','orange','teal','purple','pink','brown','grey','black'])}} card">
	<div class="image">
	  <img src="img/{{$product->images()->first()->image_url}}.jpg" style="min-height: 176px">
	</div>
	<div class="content">
	  <div class="header">
	  	<a class="group" href="product/{{$product->idno}}">{{$product->itemname}}</a>
	  </div>
	  <div class="meta">
	    {{$product->category()->description}}
	  </div>
	  <div class="description">{{str_limit($product->description,200,' ...')}}</div>
	</div>
	<div class="extra content inverted">
	  <span class="left floated">
	      <i class="dollar icon teal"></i>
	      <a>Price :</a><span class="price">{{$product->currprice}}</span>
	  </span>
	  <span class="right floated">
	      <i class="inbox icon teal"></i>
	      <a>Stock :</a>{{$product->qtyonhand}}
	  </span>
	</div>
</div>