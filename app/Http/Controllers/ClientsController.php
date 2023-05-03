<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // view all clients

        return view('clients.index', [
            'clients' => Client::orderBy('updated_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create a new client record
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->date_profiled = $request->date_profiled;
        $client->primary_legal_counsel = $request->primary_legal_counsel;
        $client->date_of_birth = $request->date_of_birth;
        $client->profile_image = $this->storeImage($request);
        $client->case_details = $request->case_details;
        $client->save();

        return redirect(route('clients.index'));
    }

    /**
     * Display the specified resource.
     * @param string $id
     * @return string
     */
    public function show(string $id)
    {
        return view('clients.show', [
            'client' => Client::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' .$request->first_name . $request->profile_image->extension();

        return $request->profile_image->move(public_path('images'), $newImageName);
    }
}
