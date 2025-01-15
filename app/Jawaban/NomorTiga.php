<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorTiga {
    public function getData()
    {
        $data = Event::where('user_id', Auth::id())->get();
        return response()->json($data);
    }

    public function getSelectedData(Request $request)
    {
        $data = Event::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',  
            'name' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after:start',  
        ]);    
        $event = Event::where('id', $request->event_id)
            ->where('user_id', Auth::id())  
            ->first();    
        if ($event) {
            $event->name = $request->name;
            $event->start = $request->start;
            $event->end = $request->end;
            $event->save();   
            return redirect()->route('event.home')->with('berhasil', 'Event updated successfully.');
        }
        return redirect()->route('event.home')->with('error', 'Event tidak ditemukan.');
    }
    
    public function delete(Request $request)
    {
        $event = Event::where('id', $request->id)
                    ->where('user_id', Auth::id())
                    ->first();
        if ($event) {
            $event->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    
}
