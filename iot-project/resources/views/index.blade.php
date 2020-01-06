@extends('layouts.app')

@section('content')

<a href='{{ route("settings") }}' class='go-left'></a>
<a href='{{ route("water") }}' class='go-right'></a>

<div class="container-dashboard">
	<div class="wrapper-main">
		<div class="dashboard-value">
			<h1>Your daily score:</h1>
		</div>
		@foreach($values as $value)
		<div class="dashboard-value-water">
			<a class='value-link-wrapper' href="{{ route('water') }}">
				<p class="value-header">Water Score</p>
				<p>
					@if (!is_null($value->value_water))
					{{ $value->value_water }} / {{ $value->threshold_water }}
					@else
					0 / {{ $value->threshold_water }}
					@endif
				</p>
			</a>
		</div>
		
		<div class="dashboard-value-plants">
			<a class='value-link-wrapper' href="{{ route('plants') }}"> 
				<p class="value-header">Plants Score</p>
				<p>
					@if (!is_null($value->value_plants))
					{{ $value->value_plants }} / {{ $value->threshold_plants }}
					@else
					0 / {{ $value->threshold_plants }}
					@endif
				</p>
			</a>
		</div>
		
		
		<div class="dashboard-value-coffee">
			<a class='value-link-wrapper' href="{{ route('coffee') }}">
				<p class="value-header">Coffee Score</p>
				<p>
					@if (!is_null($value->value_coffee))
					{{ $value->value_coffee }} / {{ $value->threshold_coffee }}
					@else
					0 / {{ $value->threshold_coffee }}
					@endif
				</p>
			</a>
		</div>
		
		@endforeach
		<div class="dashboard-bnts">
			<h2 id='bnt-group-header'>Add manually</h2>
			<ul class='btn-group'>
				<li><a id='btn-water' href="{{ route('addwater') }}">+</a></li>
				<li><a id='btn-plants' href="{{ route('waterplants') }}">+</a></li>
				<li><a id='btn-coffee' href="{{ route('addcoffee') }}">+</a></li>
			</ul>
		</div>
	</div>
</div>




@endsection
