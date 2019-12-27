@extends('layouts.app')

@section('content')

<div class="container blue">
	<div class="main-container">
		<div class="middle-main">
			<p class="percentage water">{{ $percentage }}<span class="side">%</span></p>
		</div>
		<div class="waves">
			<img src="images/waves.png" class="waves-img" alt="">
		</div>
	</div>
	<footer>
		<div class="footer-container">
			<hr class="line active"></hr>
			<hr class="line"></hr>
			<hr class="line"></hr>
			<hr class="line"></hr>
			<hr class="line"></hr>
		</div>

	</footer>
</div>
<style>
	.waves-img {
		@php
			$prct = strval($calc) . '%';
		@endphp
		bottom: {{ $prct }} !important;
	}
</style>

@endsection
