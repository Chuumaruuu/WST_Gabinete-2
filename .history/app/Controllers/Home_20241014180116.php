<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Landing Page'
        ];
        return view('landing');
    }

    public function landing(): string
    {
        $data = [
            'title' => 'Landing Page'
        ];
        return view('landing');
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Page'
        ];
        return view('about');
    }

    public function catalog(): string
    {
        $data = [
            'title' => 'Landing Page'
        ];
        return view('product_catalog');
    }
}
