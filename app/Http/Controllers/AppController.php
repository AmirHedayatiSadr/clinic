<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function login(Request $request)
    {
          return view('resources\js\pages\Login.vue');
    }
}
