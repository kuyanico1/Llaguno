<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('tfa2_llaguno/index', [
            'title'      => 'Database Management',
            'activePage' => 'home',
        ]);
    }

    public function about(): string
    {
        return view('tfa2_llaguno/pages/about', [
            'title'      => 'About',
            'activePage' => 'about',
        ]);
    }
}
