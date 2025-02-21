<?php

namespace App\Http\Controllers;

use App\Charts\PendaftarChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PendaftarChart $chart)
    {
        $role = auth()->user()->role;

        if ($role =='vip'  ) {
            redirect()->action([KepsekController::class, 'index']);
        }elseif ($role == 'admin') {
            redirect()->action([AdminController::class, 'index']);
        }else{
            redirect()->action([SiswaController::class, 'index']);
        }

        // return view('dashboard')->with(['chart'=>$chart->build()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
