<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function service() {
        return view('front-end.service');
    }

    public function contact() {
        return view('contact');
    }

    public function notfound()
    {
        return view('404');
    }

}
