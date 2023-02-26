<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function show(Request $request) {

        $id = $request->id;

        $task = Task::find($id);

        if(!$task) {
            return redirect(route('home'));
        }

        $data = [
            'task' => $task,
            'categories' => Category::all()
        ];

        return view('tasks.show', $data);
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

    public function update(Request $request) {
        $task = Task::find($request->id);

        if (!$task) {
            return 'Erro: Task not found';
        }

        $task->update($request->only([
            'title',
            'due_date',
            'category_id',
            'description'
        ]));
        $task->save();

        return redirect(route('home'));
    }

}
