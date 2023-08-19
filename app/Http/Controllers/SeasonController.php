<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function store(Request $request, Serie $serie)
    {
        $this->validate($request, [
            'number' => 'required|integer',
        ]);

        $seasonData = $request->only('number');
        $season = $serie->seasons()->create($seasonData);

        return response()->json($season, 201);
    }

}
