@extends('layouts.app')

@section('content')

<div class="container-home">
	<div class="wrapper-home">
		<h1>Welcome!</h1>
		<div class="home-div">
			<div class="home-info">
				<p class="home-p"> You are logged in as:</p>
				<p class='home-username'>{{$username}}</p>
				<p class='home-logout'><a href="{{ url('logout') }}">This is not me!</a></p>
				<p><a class='home-btn' href="{{ url('dashboard') }}">Continue</a>
				</p>
			</div>
		</div>
	</div> 
</div>
@endsection
