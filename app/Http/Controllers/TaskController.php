<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CRUDController;
use Symfony\Component\Console\Input\Input;

class TaskController extends CRUDController
{   
    public function __construct()
    {
        parent::__construct(new Tasks(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'priority' => 'required',
            'status' => 'required',
            'due_date' => 'nullable|date',
        ], 'tasks');
    }

    public function submitPost(Request $request)
    {
        // We are collecting all data submitting via Ajax
        dd(1);
        $input = $request->all();

        // Sending json response to client
        return response()->json([
            "status" => true,
            "data" => $input
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    
    public function edit($id)
    {
        $task = $this->model::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function dueTasks()
    {
        $records = Tasks::orderBy('due_date', 'asc')->get();

        return view('tasks-due', compact('records'));
    }

}
