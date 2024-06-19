<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function about(): string
    {
        return view('about');
    }
    public function brand(): string
    {
        return view('brand');
    }
    public function career(): string
    {
        return view('career');
    }
    public function contact(): string
    {
        return view('contact');
    }
    public function coupleSession(): string
    {
        return view('couple-session');
    }
    public function privateSession(): string
    {
        return view('private-session');
    }
    public function register(): string
    {
        return view('register');
    }
}

