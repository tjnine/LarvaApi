<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $filllable = ['first_name','last_name','phone','email',];
}
