<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Http\Request;

class OccasionController extends Controller
{
    public function show(){
        return view('Occasions', [
            'occasions' => Occasion::all()
        ]);
    }
}
