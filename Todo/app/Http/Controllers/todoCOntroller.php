<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = todo::all();
        return view("todo.home",compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $todo = new todo;
        $this->validate($request,[
                'todo' => 'required',
                'title' => 'required|unique:todos',
            ]);
        $todo->title = $request->title;
        $todo->todo = $request->todo;
        $todo->save();
        return redirect('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = todo::find($id);
        return view('todo.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = todo::find($id);
        return view('todo.edit',compact('todo'));
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
         $todo = todo::find($id);
        $this->validate($request,[
                'todo' => 'required',
                'title' => 'required',
            ]);
        $todo->title = $request->title;
        $todo->todo = $request->todo;
        $todo->save();
        session()->flash('message','Updated Successfully...');
        return redirect('todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = todo::find($id);
        $todo->delete();
        session()->flash('message','Deleted Successfully...');
        return redirect('/todo');

    }
}
