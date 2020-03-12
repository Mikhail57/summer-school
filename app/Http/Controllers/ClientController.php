<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\StoreClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function registerClient(StoreClient $request)
    {
        $validated = $request->validated();

        $client = new Client;
        $client->first_name = $validated['firstName'];
        $client->last_name = $validated['lastName'];
        $client->middle_name = $validated['middleName'];
        $client->age = $validated['age'];
        $client->email = $validated['email'];
        $client->save();

        return redirect('/');
    }
}
