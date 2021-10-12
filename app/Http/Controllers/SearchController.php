<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Info;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class SearchController extends Controller
{
    public function findKeyWord(Request $request)
    {

        // $data = Info::with('category')->get();

        // $response = [
        //     'data' => $data
        // ];

        // return response($response, 200);
        // dd($request);
        $term = $request->get('keyword');

        $results = Search::add(Info::with('category'), 'name')
            ->beginWithWildcard()
            ->paginate(10)
            ->get($term);

        return response($results);
    }
}
