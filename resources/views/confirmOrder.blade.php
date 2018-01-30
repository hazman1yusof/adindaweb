@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui three top attached steps">
	  <a class="completed step" href="/shipping">
	    <i class="truck icon"></i>
	    <div class="content">
	      <div class="title">Shipping</div>
	      <div class="description">Key in Shipping Information</div>
	    </div>
	  </a>
	  <div class="active step">
	    <i class="info icon"></i>
	    <div class="content">
	      <div class="title">Confirm Order</div>
	      <div class="description">Confirm Order</div>
	    </div>
	  </div>
	  <a class="disabled step">
	    <i class="payment icon"></i>
	    <div class="content">
	      <div class="title">Payment</div>
	      <div class="description">Make Payment</div>
	    </div>
	  </a>
	</div>


	<div class="ui attached segment">
		<div class="ui items segment" id="cartSegment">

		  
		</div>
	</div>

	<div class="ui clearing segment">

		<p>Item Price: RM <span id="items_price">-</span></p>
	    <p>Shipping Price: RM <span id="shipping_price">500</span></p>

		<div class="ui button">Grand Amount: RM <span id="grand_amount">-</span></div>


	    <div class="ui list right floated content">
			<a class="ui blue button" href="/payment">Confirm<i class="right chevron icon"></i></a>
		</div>
	</div>


</div>
@endsection

@section('js')
	<script src="js/confirmOrder.js"></script>
@endsection