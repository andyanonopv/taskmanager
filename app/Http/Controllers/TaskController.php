<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tasks;
use App\Models\Subtasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CRUDController;
use Symfony\Component\Console\Input\Input;

class TaskController extends CRUDController
{   
    public function __construct()
    {   
        $array = [new Tasks(), new Subtasks()];
        parent::__construct(new Tasks(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'priority' => 'required',
            'status' => 'nullable',
            'due_date' => 'nullable|date',
        ], 'tasks', 'subtasks');
    }

    public function create()
    {   
        
        return view('tasks.create');
    }

    public function dueTasks(Request $request)
    {
    
        $rowsPerPage = $request->input('rowsPerPage', 10);

        $records = Tasks::orderBy('due_date', 'asc')->paginate($rowsPerPage);

        return view('tasks-due', compact('records'));
    }
}
