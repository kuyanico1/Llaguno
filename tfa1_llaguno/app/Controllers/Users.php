<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // User records: Static array
        $users = [
            [
                'username'  => 'admin.nico',
                'full_name' => 'Nico Llaguno',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier.rodolfo',
                'full_name' => 'Rodolfo Mendoza',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier.ramjay',
                'full_name' => 'Ramjay Dela Cruz',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'supervisor.kein',
                'full_name' => 'Kein McArthur',
                'role'      => 'Supervisor',
            ],
            [
                'username'  => 'staff.kean',
                'full_name' => 'Kean Sup',
                'role'      => 'Staff',
            ],
        ];

        return view('tfa1_llaguno/pages/users', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}