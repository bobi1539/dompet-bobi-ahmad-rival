<?php

namespace App\Http\Controllers;

use App\Models\Pocket;
use App\Models\PocketStatus;
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
            'title' => 'Detail Dompet',
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
        return view('pockets.create', [
            'title' => 'Buat Baru Dompet',
            'statuses' => PocketStatus::orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pocket_status_id'  => [],
            'name'              => ['required', 'max:255', 'min:5'],
            'reference'         => [],
            'description'       => ['max:100']
        ]);

        Pocket::create($validatedData);

        return redirect('/pockets')->with('messageSuccess', 'Dompet berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function show(Pocket $pocket)
    {
        return view('pockets.show', [
            'title' => 'Detail Dompet',
            'pocket' => $pocket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function edit(Pocket $pocket)
    {
        return view('pockets.edit', [
            'title' => 'Edit Dompet',
            'pocket' => $pocket,
            'statuses' => PocketStatus::orderBy('name')->get()
        ]);
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
        $validatedData = $request->validate([
            'pocket_status_id'  => [],
            'name'              => ['required', 'max:255', 'min:5'],
            'reference'         => [],
            'description'       => ['max:100']
        ]);

        Pocket::where('id', $pocket->id)->update($validatedData);

        return redirect('/pockets')->with('messageSuccess', 'Dompet berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pocket  $pocket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Pocket $pocket)
    {
        $data = $request->validate([
            'pocket_status_id' => []
        ]);

        Pocket::where('id', $pocket->id)->update($data);

        return redirect('/pockets')->with('messageSuccess', 'Dompet Status berhasil di ubah');
    }
}
