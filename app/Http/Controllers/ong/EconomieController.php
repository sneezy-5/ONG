<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EconomieController extends Controller
{
    //
    public function index()
    {
        $economies = Story::where('type', 'economie')->paginate(8);
        
        return view('template.nosmissions.economies', compact('economies'));
        
    }

    public function show($id)
    {
        $economie = Story::find($id);
        
        return view('template.show.economie', compact('economie'));
    }
}