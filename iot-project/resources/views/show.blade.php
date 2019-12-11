@extends('layouts.app')

@section('content')

<div class="container">
	<div class="buttons">
		@foreach($values as $value)
		<div class="counters">
			<!-- Knop voor koffie bij te tellen -->
			<a href="{{ route('water', $value->username) }}">Add water</a><!-- Aantal koffies -->
			<p>{{ $value->threshold_water }}</p>
		</div>
		<div class="counters">
			<a href="{{ route('plants', $value->username) }}">Add water</a>
			<p>{{ $value->threshold_plants }}</p>
		</div>
		<div class="counters">
			<a href="{{ route('coffee', $value->username) }}">Add water</a>
			<p>{{ $value->threshold_coffee }}</p>
		</div>
		<div class="counters">
			<a href="{{ route('bike', $value->username) }}">Add water</a>
			<p>{{ $value->threshold_bike }}</p>
		</div>
		@endforeach
	</div>
</div>
@endsection
