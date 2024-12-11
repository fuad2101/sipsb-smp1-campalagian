<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRegisRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(FormRegisRequest $request){
        dd([$request->file(),$request]);
        $validated = $request->all();

    }
}
