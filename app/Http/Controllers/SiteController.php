<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
    return view('front-end.home');
}

public function about() {
    return view('front-end.about');
}

public function service() {
    return view('front-end.service');
}

public function contact() {
    return view('front-end.contact');
}

}
