<?php

namespace App\Http\Controllers;

use App\Count;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class SettingsController extends Controller
{
    public function index() {
        return view("/settings");
    }
    public function update(Request $request) {

        $username = Cookie::get('username');
        $values = Count::where("username", $username)->get()->first();

        $waterValue = $values->value_water;

        $values->threshold_water = $request->rsRangeLine;
        $totalValue = $values->threshold_water;

        $values->save();

        return view("/settings");
    }
}
