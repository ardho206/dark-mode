<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        $title = 'All Games';

        return view('dashboard.game.index', compact('title', 'games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Game';
        return view('dashboard.game.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'inputType' => 'required|in:id-only,id-and-server',
            'logo' => 'required|image|file|max:2024|mimes:jpeg,png,jpg,webp',
            'banner' => 'required|image|file|max:2024|mimes:jpeg,png,jpg,webp',
            'topup' => 'boolean',
            'joki' => 'boolean',
        ]);

        if ($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logo');
        }

        if ($request->file('banner')) {
            $validatedData['banner'] = $request->file('banner')->store('banner');
        }

        Game::create($validatedData);

        return redirect()->route('game.index')->with('success', 'Game berhasil ditambahkan.');
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
