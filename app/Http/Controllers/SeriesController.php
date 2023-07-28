<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = DB::select('SELECT * FROM series WHERE status = ?', [1]);
        // dd($series);

        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $seasons = $request->input('seasons');
        $premiere_date = $request->input('premiere_date');
        $synopsis = $request->input('synopsis');
        $image = $request->input('image');

        if(DB::insert(
            'INSERT INTO series (title, seasons, premiere_date, synopsis, image)
            VALUES (?, ?, ?, ?, ?)',
            [$title, $seasons, $premiere_date, $synopsis, $image])) {
            return redirect('/series');
        } else {
            return "Deu ruim!";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Series $series)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        //
    }
}
