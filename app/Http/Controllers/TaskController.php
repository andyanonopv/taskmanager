<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{   
    public function __construct()
    {
        parent::__construct(new Tasks(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'priority' => 'required',
        ], 'tasks');
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

}
