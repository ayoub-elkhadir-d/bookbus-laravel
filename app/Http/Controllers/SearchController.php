<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Segment;
use App\Models\Programe;

class SearchController extends Controller
{

    public function index()
    {
       
        $departureCities = Segment::select('departure_city')
            ->distinct()
            ->pluck('departure_city');

        $arrivalCities = Segment::select('arrival_city')
            ->distinct()
            ->pluck('arrival_city');

        return view('index', compact('departureCities', 'arrivalCities'));
    }

    public function search(Request $request)
    {    
      
       
        $departureCities = Segment::select('departure_city')
            ->distinct()
            ->pluck('departure_city');

        $arrivalCities = Segment::select('arrival_city')
            ->distinct()
            ->pluck('arrival_city');

        $results = Segment::where('departure_city', $request->from_city)
            ->where('arrival_city', $request->to_city)
            ->get();

         $programs = Programe::with('segment')->get();
       foreach($programs as $p){
          foreach($results as $r){
             if($p->jour_depart == $request->date && $p->route_id == $r->id_route){
                  return view('index', compact('departureCities', 'arrivalCities', 'results'));
             }else{
                $results = [];
                 return view('index', compact('departureCities', 'arrivalCities', 'results'));
             }

          }
      
       }
       

       
    }
     
}
