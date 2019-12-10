<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
  public function index(){

    // Check if username is set in Cookie
    $username_cookie = Cookie::get('username');

    // If: No username set -> Ask user for username in login.blade.php
    if (is_null($username_cookie)) {
      return redirect('login');
    }
    // If: Username is set -> Load user data and continue to page
    else {
      $current_date = Carbon::now();
      return view('index', ['current_date' => $current_date, 'username' => $username_cookie]);
    }
  }
}
