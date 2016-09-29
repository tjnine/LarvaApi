<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $table = 'cards';

    protected $fillable = ['title'];

    public function notes()
    {
    	#can also be written as----
    	# return $this->hasMany('App\Note');
    	return $this->hasMany(Note::class);
    }

    public function user()
    {
return $this->belongsTo('App\Models\User', 'user_id', 'card_id');
    }

    public function addNotes(Note $note)
    {
    	return $this->notes()->save($note);
    }

}
