@extends('layouts.app')

@section('content')

<div class="container green">
	<div class="main-container">
		<div class="middle-main">
			<p class="percentage plants"><span class="above">Water in</span> {{ $hours }}h</p>

		</div>
		<div class="waves">
			<img src="images/plants.png" class="plants-img" alt="">
		</div>
	</div>
	<footer>
		<div class="footer-container">
			<hr class="line"></hr>
			<hr class="line"></hr>
			<hr class="line active"></hr>
			<hr class="line"></hr>
		</div>

	</footer>
</div>
<style>
	.plants-img {
		@php
			$prct = strval($calc) . '%';
		@endphp
		bottom: {{ $prct }} !important;
	}
</style>

@endsection
