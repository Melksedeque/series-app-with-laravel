<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function store(Request $request, Season $season)
    {
        $this->validate($request, [
            'number' => 'required|integer',
            'title' => 'required|string',
        ]);

        $episodeData = $request->only('number', 'title');
        $episode = $season->episodes()->create($episodeData);

        return response()->json($episode, 201);
    }
}
