<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\musicKey;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Songs = Song::all();
        return view('songs.index', compact('Songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $musicKeys = musicKey::all();

        return view('songs.create', compact('musicKeys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $song = new Song();
        $song->name = $request->input('name');
        $song->songBeginCdur=$request->input('songBeginCdur');
        $song->openSongText=$request->input('openSongText');
        $song->music_key_id=$request->input('music_key_id '); //klucz obcy do tabeli z tonacjami

        $song->save();

        return redirect()->route('songs.index')->with('success', 'Zapisano');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$song = Song::findOrFail($id);

        //return view('songs.show', compact('song'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::findOrFail($id);
        $musicKeys = musicKey::all();

        return view('songs.edit', compact('song', 'musicKeys'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::findOrFail($id);
        $song->update($request->all());
        // Ustawienie innych pól edytowanego utworu

        $song->save();

        return redirect()->route('songs.index')->with('success', 'Zaktualizowano');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::findOrFail($id);
        $song->delete();

        return redirect()->route('songs.index')->with('success', 'Usunięto');

    }
}
