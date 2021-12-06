<?php

namespace App\Http\Controllers;

use App\Models\Pocket;
use Illuminate\Http\Request;

class PocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pockets.index', [
            'title' => 'Dompet',
            'pockets' => Pocket::all()->load('pocketStatus')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function show(Pocket $pocket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function edit(Pocket $pocket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pocket $pocket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pocket $pocket)
    {
        //
    }
}
