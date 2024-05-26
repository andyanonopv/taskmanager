<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

abstract class CRUDController 
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

    public function index(Request $request)
    {   
        $rowsPerPage = $request->input('rowsPerPage', 10);

        $records = $this->model::where('user_id', auth()->id())->paginate($rowsPerPage);
        $truncatedRecords = $this->model::select('id', 'name', DB::raw("SUBSTRING(description, 1, 100) AS description_short"))
                            ->where('user_id', auth()->id())
                            ->paginate($rowsPerPage);


        return view($this->viewName, compact('records', 'truncatedRecords'));
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
