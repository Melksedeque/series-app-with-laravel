<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $series = Serie::active()->get();
        $message = session('success.message');

        return view('serie.index', compact('series'))->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('serie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SeriesFormRequest $request)
    {
        $serie = DB::transaction(function () use ($request) {
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

        $text = "Série '$serie->title' adicionada com sucesso!";
        return redirect()->route('serie.index')->with('success.message', $text);
    }


    /**
     * Display the specified resource.
     */
    public function show(Serie $serie)
    {
        return view('serie.show')->with('serie', $serie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $serie)
    {
        return view('serie.edit')->with('serie', $serie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SeriesFormRequest $request, Serie $serie)
    {
        $serie->fill($request->all());
        $serie->save();

        return redirect()->route('serie.index')->with('success.message', "Série '{$serie->title}' atualizada com sucesso!'");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serie $serie)
    {
        $serie->delete();

        return redirect()->route('serie.index')->with('success.message', "Série '{$serie->title}' removida com sucesso!");
    }
}
