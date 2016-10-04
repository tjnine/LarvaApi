<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Container\Container as App;
use SuperModels\Repositories\ContactRepository as ContactRepo;
use Models\Contact;

class ContactsController extends Controller
{
    public $contact;

    public function __construct(ContactRepo $contactRepo)
    {
        $this->contact = $contactRepo;
    }

    public function all()
    {
        $contacts = Contact::all();
        return view('contacts.all', ['contacts' => $contacts]);
    }

    public function index()
    {
        header('content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Method: POST, GET, OPTIONS, PUT, PATCH, DELETE');
        $statusCode = 200;

        return \Response::json([
            'contacts' => $this->contact->all()], $statusCode);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
