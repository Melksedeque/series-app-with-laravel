<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Support\Facades\DB;

class SeriesRepository
{
    public function add(SeriesFormRequest $request): Serie
    {
        return DB::transaction(function () use ($request) {
            $serieData = $request->except('seasons');
            $serie = Serie::create($serieData);

            if ($request->has('seasons') && is_array($request->input('seasons'))) {
                foreach ($request->input('seasons') as $season => $episodes) {
                    $season = new Season([
                        'number' => $season + 1,
                    ]);

                    $serie->seasons()->save($season);

                    if (isset($episodes) && is_array($episodes)) {
                        foreach ($episodes as $episode) {
                            $episode = new Episode([
                                'number' => $episode,
                            ]);

                            $season->episodes()->save($episode);
                        }
                    }
                }
            }

            return $serie;
        });
    }
}
