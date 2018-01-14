<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NotesRequest;

class NotesController extends Controller
{
    public function index(){

      $notes= Note::all();
      return view('/Notes/index', ['notes' => $notes]);
    }
/*
    public function show($value){
      //$note=DB::table('notes')->find($id);//buscar en la llave primaria
      $note= Note::find($value);
      //return $notes;
      return view('/Notes/show', ['note' => $note]);
    }*/
    public function show(Note $note){

      return view('/Notes/show', ['note' => $note]);
    }

    public function crear(){
       return view('/Notes/create');
    }

    public function store(NotesRequest $request){

        /*request()->validate([
          'title'=>'required',
          'body'=>'required|min:20'
        ]);*/

        //dd(request()->all());
        /*
        $note = new Note;
        $note->title=request()->title;
        $note->body=request()->body;
        $note->important=is_null(request()->important) ? 0 : 1;
        $note->save();*/
        Note::create(request()->all());
        //Note::create(['title' => request()->title, 'body' => request()->body, 'important' => (is_null(request()->important) ? 0 : 1)]);
        //return redirect('/notes');
        return back();
    }

    public function edit(Note $note){
       return view('Notes.edit', compact('note'));
    }

    public function update(Note $note,NotesRequest $request){
    /*  request()->validate([
        'title'=>'required',
        'body'=>'required|min:20'
      ]);*/
      /*
      $note->title=request()->title;
      $note->body=request()->body;
      $note->important=is_null(request()->important) ? 0 : 1;
      $note->save();*/

      $note->update(request()->all());
      return redirect('/notes');
    }

}
