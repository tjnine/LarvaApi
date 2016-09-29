<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

class CardsController extends Controller
{
    public function index() 
    {
    $cards = Card::all();

    return view('cards.index', compact('cards'));
    }

    public function show($id, Card $card)
    {
        #original
    // $card = Card::find($id);

        #first way to eager-load(starting with a blank object)
    // $card = Card::with('notes')->find($id);    
        //NOTES:
    // Card::with('notes.user')->find($id)
    // 'notes.user' is pointing to the Card::class Model notes() func that defines the relationship - 'public function notes(){}'. While 'user' refers to the user relationship with User::class, Note::class, and Card::class.

        #second way to eager-load(we already have an existing object)
        // $card->load('notes.user');

        // $card = Card::with('notes')->find(1);

         $card = Card::with('notes.user')->find(2);
        
         // return $card;

        
        //NOTES:
    //Notice the show($id) parameter is changed to load the Card::class object.

    return view('cards.show', ['card'=>$card]);
    }
}
