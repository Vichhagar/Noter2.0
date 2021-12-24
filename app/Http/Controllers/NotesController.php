<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;

class NotesController extends Controller
{
    //user dashboard page
    public function dashboard() {
        $userId = Auth::user() -> id;
        $notes = DB::table('notes')->where('user_id', $userId)->orderBy('created_at', 'desc');
        if(request('search')) {
            $notes->where('title', 'like', '%' . request('search') . '%');
        }
        $total = DB::table('notes')->where('user_id', $userId)->count();
        $public = DB::table('notes')->where('isPublic', true)->where('user_id', $userId)->count();
        return view('dashboard', ['notes' => $notes->get(), 'total' => $total, 'public' => $public]);
    }

    //Home page //Public note display
    public function home() {
        $notes = DB::table('notes')->where('isPublic', true)->orderBy('created_at', 'desc');
        
        if(request('search')) {
            $notes->where('title', 'like', '%' . request('search') . '%');
        }
        
        return view('home', ['notes' => $notes->get()]);
    }

    //Create
    public function create() {
        return view('create');
    }

    public function store() {
        request() -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $public = false;
        if(request('isPublic') == "true") {
            $public = true;
        }

        Note::create([
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'content' => request('content'),
            'isPublic' => $public
        ]);

        return redirect('/dashboard');
    }

    //note view loged in users
    public function detail(Note $detail) {
        if($detail -> user_id == Auth::user()->id){
            return view('view', ['note' => $detail]);
        } else {
            return abort(404);
        }
    }

    //note view non login
    public function public_note(Note $note) {
        if($note -> isPublic == 1){
            return view('publicView', ['note' => $note]);
        } else {
            return abort(404);
        }
    }

    //Update note
    public function edit(Note $note) {
        if($note -> user_id == Auth::user()->id){
            return view('update', ['note' => $note]);
        } else {
            return abort(404);
        }
    }

    public function update(Note $note) {
        request() -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $public = false;
        if(request('isPublic') == "true") {
            $public = true;
        }

        $note->update([
            'title' => request('title'),
            'content' => request('content'),
            'isPublic' => $public
        ]);

        return redirect('/dashboard');
    }

    //Delete
    public function delete(Note $note) {
        if($note -> user_id == Auth::user()->id){
            $note -> delete();
            return redirect('/dashboard');
        }
        dd("Not Way You try to delete other people note, LOL");
    }
}
