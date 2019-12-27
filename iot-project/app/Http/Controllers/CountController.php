<?php

namespace App\Http\Controllers;
use App\Count;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use DateTime;
use Carbon\Carbon;

class CountController extends Controller
{
    //

    public function show() {

    	$username = Cookie::get('username');

        $values = DB::table("users")->where("username", $username)->get();
    	return view("show", ["values" => $values]);
	}

    public function addWater()
    {
        $username = Cookie::get('username');
        $counter = Count::where("username", $username)->get()->first();

        $counter->value_water = $counter->value_water + 250;
        $counter->save();

        return redirect('water');
    }

    public function waterPlants()
    {
        $username = Cookie::get('username');
        $counter = Count::where("username", $username)->get()->first();
        $currentDate = Carbon::now("CET");

        $counter->value_plants = $currentDate;
        $counter->save();

        return redirect('plants');
    }

    public function addCoffee()
    {
        $username = Cookie::get('username');
        $counter = Count::where("username", $username)->get()->first();

        $counter->value_coffee = $counter->value_coffee + 1;
        $counter->save();

        return redirect('coffee');
    }



    public function changeWater() {
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $waterValue = $values->value_water;
        $totalValue = $values->threshold_water;

        $percentage = ($waterValue/$totalValue) * 100;
        $calc = -100 + ($percentage/100*80);

        return view("/water", ["calc" => $calc, "percentage" => round($percentage)]);
    }

    public function changePlants() {
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        // Get Values
        $lastDate = $values->value_plants;
        $days = $values->threshold_plants;

        $dbDate = Carbon::parse($lastDate, "CET");
        $newDate = Carbon::createFromDate($lastDate)->addDay($days);
        $currentDate = Carbon::now("CET");

        // Calc days and hours
        if ($currentDate < $newDate) {
            $diffInHours = $newDate->diffInHours($currentDate);
        } else {
            $diffInHours = $newDate->hour - $currentDate->hour;
        }

        // Get calc -120% (bottom) --> -90% (top)
        $percentage = ($diffInHours/(24*$days)) * 100;
        $calc = -90 - ($percentage/100*30);

        return view("/plants", ["hours" => $diffInHours, "calc" => $calc]);
    }

    public function changeCoffee() {
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $coffeeValue = $values->value_coffee;
        $totalValue = $values->threshold_coffee;

        $percentage = ($coffeeValue/$totalValue) * 100;
        $calc = -100 + ($percentage/100*50);

        return view("/coffee", ["coffeeValue" => $coffeeValue, "totalValue" => $totalValue, "calc" => $calc]);
    }

}
