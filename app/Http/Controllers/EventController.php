<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Método para chamar a view da Index
     * @return void
     */
    public function index() 
    {
        $events = Event::all();   
        return view('welcome', ['events' => $events]);
    }

    /**
     * Método para chamar a view de criar evento
     * @return void
     */
    public function create() {
        return view('events.create');
    }

    /**
     * Método para chamar o model e salvar um evento no banco de dados.
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        // instancia event do Eloquent
        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->save();

        // após salvar os dados, retorna a raíz do site.
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }


}

