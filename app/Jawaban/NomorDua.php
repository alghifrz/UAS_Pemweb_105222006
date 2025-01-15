<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;


class NomorDua {

    public function submit(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $event = new Event();
        $event->name = $request->input('name');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->user_id = Auth::id(); 
        $event->save();

        return redirect()->route('event.home')->with('success', 'Event berhasil disimpan!');
    }
}
