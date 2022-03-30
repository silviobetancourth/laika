<?php

namespace App\Http\Controllers\pet;

use App\Http\Controllers\Controller;
use App\Models\pet\petModel;
use App\Models\race\raceModel;
use Illuminate\Http\Request;

class petController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = petModel::orderBy('name', 'asc')->paginate();

        $races = raceModel::all();

        return view('pet/index', compact('pets', 'races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $races = raceModel::all();
        
        return view('pet/create', compact('races'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'color' => 'required|string',
            'weight' => 'required|integer',
            'size' => 'required|string',
            'race_id' => 'required|string',
        ]);

        $pet = new petModel();

        $pet->name = $request->name;
        $pet->color = $request->color;
        $pet->weight = $request->weight;
        $pet->size = $request->size;
        $pet->race_id = $request->race;

        $pet->save();

        return redirect()->route('pet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = petModel::find($id);
        $races = raceModel::all();

        return view('pet/edit', compact('pet', 'races'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'color' => 'required|string',
            'weight' => 'required|integer',
            'size' => 'required|string',
            'race_id' => 'required|string',
        ]);

        $pet = petModel::find($id);

        $pet->name = $request->name;
        $pet->color = $request->color;
        $pet->weight = $request->weight;
        $pet->size = $request->size;
        $pet->race_id = $request->race;

        $pet->save();

        return redirect()->route('pet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = petModel::find($id);
        
        $pet->delete();

        return redirect()->route('pet');
    }
}
