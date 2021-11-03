<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class Task_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

             $register = Task::orderBy('id','asc');  
          return  view('task/create',compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view ('task/create');

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

        'first name' => 'required',
        'last name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'date of birth' => 'required',
        'gender' => 'required',
        'annual income' => 'required',
        'occupation' => 'required',
        'family type' => 'required',
        'manglik' => 'required',
        ]);

            $reg = new Task;
                        $reg1->name = $request->input('name');               

            $reg->first_name = $request->input('first_name');
            $reg->last_name = $request->input('last_name');
            $reg->email = $request->input('email');
            $reg->password = $request->input('password');
            $reg->date_of_birth = $request->input('date_of_birth');
            $reg->gender = $request->input('gender');
            $reg->annual_income = $request->input('annual_ncome');
            $reg->occupation = $request->input('occupation');
            $reg->family_type = $request->input('family_type');
            $reg->manglik = $request->input('manglik');
            $reg->save();

           

            return redirect()->route('auth/login');
}
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
