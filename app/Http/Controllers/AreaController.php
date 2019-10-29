<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $areas = new Area();
        $areas->title = $request->title;
        $areas->community = $request->community;
        $areas->description = $request->description;
        $areas->city =$request->city;
        if($areas->save()){
            return redirect()->route('areas.index');
        } else {
            return redirect()->route('areas.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $areas = Area::findOrFail($id);
        return view('areas.show')->with('areas', $areas);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $areas = Area::find($id);
        return view('areas.edit', compact('areas'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $areas = Area::find($id);
        $areas->title = $request->title;
        $areas->community = $request->community;
        $areas->description = $request->description;
        $areas->city = $request->city;
        $areas->update();
        return redirect('/areas/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $areas = Area::find($id);
        $areas->delete();
        return redirect()->route('areas.index')->with('success', 'Area is succesfully deleted');

    }
}
