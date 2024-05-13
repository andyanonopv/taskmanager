<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CfFormController extends Controller
{
    public function cfsubmitForm(Request $request)
    {
        return response()->json(['message' => 'CF Form submitted successfully!']);
    }
}
