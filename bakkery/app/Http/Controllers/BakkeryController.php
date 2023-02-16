<?php

namespace App\Http\Controllers;

use App\Models\Bakkery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BakkeryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("bakkery.index", [
                'bakkery' =>Bakkery::with('user')->latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
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
        $request->user()->bakkery()->create($validated);

        return redirect(route('bakkery.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bakkery $bakkery): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bakkery $bakkery): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bakkery $bakkery): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bakkery $bakkery): RedirectResponse
    {
        //
    }
}
