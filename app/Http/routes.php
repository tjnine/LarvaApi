<?php
#Old Bindings
// App::bind('SuperModels\Repositories\Contracts\RepositoryInterface','SuperModels\Repositories\Eloquent\Repository');

Route::get('/', ['as'=>'home', 'uses'=> 'PagesController@home']);
#Route::get('articles/{id}', ['as' => 'article', 'uses' => 'ArticlesController@show']);
Route::resource('articles', 'ArticlesController', ['names'=> [
    'create' => 'article.buildForm',
    'store' => 'article.post',
    'destroy' => 'article.delete',
    'update' => 'article.update',
    'edit' => 'article.editForm'
    ]]);
Route::resource('contacts', 'ContactsController', ['names'=> [
    'create' => 'contact.buildForm',
    'store' => 'contact.post',
    'destroy' => 'contact.delete',
    'update' => 'contact.update',
    'edit' => 'contact.editForm'
    ]]);
Route::resource('invitations', 'InvitationsController', ['names' => [
    'create' => 'invitation.buildForm',
    'store' => 'invitation.post',
    'destroy' => 'invitation.delete',
    'update' => 'invitation.update',
    'edit' => 'invitation.editForm'
    ]]);

Route::get('allarticles', ['as'=> 'article.all', 'uses'=> 'ArticlesController@all']);
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