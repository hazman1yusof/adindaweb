<div class="ui raised link card">
	<div class="image">
	  <div class="ui blurring inverted dimmer">
	    <div class="content">
	      <div class="center">
	        <div class="ui teal button">Add Friend</div>
	      </div>
	    </div>
	  </div>
	  <img src="img/{{$product->images()->first()->image_url}}.jpg" style="min-height: 176px">
	</div>
	<div class="content">
	  <div class="header">
	  	<a class="group" href="product/{{$product->idno}}">{{$product->itemname}}</a>
	  </div>
	  <div class="meta">
	    Category
	  </div>
	  <div class="description">{{str_limit($product->description,200,' ...')}}</div>
	</div>
	<div class="extra content">
	  <div class="ui star rating" data-rating="3"></div>
	  <span class="right floated">
	      <i class="inbox icon"></i>
	      <a>Stock :</a>{{$product->qtyonhand}}
	  </span>
	</div>
</div>