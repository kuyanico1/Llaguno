<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About',
            'activePage' => 'about',
        ];

        return view('tsa1_llaguno/pages/about', $data);
    }
}
