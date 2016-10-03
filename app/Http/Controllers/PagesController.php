<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	$text = 'Looking for a bit of a refresh on PHP, JS, GO, C, and more? Well this isn\'t the place, instead this is a place of expertise knowledge. People who want to learn will find great confidence in this site. Obviously this is not going to be the opening paragraph but if it were, oh well. Filler text is dumb just like this opening paragraph. Keep it 140!';
        $title = 'teej ten app';
        $author = 'teejten';
    	return view('index', ['title'=>'Teejten App', 'author'=>'teejten','text'=>$text]);
    }
}
