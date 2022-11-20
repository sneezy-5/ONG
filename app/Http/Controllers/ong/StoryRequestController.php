<?php

namespace App\Http\Controllers\ong;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorieRequestValidation;
use App\Models\StoryRequest;
use Illuminate\Http\Request;

class StoryRequestController extends Controller
{
    //
    public function createStoryRequest()
    {
        return view('template.storyrequest.create');
    }
    
    public function storeStoryRequest(StorieRequestValidation $request)
    {
        $this->validate($request,[]);

        StoryRequest::create($request->all());

        return redirect()->route('/')->with('success', 'Votre don a été effectué avec succès');
    }
}
