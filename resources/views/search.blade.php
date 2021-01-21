@extends('master')


@section('title', 'Seach Page')


@section('content')
	
	<h1 class="mt-2">Find your phone</h1>

	<form action="" method="post">
		@csrf
		<label>Brand</label><br>
		<input type="text" name="brand"><br>
		<label>Type</label><br>
		<input type="text" name="type"><br>
		<label>Color</label><br>
		<input type="text" name="color"><br>
		<label>Weight</label><br>
		<input type="number" name="weight_from" placeholder="from"><br>
		<input type="number" name="weight_to" placeholder="to"><br>
		<label>Screen Size</label><br>
		<input type="number" name="screen_size_from" placeholder="from"><br>
		<input type="number" name="screen_size_to" placeholder="to"><br>
		<button type="submit" value="submit">Search</button>
	</form>

@endsection