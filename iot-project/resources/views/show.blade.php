@extends('layouts.app')

@section('content')

<div class="container">
	<div class="buttons">
		@foreach($values as $value)
		<div class="counters">
			<!-- Knop voor koffie bij te tellen -->
			<a href="{{ route('addwater') }}">Add water</a><!-- Aantal koffies -->
			<p>{{ $value->threshold_water }}</p>
		</div>
		<div class="counters">
			<a href="{{ route('waterplants') }}">Add day</a>
			<p>{{ $value->threshold_plants }}</p>
		</div>
		<div class="counters">
			<a href="{{ route('addcoffee') }}">Add coffee</a>
			<p>{{ $value->threshold_coffee }}</p>
		</div>
		@endforeach
	</div>
</div>


@endsection
