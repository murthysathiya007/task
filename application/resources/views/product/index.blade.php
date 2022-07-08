@extends('layouts.app')

@section('content')
<div class="container">
		<h1 class="text-center">Sumanas Task</h1>
		<hr>

		<div class="row">
			<!-- Product  -->

            @foreach ($products as $product)
			<div class="col-md-4 product-grid">
				<div class="image">
					<a target="_blank" href='{{ url("product/show/{$product->id}") }}'>
						<img src="assets/images/{{$product->avatar_name}}" class="w-100">
						<div class="overlay">
							<div class="detail" target="_blank" href='{{ url("product/show/{$product->id}") }}'>View Details</div>
						</div>
					</a>
				</div>
				<h5 class="text-center">{{$product->name}}</h5>
				<h5 class="text-center">Price: ${{$product->price}}</h5>
				<a target="_blank" href='{{ url("product/show/{$product->id}") }}' class="btn buy">View Details</a>
			</div>
            @endforeach
			<!-- ./Product -->

		</div>

	</div>

@endsection
