<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($name) {
        return view('home',[
            'name' => $name
        ]);
    }
}
