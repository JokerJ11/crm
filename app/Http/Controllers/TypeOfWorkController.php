<?php

namespace App\Http\Controllers;

use App\Models\Type_of_work;
use Illuminate\Http\Request;

class TypeOfWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type_of_work::all();
        // return $types;
        return view('type_of_works.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_of_works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'type' => 'required',
            'remark' => 'required',
        ]);

        $types = Type_of_work::create($validateData);

        return redirect('/type_of_works')->with('success', 'Type of Work is successfully saved');
        // return redirect('type_of_works.index')->with('success', 'Type of Work Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_of_work  $type_of_work
     * @return \Illuminate\Http\Response
     */
    public function show(Type_of_work $type_of_work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type_of_work  $type_of_work
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type_of_work::findOrFail($id);

        return view('type_of_works.edit', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type_of_work  $type_of_work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'type' => 'required',
            'remark' => 'required',
        ]);

        Type_of_work::whereId($id)->update($validateData);

        return redirect('/type_of_works')->with('success', 'Type of Work is successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_of_work  $type_of_work
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = Type_of_work::findOrFail($id);
        $types->delete();

        return redirect('/type_of_works')->with('success', 'Type of Work Data is successfully Deleted');
    }
}
