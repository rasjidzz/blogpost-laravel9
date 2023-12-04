<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Muhammad Risjad Shidqi Febian",
            "email" => "mrisjads@gmail.com",
            "image" => "risjad.jpg"
        ]);
    }
}
