<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;

class EventControllers extends Controller
{
    public function store(EventRequest $request, Event $event)
    {
        $event->fill($request->only($event->offsetGet('fillable')))
            ->saveWithFile();

        return redirect()->route('dashboard');
    }

    public function show(Event $event)
    {
        return view('detail-informasi', [
            'nama' => $event->nama_event,
            'deskripsi' => $event->deskripsi,
            'foto' => $event->foto,
        ]);
    }

    public function edit(Event $event)
    {
        return view('edit-event', compact('event'));
    }

    public function update(EventRequest $request, Event $event)
    {
        $event->fill($request->only($event->offsetGet('fillable')))
            ->updateWithFile();

        return redirect()->route('dashboard');
    }

    public function delete(Event $event)
    {
        $event->delete();
        return redirect()->route('dashboard');
    }
}
