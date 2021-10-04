<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function findKeyWord(Request $request)
    {

        $data = Info::with('category')->get();

        $response = [
            'data' => $data
        ];

        return response($response, 200);
    }
}
