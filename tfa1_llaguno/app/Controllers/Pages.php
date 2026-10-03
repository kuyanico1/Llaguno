<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('tfa1_llaguno/index', [
            'title' => 'Home',
            'activePage' => 'home',
        ]);
    }

    public function about(): string
    {
        return view('tfa1_llaguno/pages/about', [
            'title' => 'About',
            'activePage' => 'about',
        ]);
    }
}
