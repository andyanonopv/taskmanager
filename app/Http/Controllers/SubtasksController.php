<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\Subtasks;
use Illuminate\Http\Request;

class SubtasksController extends Controller
{
    public function index()
    {
        
        $tasks = Tasks::all();

        
        $subtasks = [];
        foreach ($tasks as $task) {
            $subtasks[$task->id] = Subtasks::where('task_id', $task->id)->get();
        }

        return view('tasks', compact('tasks', 'subtasks'));
    }
}
