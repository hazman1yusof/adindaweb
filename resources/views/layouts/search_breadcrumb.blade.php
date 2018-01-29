<form method="GET" name="searchform" action="/product" class="ui form">
	<div class="two fields">
		<div class="field">
			<select name="productcat" multiple="" class="ui fluid dropdown" id="multi-select">
				<option value="">Select Product Category</option>
				@foreach ($categories_desc as $cat)
					<option value="{{$cat->catcode}}">{{$cat->description}}</option>
				@endforeach
			</select>
		</div>
		<div class="field">
			<div class="ui action input">
				<input type="text" class="ui teal" name="productname" placeholder="Search product..." id="productname">
				<button class="ui teal button" id="search" type="button">Search</button>
			</div>
		</div>
	</div>
</form>