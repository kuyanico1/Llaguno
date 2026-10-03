<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // Customer records: Static array
        $customers = [
            [
                'customer_id' => 'CUST001',
                'full_name'   => 'Super Nico',
                'email'       => 'kuya.nico@gmail.com',
                'phone'       => '09171234567',
                'address'     => 'Quezon City, Metro Manila',
            ],
            [
                'customer_id' => 'CUST002',
                'full_name'   => 'Hurr Champ',
                'email'       => 'hurr.champ@gmail.com',
                'phone'       => '09181234567',
                'address'     => 'Manila, Metro Manila',
            ],
            [
                'customer_id' => 'CUST003',
                'full_name'   => 'Abele Reyes',
                'email'       => 'abele.reyes@gmail.com',
                'phone'       => '09191234567',
                'address'     => 'Caloocan, Metro Manila',
            ],
            [
                'customer_id' => 'CUST004',
                'full_name'   => 'Chloe Garcia',
                'email'       => 'chloe.garcia@gmail.com',
                'phone'       => '09201234567',
                'address'     => 'Pasig City, Metro Manila',
            ],
            [
                'customer_id' => 'CUST005',
                'full_name'   => 'Carlos Yulo',
                'email'       => 'carlos.yulo@gmail.com',
                'phone'       => '09211234567',
                'address'     => 'Makati City, Metro Manila',
            ],
        ];

        return view('tfa1_llaguno/pages/customers', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}