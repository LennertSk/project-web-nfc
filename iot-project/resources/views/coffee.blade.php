@extends('layouts.app')

@section('content')

<a href='{{ route("plants") }}' class='go-left'></a>


<div class="container brown">
	<div class="main-container">
		<div class="middle-main">
			<p class="percentage coffee">{{ $userValue }}<span class="side">/{{ $totalValue }}</span><span class="under">cups</span></p>
		</div>
		<div class="waves">
			<img src="images/coffee.png" class="coffee-img" alt="">
		</div>
	</div>
	<footer>
		<div class="footer-container">
			<hr class="line"></hr>
			<hr class="line"></hr>
			<hr class="line"></hr>
			<hr class="line active"></hr>
			
		</div>

	</footer>
</div>
<style>
	.coffee-img {
		@php
			$prct = strval($calc) . '%';
		@endphp
		bottom: {{ $prct }} !important;
	}
</style>

@endsection
