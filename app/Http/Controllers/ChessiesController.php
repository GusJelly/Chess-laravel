<?php

namespace App\Http\Controllers;

use App\Models\chessies;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ChessiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('chessies.index');
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chessies()->create($validated);

        return redirect(route('chessies.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(chessies $chessies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chessies $chessies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chessies $chessies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chessies $chessies)
    {
        //
    }
}
