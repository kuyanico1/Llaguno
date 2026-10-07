<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function profile()
    {
        $model = new UserModel();

        $data = [
            'title' => 'Profile',
            'activePage' => 'profile',
            'user' => $model
                ->where('username', 'kuyanico1')
                ->first(),
        ];

        return view('tsa1_llaguno/pages/profile', $data);
    }
}
