<?php
#Bindings
// App::bind('SuperModels\Repositories\Contracts\RepositoryInterface','SuperModels\Repositories\Eloquent\Repository');

Route::get('/', ['as'=>'home', 'uses'=> 'PagesController@home']);
#Route::get('articles/{id}', ['as' => 'article', 'uses' => 'ArticlesController@show']);
Route::resource('articles', 'ArticlesController');

Route::get('cards', ['as' => 'cards', 'uses' => 'CardsController@index']);
Route::get('cards/{id}', ['as' => 'card', 'uses' => 'CardsController@show']);
Route::post('cards/{id}/notes', ['uses'=>'NotesController@store']);
#Route model binding {name} must match the $name variable passed to Controller/Model
Route::get('notes/{note}/edit', ['uses'=> 'NotesController@edit']);
Route::patch('notes/{note}', ['uses'=>'NotesController@update']);

#EmberJS catch all route
Route::any('{catchall}',function(){
    return view('index');
})->where('catchall', '(.*)');