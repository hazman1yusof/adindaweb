<div class="ui raised link {{array_random(['red','violet','olive','green','blue','orange','teal','purple','pink','brown','grey','black'])}} card">
	<div class="image">
	  @if (array_has($favourites,$product->idno))
		  <div class="ui red left corner label">
	        <i class="heart icon"></i>
	      </div>
      @endif
	  <img src="img/{{$product->images()->first()->image_url}}.jpg" style="min-height: 176px">
	</div>
	<div class="content">
	  <div class="header">
	  	<a class="group" href="product/{{$product->idno}}">{{$product->itemname}}</a>
	  </div>
	  <div class="meta">
	    {{$product->category()->description}}
	  </div>
	  <div class="description">
	  	<p>{{str_limit($product->description,200,' ...')}}</p>
	  	<p>
	      <i class="dollar icon teal"></i>
	      <b>Price :</b>
	      	@if(Auth::check())
		      	<span class="price wavy-strike">{{$product->currprice}}</span>&nbsp;&nbsp;
		      	<span class="price">{{$product->currprice-$product->currprice*$product->discount/100}}</span>
		    @else
		      	<span class="price">{{$product->currprice}}</span>
		    @endif
	    </p>
	  </div>
	</div>
	<div class="extra content inverted">
	  <span class="left floated">
	      <div class="ui star rating" data-rating="{{$product->rating}}" data-max-rating="5"></div>
	  </span>
	  <span class="right floated">
	      <i class="inbox icon teal"></i>
	      <a>Stock :</a>{{$product->qtyonhand}}
	  </span>
	</div>
</div>