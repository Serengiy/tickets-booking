<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Models\Event;
use App\Models\Occasion;
use App\Models\Place;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function show(Event $event){
        return view('places', [
            'event' => $event,
            'total_places' => $event->total_places,
            'places' => Place::select('place_number')->where('event_id', $event->id)->get()->map(function ($k){return $k = $k['place_number'];})->toArray()
        ]);
    }

    public function book(Event $event, $place){
        if($place > $event->total_places){
            abort(404);
        }
        if($this->isPlaceBooked($event, $place)){
            abort(404);
        }
        return view('place_booking', [
            'place' => $place,
            'event' =>$event,
        ]);
    }

    public function store(PlaceRequest $request){
        $data = $request->validated();
        $place = Place::where('event_id', $data['event_id'])->where('place_number', $data['place_number'])->first();
        if($place){
            return back()->with('alert', 'the place is taken');
        }
        Place::create($data);
        return redirect('/')->with('alert', 'The place is booked');
    }


    private function isPlaceBooked($event, $place): int
    {
        return Place::query()->where('event_id', $event->id)->where('place_number', $place)->exists();
    }
}
