<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientValidate;
use App\Models\Client;

class ClientsController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function store(ClientValidate $clientValidate)
    {
        $attributes = $clientValidate->validated();
        $attributes['status'] = 'open';
        Client::create($attributes);

        return back();
    }
}
