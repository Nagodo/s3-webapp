<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Collectable;

class CollectableController extends Controller {
    
    public function ShowAll(): View {

        $collectables = Collectable::order_by('name')->get();


        return view('index', $collectables);
    }

    public function Create(): View {
        return view('create');
    }

}
