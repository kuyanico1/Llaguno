<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'title' => 'Check pharmacy opening requirements',
                'status' => 'completed',
                'task_date' => '2026-10-06',
                'created_at' => '2026-10-05 16:38:24',
            ],
            [
                'title' => 'Review medicine expiration dates',
                'status' => 'completed',
                'task_date' => '2026-10-06',
                'created_at' => '2026-10-06 09:17:46',
            ],
            [
                'title' => 'Review controlled-item documentation',
                'status' => 'completed',
                'task_date' => '2026-10-06',
                'created_at' => '2026-10-06 13:42:19',
            ],
            [
                'title' => 'Confirm supplier delivery records',
                'status' => 'completed',
                'task_date' => '2026-10-07',
                'created_at' => '2026-10-07 09:16:35',
            ],
            [
                'title' => 'Review low-stock medicine list',
                'status' => 'completed',
                'task_date' => '2026-10-07',
                'created_at' => '2026-10-07 13:28:11',
            ],
            [
                'title' => 'Organize prescription filing records',
                'status' => 'pending',
                'task_date' => '2026-10-07',
                'created_at' => '2026-10-07 15:53:42',
            ],
            [
                'title' => 'Check morning medicine inventory',
                'status' => 'pending',
                'task_date' => '2026-10-08',
                'created_at' => '2026-10-07 16:24:18',
            ],
            [
                'title' => 'Record cold-storage temperature checks',
                'status' => 'pending',
                'task_date' => '2026-10-08',
                'created_at' => '2026-10-07 17:11:53',
            ],
            [
                'title' => 'Complete end-of-day inventory reconciliation',
                'status' => 'pending',
                'task_date' => '2026-10-08',
                'created_at' => '2026-10-07 18:47:26',
            ],
            [
                'title' => 'Prepare next-day restock request',
                'status' => 'pending',
                'task_date' => '2026-10-09',
                'created_at' => '2026-10-07 19:08:14',
            ],
        ];

        $this->db->table('tasks')->insertBatch($tasks);

        $this->db->table('users')->insert([
            'username' => 'kuyanico1',
            'full_name' => 'Dr. Nico Llaguno',
            'email' => 'kuyanico1@gmail.com',
            'created_at' => '2026-10-03 10:14:37',
        ]);
    }
}
