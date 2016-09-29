<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Card;
use App\Models\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    	// Method One of creating a new record
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	// Method Two of creating a new record
    	// $card->notes()->save([
    	// 	new Note(['body'=> $request->body])
    	// 	]);

    	// Method Three of creating a new record
    	// $card->notes()->create([
    	// 	'body' => $request->body
    	// 	]);

    	// Method Four of creating a new record
    	// $card->notes()->save($request->all());

    	//Method Five of creating a record (uses the Card::class and addNote() function)
    	$card->addNote(
    		new Note($request->all())
    		);

    	return back();
    }

    public function edit(Note $note)
    {
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
    	$note->update($request->all());

    	return back();
    }
}
