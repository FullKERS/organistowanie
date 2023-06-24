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
        $songs = Song::all();
        return view('songs.index', compact('songs'));
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
        $song->title = $request->input('title');
        // Ustawienie innych pól utworzonego utworu

        $song->save();

        return redirect()->route('songs.index')->with('success', 'Zapisano');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::findOrFail($id);

        return view('songs.show', compact('song'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::findOrFail($id);

        return view('songs.edit', compact('song'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::findOrFail($id);
        $song->title = $request->input('title');
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
