@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui four stackable cards">
	  <div class="ui card">
	    <div class="image">
	      <div class="ui blurring inverted dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui teal button">Add Friend</div>
	          </div>
	        </div>
	      </div>
	      <img src="shoe.jpg">
	    </div>
	    <div class="content">
	      <div class="header">Title</div>
	      <div class="meta">
	        <a class="group">Meta</a>
	      </div>
	      <div class="description">One or two sentence description that may go to several lines</div>
	    </div>
	    <div class="extra content">
	      <a class="right floated created">Arbitrary</a>
	      <a class="friends">
	        Arbitrary</a>
	    </div>
	  </div>
	  <div class="ui card">
	    <div class="blurring dimmable image">
	      <div class="ui dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui inverted button">Call to Action</div>
	          </div>
	        </div>
	      </div>
	      <img src="shoe2.jpg">
	    </div>
	    <div class="content">
	      <a class="header">Name</a>
	      <div class="meta">
	        <span class="date">Date</span>
	      </div>
	    </div>
	    <div class="extra content">
	      <a>
	        <i class="users icon"></i>
	        Users
	      </a>
	    </div>
	  </div>
	  <div class="ui card">
	    <div class="blurring dimmable image">
	      <div class="ui dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui inverted button">Call to Action</div>
	          </div>
	        </div>
	      </div>
	      <img src="shoe3.jpg">
	    </div>
	    <div class="content">
	      <a class="header">Name</a>
	      <div class="meta">
	        <span class="date">Date</span>
	      </div>
	    </div>
	    <div class="extra content">
	      <a>
	        <i class="users icon"></i>
	        Users
	      </a>
	    </div>
	  </div>
	  <div class="ui card">
	    <div class="blurring dimmable image">
	      <div class="ui dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui inverted button">Call to Action</div>
	          </div>
	        </div>
	      </div>
	      <img src="shoe4.jpg">
	    </div>
	    <div class="content">
	      <a class="header">Name</a>
	      <div class="meta">
	        <span class="date">Date</span>
	      </div>
	    </div>
	    <div class="extra content">
	      <a>
	        <i class="users icon"></i>
	        Users
	      </a>
	    </div>
	  </div>
	</div>
</div>
@endsection