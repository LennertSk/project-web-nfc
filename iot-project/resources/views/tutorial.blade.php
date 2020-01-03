@extends('layouts.app')

@section('content')

<div class="container container-home container-info">
	<div class="wrapper-info">
		<h1>Let's get started</h1>
		<br>
		<div class="info-text">
			<p class='left-text'>All you have to do is enable <span class="mark">NFC</span> on your mobile device and <span class="mark">ping</span> one of our NFC-tags whenever you complete or do something you would like to track.</p>
			<p class='right-text'>If you don't have nfc, <span class="mark">no worries!</span> You can also manually add them in the dashboard.</p>
			<p class='left-text'>For now, you can start tracking your daily water consumption, the last time you watered your plants and the amount of coffees you drank today.</p>
			<br>
			<p class='left-text'>Happy tracking!</p>
			<br>
			<a class='info-btn' href='{{ url("/") }}'>Continue</a>
		</div>
		
	</div> 
</div>
@endsection
