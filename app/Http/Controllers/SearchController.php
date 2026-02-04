<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Segment;
class SearchController extends Controller
{
     public function index()
    {
        $segments = Segment::select('departure_city', 'arrival_city')
            ->distinct()
            ->get();

        return view('index', compact('segments'));
    }

    
}
