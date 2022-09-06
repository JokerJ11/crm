<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;
use App\Models\Type_of_work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\ProgressBar;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type_of_work::all();
        // return $types;
        return view('tasks.create', compact('types'));
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
            'name' => 'required|max:255',
            'ref_no' => 'required|max:255',
            // 'description' => 'required|max:255',
            // 'attachment' => 'required',
        ]);

        
        $tasks = new Task();
        


        $tasks->name = request('name'); 
        // return $tasks;
        $tasks->ref_no = $tasks->generateOrderNR();   
        $tasks->ref_no = $tasks->updateProgress(); 
        // return $tasks;  
        $tasks->type_of_work_id = request('type_of_work_id');     
        $tasks->description = request('description');
        $tasks->attachment = request('attachment');
        $tasks->assigned_date = date('Y-m-d', strtotime($request->input('assigned_date')));
        $tasks->due_date = date('Y-m-d', strtotime($request->input('due_date')));
        $tasks->start_date = date('Y-m-d', strtotime($request->input('start_date')));
        $tasks->stop_date = date('Y-m-d', strtotime($request->input('stop_date')));
        $t1->plan_duration = date('Y-m-d', strtotime($request->input('plan')));
        $t2->actual_duration = date('Y-m-d', strtotime($request->input('actual')));
        $tasks = $t1->diff($t2);

        return $tasks;


        // $tasks->save();
        // return redirect('/tasks')->with('success', 'Task is successfully saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasks $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}
