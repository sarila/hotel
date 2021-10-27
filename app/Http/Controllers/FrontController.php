<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.index');
    }

    public function contact() {
        return view('front.contact');
    }

    public function agent() {
        return view('front.agent');
    }

    public function blog() {
        return view('front.blog');
    }

    public function about() {
        return view('front.about');
    }

    public function blogSingle() {
        return view('front.blog-single');
    }

    public function propertiesSingle() {
        return view('front.properties-single');
    }
    public function properties() {
        return view('front.properties');
    }
    public function services() {
        return view('front.services');
    }
}
