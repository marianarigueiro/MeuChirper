<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->get();

        return view('home', compact('chirps'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        Chirp::create([
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('home');
    }

    public function edit(Chirp $chirp)
    {
        $this->authorizeOwner($chirp);

        return view('chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp)
    {
        $this->authorizeOwner($chirp);

        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update([
            'message' => $request->message,
        ]);

        return redirect()->route('home');
    }

    public function destroy(Chirp $chirp)
    {
        $this->authorizeOwner($chirp);

        $chirp->delete();

        return redirect()->route('home');
    }

    private function authorizeOwner(Chirp $chirp)
    {
        if ($chirp->user_id !== Auth::id()) {
            abort(403);
        }
    }
}