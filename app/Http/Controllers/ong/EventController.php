<?php

namespace App\Http\Controllers\ong;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequestValidation;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        return view('template.dashaord', compact('events'));
    }

    public function createEvent()
    {
        return view('template.events');
    }

    public function storeEvents(EventRequestValidation $request)
    {
        $this->validate($request, []);

        Event::create($request->all());
        
        return redirect()->route('/')->with('success', 'Votre evenement a été envoyé avec succès');
    }
}
