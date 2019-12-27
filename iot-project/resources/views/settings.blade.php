@extends('layouts.nonav')

@section('content')

<div class="container blue">
	<div class="slidecontainer">
		<form action="{{ url('settings/update') }}">
			<div class="range-slider">
				<span id="rs-bullet" class="rs-label">0</span>
				<input id="rs-range-line" name="rsRangeLine" class="rs-range" type="range" step="250" value="0" min="0" max="3000">
			</div>
			<div class="box-minmax">
				<span>0</span><span>3000</span>
			</div>
		  	<button type="submit">Update</button>
		  </form>
	</div>
</div>

<script>

	var rangeSlider = document.getElementById("rs-range-line");
	var rangeBullet = document.getElementById("rs-bullet");

	rangeSlider.addEventListener("input", showSliderValue, false);

	function showSliderValue() {
		rangeBullet.innerHTML = rangeSlider.value;
		var bulletPosition = (rangeSlider.value /rangeSlider.max);
		rangeBullet.style.left = (bulletPosition * 178) + "px";
	}
</script>

@endsection
