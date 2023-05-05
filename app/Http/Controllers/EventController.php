<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Occasion;
use App\Models\Place;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(Occasion $occasion){
        return view('event', [
            'occasion' => $occasion,
            'events'=> Event::where('occasion_id', $occasion->id)->get(),
        ]);
    }
}
