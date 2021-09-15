<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccinations = Vaccination::all();
        return view('vaccination.index', ['vaccinations' => $vaccinations]);

      //  edit();
      //  return view('vaccination.edit', ['vaccination' => $vaccination]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccination = new Vaccination;
        $vaccination->first = $request->first;
        $vaccination->second = $request->second;
        $vaccination->third = $request->third;
        $vaccination->save();
        return redirect()->route('vaccination.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccination $vaccination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccination $vaccination)
    {
        return view('vaccination.edit', ['vaccination' => $vaccination]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccination $vaccination)
    {
        $vaccination->first = $request->first;
        $vaccination->second = $request->second;
	    $vaccination->third = $request->third;
        $vaccination->save();
        return redirect()->route('vaccination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccination $vaccination)
    {
    $vaccination->delete();
    return redirect()->route('vaccination.index');

    }
}
