<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePocketStatusRequest;
use App\Http\Requests\UpdatePocketStatusRequest;
use App\Models\PocketStatus;

class PocketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePocketStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePocketStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PocketStatus  $pocketStatus
     * @return \Illuminate\Http\Response
     */
    public function show(PocketStatus $pocketStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PocketStatus  $pocketStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(PocketStatus $pocketStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePocketStatusRequest  $request
     * @param  \App\Models\PocketStatus  $pocketStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePocketStatusRequest $request, PocketStatus $pocketStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PocketStatus  $pocketStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(PocketStatus $pocketStatus)
    {
        //
    }
}
