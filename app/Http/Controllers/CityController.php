<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

       return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        return view('cities.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cities = new City();

        $cities->state_id = request('state_id');
        $cities->name = request('name');

        $cities->save();

        return redirect('/cities')->with('success', 'City is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities = City::find($id);
        $states = State::all();
        // return $cities;
        // return $cities->name;
        // $cities = City::with('state')->get();        
        // return $cities;
        return view('cities.edit', compact('cities', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'state_id' => 'required',
        ]);

        $city = City::find($id);
        $city->name = $request->input('name');
        $city->state_id = $request->input('state_id');

        $city->save();
        // return $id;
        // $cities = new City();

        // $cities->state_id = request('state_id');
        // $cities->name = request('name');

        // $cities->update();
        // return $id;
        // return $cities->name;
        // return $cities->id;
        //  $cities = City::whereId($id)->update($cities);


        return redirect('/cities')->with('success', 'City is successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return redirect('/cities')->with('success', 'City is successfully Deleted');
    }
}
