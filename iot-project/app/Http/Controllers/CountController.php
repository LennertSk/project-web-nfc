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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
    	$username = Cookie::get('username');
        $values = DB::table("users")->where("username", $username)->get();
    	return view("index", ["values" => $values]);
	}

    // ******* Methodes voor +1 te doen *******

    // Add +1 Water
    public function addWater()
    {
        $username = Cookie::get('username');
        $counter = Count::where("username", $username)->get()->first();
        $counter->value_water = $counter->value_water + 250;
        $counter->save();

        return redirect('water');
    }

    // Add +1 Plants
    public function waterPlants()
    {
        $username = Cookie::get('username');
        $counter = Count::where("username", $username)->get()->first();
        $currentDate = Carbon::now("CET");
        $counter->value_plants = $currentDate;
        $counter->save();
        return redirect('plants');
    }

    // Add +1 Coffee
    public function addCoffee()
    {
        $username = Cookie::get('username');
        $counter = Count::where("username", $username)->get()->first();
        $counter->value_coffee = $counter->value_coffee + 1;
        $counter->save();
        return redirect('coffee');
    }

    // ******* Methodes om data te weergeven *******

    public function changeWater() {
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $userValue = $values->value_water;
        $totalValue = $values->threshold_water;

        $percentage = ($userValue/$totalValue) * 100;
        $calc = -100 + ($percentage/100*80);

        $valueDisplayedInNav = 'Error getting data';
        $valueDisplayedInNav = $userValue . ' / ' . $totalValue . ' ml';
        return view("/water", ["calc" => $calc, "percentage" => round($percentage), "valueNav" => $valueDisplayedInNav]);
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

        $valueDisplayedInNav = 'Error getting data';
        $valueDisplayedInNav = 'Last watered ' . $lastDate;
        return view("/plants", ["hours" => $diffInHours, "calc" => $calc, "valueNav" => $valueDisplayedInNav]);
    }

    public function changeCoffee() {
        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $coffeeValue = $values->value_coffee;
        $totalValue = $values->threshold_coffee;

        $percentage = ($coffeeValue/$totalValue) * 100;
        $calc = -100 + ($percentage/100*50);

        $valueDisplayedInNav = 'Error getting data';
        if ( $coffeeValue == 1 ) { $valueDisplayedInNav = $coffeeValue . ' cup consumed today'; }
        else { $valueDisplayedInNav = $coffeeValue . ' cups consumed today'; }
        
        return view("/coffee", ["userValue" => $coffeeValue, "totalValue" => $totalValue, "calc" => $calc, "valueNav" => $valueDisplayedInNav]);
    }

}
