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
			<div class="slider-coffee">
				<div class="slider-info">
					<h3 class="info-h3">General - coffee</h3>
					<p class="info-p">Amount of coffees you may drink per day</p>
				</div>
				<div class="range-slider">
					<span id="coffee-bullet" class="rs-label rs-coffee">0</span>
					<input id="coffee-range-line" name="rsRangeLineCoffee" class="rs-range" type="range" step="1" value="{{ $coffeeValue }}" min="0" max="10">
				</div>
				<div class="box-minmax">
					<span>0</span><span>10</span>
				</div>
			</div>
			<hr>
			<div class="slider-plants">
				<div class="slider-info">
					<h3 class="info-h3">General - plants</h3>
					<p class="info-p">Amount of hours before plants need water</p>
				</div>
				<div class="range-slider">
					<span id="plants-bullet" class="rs-label rs-plants">0</span>
					<input id="plants-range-line" name="rsRangeLinePlants" class="rs-range" type="range" step="1" value="{{ $plantsValue }}" min="0" max="10">
				</div>
				<div class="box-minmax">
					<span>0</span><span>10</span>
				</div>
			</div>
			<hr>
			<div class="btn-settings">
		  		<button type="submit" class="update-btn">Update settings</button>
		  	</div>
		  </form>
	</div>
</div>

<script>
	// If ready, do functions to make value and valuelabel correct
	
	// Water Slider
	var waterSlider = document.getElementById("water-range-line");
	var waterBullet = document.getElementById("water-bullet");
	var waterWidth = document.getElementById('water-range-line').offsetWidth;
	showWaterSliderValue();

	waterSlider.addEventListener("input", showWaterSliderValue, false);

	function showWaterSliderValue() {
		waterBullet.innerHTML = waterSlider.value;
		var waterbulletPosition = (waterSlider.value / waterSlider.max);

		var bullet = (waterbulletPosition * (waterWidth-22));
		waterBullet.style.left = bullet + "px";

		waterSlider.style.background = 'linear-gradient(to right, #1BBDF6 0px, #1BBDF6 ' + bullet + 'px, #CCD7DB ' + (bullet+11) + 'px, #CCD7DB '+ (waterWidth-11) +'px)';
	}

	// Coffee Slider
	var coffeeSlider = document.getElementById("coffee-range-line");
	var coffeeBullet = document.getElementById("coffee-bullet");
	var coffeeWidth = document.getElementById('coffee-range-line').offsetWidth;
	showCoffeeSliderValue();

	coffeeSlider.addEventListener("input", showCoffeeSliderValue, false);

	function showCoffeeSliderValue() {
		coffeeBullet.innerHTML = coffeeSlider.value;
		var coffeebulletPosition = (coffeeSlider.value / coffeeSlider.max);

		var bullet = (coffeebulletPosition * (coffeeWidth-22));
		coffeeBullet.style.left = bullet + "px";

		coffeeSlider.style.background = 'linear-gradient(to right, #B99682 0px, #B99682 ' + bullet + 'px, #CCD7DB ' + (bullet+11) + 'px, #CCD7DB '+ (coffeeWidth-11) +'px)';
	}

	// Plants Slider
	var plantsSlider = document.getElementById("plants-range-line");
	var plantsBullet = document.getElementById("plants-bullet");
	var plantsWidth = document.getElementById('plants-range-line').offsetWidth;
	showPlantsSliderValue();

	plantsSlider.addEventListener("input", showPlantsSliderValue, false);

	function showPlantsSliderValue() {
		plantsBullet.innerHTML = plantsSlider.value;
		var plantsbulletPosition = (plantsSlider.value / plantsSlider.max);

		var bullet = (plantsbulletPosition * (plantsWidth-22));
		plantsBullet.style.left = bullet + "px";
		
		plantsSlider.style.background = 'linear-gradient(to right, #5AAB61 0px, #5AAB61 ' + bullet + 'px, #CCD7DB ' + (bullet+11) + 'px, #CCD7DB '+ (plantsWidth-11) +'px)';
	}

	// window.onload = function() {
	//     if(!window.location.hash) {
	//         window.location = window.location + '#loaded';
	//         window.location.reload();
	//     }
	// }
</script>

@endsection
