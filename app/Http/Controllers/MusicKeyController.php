<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\musicKey;


class MusicKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musicKeys = musicKey::all();
        return view('musicKeys.index', compact('musicKeys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('musicKeys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //die("test");
        $musicKey = new MusicKey();
        $musicKey->name = $request->input('name');
        $musicKey->transpositionDown = $request->input('transpositionDown');
        $musicKey->transpositionUp = $request->input('transpositionUp');
        $musicKey->chord1 = $request->input('chord1');
        $musicKey->chord2 = $request->input('chord2');
        $musicKey->chord3 = $request->input('chord3');
        $musicKey->chord4 = $request->input('chord4');
        $musicKey->chord5 = $request->input('chord5');
        $musicKey->chord6 = $request->input('chord6');
        $musicKey->chord7 = $request->input('chord7');


        $musicKey->save();

        return redirect()->route('musicKey.index')->with('success', 'Zapisano');
    }

    /**
     * Display the specified resource.
     */
    public function show(musicKey $musicKey)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(musicKey $musicKey)
    {
        //generate Laravel controler edit action


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, musicKey $musicKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(musicKey $musicKey)
    {
        //
    }
}
