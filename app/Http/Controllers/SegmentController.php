<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    public function index()
    {
        $segments = Segment::with(['route', 'bus'])->get();
        return view('index', compact('segments'));
    }

    public function search(Request $request)
    {
        $segments = Segment::with(['route', 'bus'])
            ->where('departure_city', $request->departure_city)
            ->where('arrival_city', $request->arrival_city)
            ->get();

        return view('segments.index', compact('segments'));
    }
}
