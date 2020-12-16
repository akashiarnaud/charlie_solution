<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprise', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
        ]);
        $show = Entreprise::create($validatedData);

        return redirect('/entreprises')->with('success', 'A new entreprise is successfully saved');
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
        $entreprise = Entreprise::findOrFail($id);
        return view('edit', compact('entreprise'));
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
        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
        ]);
        Entreprise::whereId($id)->update($validatedData);

        return redirect('/entreprises')->with('success', 'Entreprise data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $entreprise->delete();

        return redirect('/entreprises')->with('success', 'Entreprise Data is successfully deleted');
    }
}
