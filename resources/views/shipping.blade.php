@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui three top attached steps">
	  <div class="active step">
	    <i class="truck icon"></i>
	    <div class="content">
	      <div class="title">Shipping</div>
	      <div class="description">Key in Shipping Information</div>
	    </div>
	  </div>
	  <div class="disabled step">
	    <i class="info icon"></i>
	    <div class="content">
	      <div class="title">Confirm Order</div>
	      <div class="description">Confirm Order</div>
	    </div>
	  </div>
	  <div class="disabled step">
	    <i class="payment icon"></i>
	    <div class="content">
	      <div class="title">Payment</div>
	      <div class="description">Make Payment</div>
	    </div>
	  </div>
	</div>


	<div class="ui attached segment">
	  <form class="ui form">

		  <h4 class="ui dividing header">Shipping Information</h4>

		  <div class="field">
		    <label>Name</label>

		    <div class="two fields">
		      <div class="field">
		        <input type="text" name="f_name" placeholder="First Name">
		      </div>

		      <div class="field">
		        <input type="text" name="l_name" placeholder="Last Name">
		      </div>

		    </div>

		  </div>

		    <div class="fields">

		      <div class="twelve wide field">
		    	<label>Billing Address</label>
		      	<textarea placeholder="Address" rows="4" name="address"></textarea>
		      </div>

		      <div class="four wide field">
		    	<label>Postcode</label>
		        <input type="text" name="postcode" placeholder="Postcode">
		      </div>

		    </div>

		  <div class="two fields">

		    <div class="field">
		    	<label>City</label>
		        <input type="text" name="city" placeholder="City">
		    </div>

		    <div class="field">
		      <label>Province</label>
		      <select class="ui fluid dropdown" name="province" id="province">
		      	<option value="1" selected="selected">Wp Kuala Lumpur</option>
		      	<option value="2">Johor</option>
		      	<option value="3">Kedah</option>
		      	<option value="4">Kelantan</option>
		      	<option value="5">Melaka</option>
		      	<option value="6">Negeri Sembilan</option>
		      	<option value="7">Pahang</option>
		      	<option value="8">Penang</option>
		      	<option value="9">Perak</option>
		      	<option value="10">Perlis</option>
		      	<option value="11">Sabah</option>
		      	<option value="12">Sarawak</option>
		      	<option value="13">Selangor</option>
		      	<option value="14">Terengganu</option>
		      	<option value="15">Wp Labuan</option>
		      	<option value="16">Wp Putrajaya</option>
		      </select>
		    </div>

		  </div>
		  <div class="eight wide field">
	    	  <label>Mobile Number</label>
	    	  <div class="ui left labeled input">
	    	  	  <div class="ui basic label">+60</div>
				  <input type="text" name="mobile_nm" placeholder="Phone Number">
				</div>
	      </div>

		  <h4 class="ui dividing header">Login Information</h4>

		  <div class="two fields">
		  	  <div class="field">
			    <label>User Name</label>
				<input type="text" name="f_name" placeholder="User Name">
		      </div>

		      <div class="field">
			    <label>Email</label>
				<input type="email" name="f_name" placeholder="Email">
		      </div>
		  </div>

		  <div class="two fields">
		  	  <div class="field">
			    <label>Password</label>
				<input type="password" name="f_name" placeholder="Password">
		      </div>

		      <div class="field">
			    <label>Re-type Password</label>
				<input type="password" name="f_name" placeholder="Retype Password">
		      </div>
		  </div>


		  <a class="ui button" tabindex="0" href="/confirm_order">Continue</a>
		</form>
	</div>


</div>
@endsection

@section('js')
	<script src="js/shipping.js"></script>
@endsection