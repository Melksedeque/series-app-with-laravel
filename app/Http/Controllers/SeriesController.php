<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $series = Serie::all()->sortBy('title');
        $message = session('success.message');

        return view('series.index', compact('series'))->with('message', $message);
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
        $request->validate([
            'nome' => ['required', 'min:3'],
        ]);
        
        $serie = Serie::create($request->all());

        $text = "Série '$serie->title' adicionada com sucesso!";

        return to_route('series.index')->with('success.message', $text);
    }

    /**
     * Display the specified resource.
     */
    public function show(Serie $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $series)
    {
        return view('series.edit')->with('series', $series);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serie $series)
    {
        $series->fill($request->all());
        // dd($series);
        $series->save();

        return to_route('series.index')->with('success.message', "Série '{$series->title} atualizada com sucesso!'");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serie $series)
    {
        $series->delete();

        return to_route('series.index')->with('success.message', "Série '{$series->title}' removida com sucesso!");
    }
}
