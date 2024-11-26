<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;
use App\Http\Requests\FormRegisRequest;

class FormController extends Controller
{
    public function index(FormRegisRequest $request){
        $validated = $request->validated();
        //dd($validated);
        //dd([$request,$request->file()]);

    }
}
