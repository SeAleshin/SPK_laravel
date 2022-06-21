<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class NewTasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::where('status', 'open')->simplePaginate(10);

        return view('admin.new', compact('clients'));
    }

    public function show(Client $client)
    {
        return view('admin.new_show', compact('client'));
    }

    public function update(Client $client)
    {
        $attr = \request()->validate([
            'status' => '',
        ]);

        $client->update($attr);

        return redirect(route('closed.show', $client));
    }
}
