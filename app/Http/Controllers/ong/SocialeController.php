<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialeController extends Controller
{
    //
    public function index()
    {
        $sociales = Story::where('type', 'sociale')->get();
        
        return view('template.nosmissions.sociales', compact('sociales'));
    }

    public function show($id)
    {
        $sociale = story::find($id);
        
        return view('template.show.sociale', compact('sociale'));
    }
}