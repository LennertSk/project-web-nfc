@extends('layouts.nonav')

@section('content')

<div class="container">
	<div class="slidecontainer">
		<form action="{{ url('settings/update') }}">
			<hr>
			<div class="slider-water">
				<div class="slider-info">
					<h3 class="info-h3">General - water</h3>
					<p class="info-p">Amount of water to drink in 1 day</p>
				</div>
				<div class="range-slider">
					<span id="water-bullet" class="rs-label rs-water">0</span>
					<input id="water-range-line" name="rsRangeLineWater" class="rs-range" type="range" step="250" value="{{ $waterValue }}" min="0" max="3000">
				</div>
				<div class="box-minmax">
					<span>0</span><span>3000</span>
				</div>
			</div>
			<hr>
			<div class="slider-water">
				<div class="slider-info">
					<h3 class="info-h3">General - coffee</h3>
					<p class="info-p">Amount of coffees you may drink per day</p>
				</div>
				<div class="range-slider">
					<span id="coffee-bullet" class="rs-label rs-coffee">0</span>
					<input id="coffee-range-line" name="rsRangeLineCoffee" class="rs-range" type="range" step="1" value="0" min="0" max="10">
				</div>
				<div class="box-minmax">
					<span>0</span><span>10</span>
				</div>
			</div>
			<hr>
			<div class="slider-water">
				<div class="slider-info">
					<h3 class="info-h3">General - plants</h3>
					<p class="info-p">Amount of hours before plants need water</p>
				</div>
				<div class="range-slider">
					<span id="plants-bullet" class="rs-label rs-plants">0</span>
					<input id="plants-range-line" name="rsRangeLinePlants" class="rs-range" type="range" step="1" value="0" min="0" max="10">
				</div>
				<div class="box-minmax">
					<span>0</span><span>10</span>
				</div>
			</div>
		  	<button type="submit">Update</button>
		  </form>
	</div>
</div>

<script>
	// If ready, do functions to make value and valuelabel correct
	
	// Water Slider
	var waterSlider = document.getElementById("water-range-line");
	var waterBullet = document.getElementById("water-bullet");
	var waterWidth = document.getElementById('water-range-line').offsetWidth;

	waterSlider.addEventListener("input", showWaterSliderValue, false);

	function showWaterSliderValue() {
		waterBullet.innerHTML = waterSlider.value;
		var waterbulletPosition = (waterSlider.value / waterSlider.max);
		waterBullet.style.left = (waterbulletPosition * (waterWidth-22)) + "px";
	}

	// Coffee Slider
	var coffeeSlider = document.getElementById("coffee-range-line");
	var coffeeBullet = document.getElementById("coffee-bullet");
	var coffeeWidth = document.getElementById('coffee-range-line').offsetWidth;

	coffeeSlider.addEventListener("input", showCoffeeSliderValue, false);

	function showCoffeeSliderValue() {
		coffeeBullet.innerHTML = coffeeSlider.value;
		var coffeebulletPosition = (coffeeSlider.value / coffeeSlider.max);
		coffeeBullet.style.left = (coffeebulletPosition * (coffeeWidth-22)) + "px";
	}

	// Plants Slider
	var plantsSlider = document.getElementById("plants-range-line");
	var plantsBullet = document.getElementById("plants-bullet");
	var plantsWidth = document.getElementById('plants-range-line').offsetWidth;

	plantsSlider.addEventListener("input", showPlantsSliderValue, false);

	function showPlantsSliderValue() {
		plantsBullet.innerHTML = plantsSlider.value;
		var plantsbulletPosition = (plantsSlider.value / plantsSlider.max);
		plantsBullet.style.left = (plantsbulletPosition * (plantsWidth-22)) + "px";
	}
</script>

@endsection
