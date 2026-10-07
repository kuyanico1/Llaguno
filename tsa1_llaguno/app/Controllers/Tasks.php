<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\I18n\Time;

class Tasks extends BaseController
{
    public function today()
    {
        $model = new TaskModel();
        $today = Time::now('Asia/Manila');

        $data = [
            'title' => 'Welcome',
            'activePage' => 'home',
            'currentDate' => $today->format('l, F j, Y'),
            'tasks' => $model
                ->where('task_date', $today->format('Y-m-d'))
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('tsa1_llaguno/pages/welcome', $data);
    }

    public function index()
    {
        $model = new TaskModel();

        $data = [
            'title' => 'Task List',
            'activePage' => 'tasks',
            'tasks' => $model
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('tsa1_llaguno/pages/tasks', $data);
    }
}
