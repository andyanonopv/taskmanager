<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController 
{
    public function index()
    {       
        $user = Auth::user();

        $tasks = Tasks::all();

        $counter = 0;
        $pending = 0;
        $completed = 0;
    
        foreach($tasks as $task)
        {   
            $counter++;
            if($task->status === 'completed'){
                $completed++;
            } else {
                $pending++;
            }
        }

        return view('dashboard', compact('user','tasks','counter','completed','pending'));
    }
}
