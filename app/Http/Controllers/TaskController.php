<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function show() {
        return view('tasks.show');
    }

    public function create(Request $request) {
        return view('tasks.create');
    }

}
