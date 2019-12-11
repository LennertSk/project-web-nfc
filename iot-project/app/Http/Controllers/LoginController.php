<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Cookie;
use App\User;

class LoginController extends Controller
{
/**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function form()
    {
        return view('login');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
      // Validate Input
      $validatedData = $request->validate([
      'username' => 'required|max:255|min:4'
      ]);

      // Check if username is in db
      $username_check = User::where('username', $validatedData['username'])->first();

      // If username is unique -> Add to db & Set Cookie
      if (is_null($username_check)) {
        $new_user = new User;
        $new_user->username = $validatedData['username'];
        $new_user->save();
      }
      // If username is already in db -> ask is user is sure
      else {
        $username = $validatedData['username'];
        return view('confirm', ['username' => $username]);
      }
      $cookie_username = cookie('username', $validatedData['username'], 45000);
      return redirect('/')->withCookie($cookie_username);
    }

    public function confirmform(Request $request)
    {
      return view('confirm');
    }

    public function confirm(Request $request)
    {
      // user confirmed account belongs to him -> set cookie and reroute

      return redirect('/');
    }
}
