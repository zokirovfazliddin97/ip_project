<?php

namespace sales\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return redirect('/posts');
    }

    public function about(){
        return view('pages.about');
    }

    public function login(){
        return view('pages.login');
    }
}
