<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tasks;
use App\Models\Subtasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function index(Request $request)
    {   
        $rowsPerPage = $request->input('rowsPerPage', 10);

        $tasks = Tasks::where('user_id', auth()->id())->paginate($rowsPerPage);
        $subtasks = Subtasks::where('user_id', auth()->id())->paginate($rowsPerPage);
        $truncatedTasks = Tasks::select('id', 'name', DB::raw("SUBSTRING(description, 1, 100) AS description_short"))
                            ->where('user_id', auth()->id())
                            ->paginate($rowsPerPage);


        return view('tasks', compact('tasks', 'truncatedTasks', 'subtasks'));
    }

    public function dueTasks(Request $request)
    {
    
        $rowsPerPage = $request->input('rowsPerPage', 10);

        $records = Tasks::orderBy('due_date', 'asc')->paginate($rowsPerPage);

        return view('tasks-due', compact('records'));
    }
}
