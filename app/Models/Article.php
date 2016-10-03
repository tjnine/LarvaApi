<?php 
namespace Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['title', 'body', 'author'];
}
?>