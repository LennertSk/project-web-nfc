<?php

namespace App\Http\Controllers;
use App\Count;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class CountController extends Controller
{
    //

    public function show() {

    	$username = Cookie::get('username');

        $values = DB::table("users")->where("username", $username)->get();
    	return view("show", ["values" => $values]);
	}

    public function countWater($username)
    {
        $counter = Count::where("username", $username)->get()->first();

        $counter->threshold_water = $counter->threshold_water + 1;
        $counter->save();

        return redirect('show');
    }

    public function countPlants($username)
    {
        $counter = Count::where("username", $username)->get()->first();

        $counter->threshold_plants = $counter->threshold_plants + 1;
        $counter->save();

        return redirect('show');
    }

    public function countCoffee($username)
    {
        $counter = Count::where("username", $username)->get()->first();

        $counter->threshold_coffee = $counter->threshold_coffee + 1;
        $counter->save();

        return redirect('show');
    }

    public function countBike($username)
    {
        $counter = Count::where("username", $username)->get()->first();

        $counter->threshold_bike = $counter->threshold_bike + 1;
        $counter->save();

        return redirect('show');
    }

    public function showLayout()
    {
        return view('layout');
    }

    public function changeWater() {
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $waterValue = $values->value_water;
        $totalValue = $values->threshold_water;

        $percentage = ($waterValue/$totalValue) * 100;

        $calc = -100 + ($percentage/100*80);

        return view("/layout", ["calc" => $calc]);
    }

}
