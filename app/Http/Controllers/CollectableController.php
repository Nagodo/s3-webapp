<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CollectableController extends Controller {
    
    public function ShowAll(): View {
        return view('create');
    }

}
