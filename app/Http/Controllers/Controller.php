<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Controller
{
    protected $model;
    protected $viewName;
    protected $validationRules;

    public function __construct(Model $model, array $validationRules, $viewName)
    {
        $this->model = $model;
        $this->validationRules = $validationRules;
        $this->viewName = $viewName;
    }

    public function index()
    {
        $records = $this->model::all();
        
        return view($this->viewName, compact('records'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate($this->validationRules);

        $record = new $this->model($validatedData);
        
        $record->user_id = $user->id;

        $record->save();

        return redirect()->route("{$this->viewName}.index")->with('success', 'Record created successfully.');
    }

    public function update(Request $request, $id)
    {   
        $model = $this->model::findOrFail($id);

        $validatedData = $request->validate($this->validationRules);

        $model->fill($validatedData);
        $model->save();

        return redirect()->route("{$this->viewName}.index")->with('success', 'Record Updated successfully.');
    }

    public function destroy(Request $request, $id)
    {   
        $model = $this->model::findOrFail($id);

        $model->delete();

        return redirect()->route("{$this->viewName}.index")->with('success', 'Record Updated successfully.');
    }
}
