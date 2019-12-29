<?php

namespace App\Http\Controllers;

use App\Count;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class SettingsController extends Controller
{
    public function index() {
        
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $waterValue = $values->threshold_water;
        $coffeeValue = $values->threshold_coffee;
        $plantsValue = $values->threshold_plants;

        return view("/settings", ["waterValue" => $waterValue, "coffeeValue" => $coffeeValue, "plantsValue" => $plantsValue]);
    }
    public function update(Request $request) {

        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        // Change water value
        $waterValue = $values->threshold_water;
        $values->threshold_water = $request->rsRangeLineWater;

        // Change coffee value
        $coffeeValue = $values->threshold_coffee;
        $values->threshold_coffee = $request->rsRangeLineCoffee;

        // Change plants value
        $plantsValue = $values->threshold_plants;
        $values->threshold_plants = $request->rsRangeLinePlants;

        $values->save();

        return view("/settings", ["waterValue" => $waterValue, "coffeeValue" => $coffeeValue, "plantsValue" => $plantsValue]);
    }
}
