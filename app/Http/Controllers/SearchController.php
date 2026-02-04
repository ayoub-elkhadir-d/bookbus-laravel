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

    public function search(Request $request)
    {
        $segments = Segment::select('departure_city', 'arrival_city')
            ->distinct()
            ->get();

        $results = Segment::where('departure_city', $request->from_city)
            ->where('arrival_city', $request->to_city)
            ->get();

        return view('index', compact('segments', 'results'));
    }
}
