@extends('layouts.app')

@section('content')

<div class="container container-home">
	<div class="wrapper-home">
		<h1>Welcome back!</h1>
  		<br>
		  <p> You are logged in as:</p>
		  <p class='home-username'>{{$username}}</p>
		  <p class='home-logout'><a href="{{ url('logout') }}">This is not me!</a></p>
		  <a class='home-btn' href="{{ route('show') }}">Continue</a>
	</div> 
</div>
@endsection
