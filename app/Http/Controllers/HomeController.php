<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function errors(){
        $url = route('pages.error');
        return view('pages.error', compact('error'));
    }
}
