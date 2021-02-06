<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Todo;
use Illuminate\Support\Carbon;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $todo = Todo::orderBy('created_at', 'DESC');
        // dd($Todo);
        // return Inertia::render('Index', ['todo' => $todo]);
        return Todo::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $todo = Todo::orderBy('created_at', 'DESC');
        return Inertia::render('Index', ['todo' => $todo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTodo = new Todo;
        $newTodo->title = $request->todo["title"];
        $newTodo->save();

        return $newTodo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $existingTodo = Todo::find( $id );
        if ( $existingTodo ) {
            $existingTodo->done = $request->todo['done'] ? true : false;
            $existingTodo->completed_at = $request->todo['done'] ? Carbon::now() : null;
            $existingTodo->save();
            return $existingTodo;
        }
        return "Todo not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingTodo = Todo::find( $id );
        if ( $existingTodo ) {
            $existingTodo->delete();
            return "Todo deleted successfully";
        }
        return "Todo not found";
    }
}
