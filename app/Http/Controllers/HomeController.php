<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{

    public function index(Request $request) {

        $data = [
            'tasks' => Task::all()->take(3)
        ];

        return view('home', $data);
    }

}
