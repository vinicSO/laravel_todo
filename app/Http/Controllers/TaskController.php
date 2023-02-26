<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function show() {
        return view('tasks.show');
    }

    public function create_view(Request $request) {

        $data = [
            'categories' => Category::all()
        ];

        return view('tasks.create', $data);
    }

    public function create(Request $request) {
        $task = $request->only([
           'title',
           'category_id',
           'description',
           'due_date'
        ]);

        $task['user_id'] = 1; // Temporário

        $dbTask = Task::create($task);

        return redirect(route('home'));
    }

}
