<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Collectable;

class CollectableController extends Controller {
    
    public function Index(): View {

        $collectables = Collectable::orderBy("name", 'asc')->get();

        return view('index', ['collectables' => $collectables]);
    }

    public function Create(): View {
        return view('create');
    }

    public function Store(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'integer', 'min:0'],
        ]);

        Collectable::create($validated);

        return redirect()->route('index');
    }

}
