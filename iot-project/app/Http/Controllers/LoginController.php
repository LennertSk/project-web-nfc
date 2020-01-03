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

    public function logout(){
      $cookie = \Cookie::forget('username');
      return redirect('/')->withCookie($cookie);
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

      // Pull input from db -> is username not found -> return null
      $username_check = User::where('username', $validatedData['username'])->first();

      // Execute logic 
      switch ($request->input('action')) {
        case 'login':
          // LOGIN: Check if username exists in db
          if (is_null($username_check)) {
            $error = "Username not found! Please try again.";
            return view('welcome', ['error' => $error]);
          }
          $cookie_username = cookie('username', $validatedData['username'], 45000);
          return redirect('/')->withCookie($cookie_username);
          break;
        case 'register':
          // REGISTER: If username is unique -> Add to db & Set Cookie
          if (is_null($username_check)) {
            $new_user = new User;
            $new_user->username = $validatedData['username'];
            $new_user->save();
          }
          // If username is already in db -> Send back w/ error message
          else {
            $username = $validatedData['username'];
            $error = "This username (" .$validatedData['username'] . ") is already taken. Please try another one.";
            return view('welcome', ['error' => $error]);
          }
          $cookie_username = cookie('username', $validatedData['username'], 45000);
          $isNewUser = true;
          return redirect('/')->withCookie($cookie_username);
          break;
      }    
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

    public function prelogin(){
      $error = null;
      return view('welcome', ['error' => $error, 'hideSettings' => true]);
    }
}
