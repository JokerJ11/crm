<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class StateController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();

       return view('states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('states.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $states = new State();

        $states->name = request('name');
        $states->country_id = request('country_id');

        $states->save();

        return redirect('/states')->with('success', 'State is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        $states = State::all();

        return view('states.index', compact('states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states = State::find($id);
        $countries = Country::all();

        return view('states.edit', compact('states', 'countries'));
        // return $countries;
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
            'country_id' => 'required',
        ]);

        $state = State::find($id);
        $state->name = $request->input('name');
        $state->country_id = $request->input('country_id');

        $state->save();
        // return $id;
        // $cities = new City();

        // $cities->state_id = request('state_id');
        // $cities->name = request('name');

        // $cities->update();
        // return $id;
        // return $cities->name;
        // return $cities->id;
        //  $cities = City::whereId($id)->update($cities);


        return redirect('/states')->with('success', 'State is successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();

        return redirect('/states')->with('success', 'State is successfully Deleted');
    }

}
