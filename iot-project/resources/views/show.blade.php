@extends('layouts.app')

@section('content')

<div class="container container-dashboard">
	<div class="wrapper-main">
		<div class="dashboard-value">
			<h1>Dashboard</h1>
		</div>
		@foreach($values as $value)
			<div class="dashboard-value-water">
				<p class="value-header">Water Score</p>
				<p>
					@if (!is_null($value->value_water))
					{{ $value->value_water }} / {{ $value->threshold_water }}
					@else
					0 / {{ $value->threshold_water }}
					@endif
				</p>
			</div>
			<div class="dashboard-value-plants"> 
				<p class="value-header">Plants Score</p>
				<p>
					@if (!is_null($value->value_plants))
					{{ $value->value_plants }} / {{ $value->threshold_plants }}
					@else
					0 / {{ $value->threshold_plants }}
					@endif
				</p>
			</div>
			<div class="dashboard-value-coffee">
				<p class="value-header">Coffee Score</p>
				<p>
					@if (!is_null($value->value_coffee))
					{{ $value->value_coffee }} / {{ $value->threshold_coffee }}
					@else
					0 / {{ $value->threshold_coffee }}
					@endif
				</p>
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
