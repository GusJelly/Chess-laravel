<?php

namespace App\Http\Controllers;

use App\Models\Chessie;
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
        return view('chessies.index', [
            'chessie' => Chessie::with('user')->latest()->get(),
        ]);
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

        return redirect(route('chessie.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chessie $chessie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chessie $chessie): View
    {
        $this->authorize('update', $chessie);

        return view('chessiesjj.edit', [
            'chessie' => $chessie,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chessie $chessie): RedirectResponse
    {
        $this->authorize('update', $chessie);

        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        $chessie->update($validated);

        return redirect(route('chessie.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chessie $chessie): RedirectResponse
    {
        $this->authorize('delete', $chessie);
        $chessie->delete();

        return redirect(route('chessie.index'));
    }
}
