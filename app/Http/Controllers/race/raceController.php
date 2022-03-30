<?php

namespace App\Http\Controllers\race;

use App\Http\Controllers\Controller;
use App\Models\race\raceModel;
use Illuminate\Http\Request;

class raceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = raceModel::orderBy('name', 'asc')->paginate();

        return view('race/index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('race/create');
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
        ]);

        $race = new raceModel();

        $race->name = $request->name;

        $race->save();

        return redirect()->route('race');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $races = raceModel::find($id);

        return view('race/show', compact('races'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $races = raceModel::find($id);

        return view('race/edit', compact('races'));
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
        ]);

        $races = raceModel::find($id);

        $races->name = $request->name;

        $races->save();

        return redirect()->route('race');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $races = raceModel::find($id);

        $races->delete();

        return redirect()->route('race');
    }
}
