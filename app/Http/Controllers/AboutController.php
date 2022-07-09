<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About';
        $active = 'About';
        return view('pages.home', compact('title', 'active'));
    }
}
