@extends('layouts.app')

@section('content')
<div class="container">
		<h1 class="text-center">Sumanas Task</h1>
		<hr>
        <a href="{{ url()->previous() }}"  class="btn btn-primary">Back</a>
        <br>

		<!-- Product  -->

        <div class="card my-3">
            <img class="card-img-top" src="{{ asset('assets/images/'.$product->avatar_name) }}" alt="Card image cap" style="width: 25rem; height: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">${{$product->description}}</p>
                <p class="card-text"><small class="text-muted">Price: ${{$product->price}}</small></p>
            </div>
            </div>
        </div>
		<!-- ./Product -->

	</div>

@endsection
